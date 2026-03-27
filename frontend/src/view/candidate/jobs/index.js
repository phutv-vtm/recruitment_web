import { useEffect, useState } from "react";
import { BsSearch } from "react-icons/bs";
import { useForm } from "react-hook-form";
import jobApi from "../../../api/job";
import Spinner from "react-bootstrap/Spinner";
import CPagination from "../../../components/CPagination";
import CMulSelect from "../../../components/CMulSelect";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";
import useGetAllIndustries from "../../../hooks/useGetAllIndustries";
import useGetAllLocations from "../../../hooks/useGetAllLocations";
import useGetAllJtypes from "../../../hooks/useGetAllJtypes";
import useGetAllJlevels from "../../../hooks/useGetAllJlevels";
import JobItem from "./JobItem";
import JobItemSkeleton from "./JobItemSkeleton";
import JobMap from "./JobMap";
import { candExpLevel, salaryLevel } from "../../../common/constant";
import CTooltip from "../../../components/CTooltip";
import { isNullObject } from "../../../common/functions";

function JobList() {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm();

  const { industries } = useGetAllIndustries();
  const { locations } = useGetAllLocations();
  const { jtypes } = useGetAllJtypes();
  const { jlevels } = useGetAllJlevels();
  const [selectedIndustries, setSelectedIndustries] = useState([]);
  const [selectedLocations, setSelectedLocations] = useState([]);
  const [industryErr, setIndustryErr] = useState(null);
  const [locationErr, setLocationErr] = useState(null);
  const [sortType, setSortType] = useState(0);

  const [jobs, setJobs] = useState([]);
  const [jobNum, setJobNum] = useState(0);
  const [isLoading, setIsLoading] = useState(true);
  const [totalPage, setTotalPage] = useState(1);
  const [curPage, setCurPage] = useState(1);
  const [filterConditions, setFilterConditions] = useState({});
  const [isSearchLoading, setIsSearchLoading] = useState(false);

  const [distance, setDistance] = useState(null);
  const [address, setAddress] = useState(null);
  const [showHint, setShowHint] = useState(false);
  const [refreshHint, setRefreshHint] = useState(false);
  const [hintLocations, setHintLocations] = useState([]);
  const [curLocation, setCurLocation] = useState({});
  const [useMap, setUseMap] = useState(false);

  const getJobs = async (page = 1, conditions) => {
    try {
      setIsLoading(true);
      let params = {
        ...(conditions || filterConditions),
      };
      if (useMap) params.type = "get_all";
      else {
        params.page = page;
        params.sort_type = sortType;
      }

      const res = await jobApi.getList(params);
      if (useMap) {
        setJobs(res);
      } else {
        setJobNum(res.total);
        setJobs(res.data);
        setTotalPage(res.last_page);
      }
    } catch (error) {
    } finally {
      setIsLoading(false);
    }
  };

  const handleFilter = async (data) => {
    if (
      useMap &&
      (selectedIndustries.length === 0 || selectedLocations.length === 0)
    )
      return;

    try {
      const conditions = {
        ...data,
        industry_id: selectedIndustries,
        location_id: selectedLocations,
      };
      setIsSearchLoading(true);
      setFilterConditions(conditions);
      await getJobs(1, conditions);
      setCurPage(1);
      setIsSearchLoading(false);
    } catch (e) {
      setIsSearchLoading(false);
    }
  };

  const handleUseMap = () => {
    if (useMap) setUseMap(false);
    else {
      if (checkCanUseMap()) setUseMap(true);
    }
  };

  // const handleEnter = (key) => {
  //   if (key === "Enter" && address !== "") {
  //     setRefreshHint(true);
  //     setShowHint(true);
  //   }
  // };

  const handleChangeAddress = async (address) => {
    setAddress(address);
    setRefreshHint(true);
  };

  const handleSelectLocation = (location) => {
    setShowHint(false);
    setCurLocation(location);
    document.getElementById("map-address-input").value = location.address.label;
  };

  const handleSelectYourLocation = () => {
    setAddress("Vị trí của bạn");
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition((position) => {
        setShowHint(false);
        setCurLocation({
          position: {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          },
        });
        document.getElementById("map-address-input").value = "Vị trí của bạn";
      });
    } else alert("Trình duyệt không hỗ trợ xác định vị trí của bạn!");
  };

  const checkCanUseMap = () => {
    return selectedIndustries.length > 0 && selectedLocations.length > 0;
  };

  useEffect(() => {
    if (useMap) {
      if (isNullObject(filterConditions)) {
        document.getElementById("job-filter-btn").click();
      } else getJobs();
    }
    else {
      getJobs();
      setCurLocation({});
      setDistance(null);
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [useMap]);

  useEffect(() => {
    getJobs();
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [sortType]);

  useEffect(() => {
    if (useMap) {
      if (selectedIndustries.length === 0) setIndustryErr("Vui lòng chọn!");
      else setIndustryErr(null);
      if (selectedLocations.length === 0) setLocationErr("Vui lòng chọn!");
      else setLocationErr(null);
    } else {
      setIndustryErr(null);
      setLocationErr(null);
    }
  }, [useMap, selectedIndustries, selectedLocations]);

  return (
    <div className="pt-3 pb-4" style={{ margin: "0px 100px" }}>
      <Form noValidate className="bg-mlight p-3 rounded shadow-sm border">
        <h4 className="text-center text-main">
          Tìm việc làm nhanh, việc làm mới nhất trên toàn quốc
        </h4>
        <div className="mt-3 d-flex flex-column flex-lg-row">
          <div style={{ width: "89%" }}>
            <div className="row row-cols-lg-3 gap-1 gap-lg-0 ps-3">
              <Form.Group className="position-relative">
                <Form.Control
                  type="text"
                  size="sm"
                  aria-label="job_keyword"
                  placeholder="Tìm việc làm"
                  {...register("keyword", { minLength: 3 })}
                  isInvalid={errors.keyword}
                />
                <Form.Control.Feedback
                  type="invalid"
                  tooltip
                  style={{ top: "-85%" }}
                >
                  Vui lòng nhập tối thiểu 3 kí tự
                </Form.Control.Feedback>
              </Form.Group>
              <div>
                {industries.length > 0 && (
                  <CMulSelect
                    size="sm"
                    limit={3}
                    defaultText="Tất cả ngành nghề"
                    items={industries}
                    textAtt="name"
                    valueAtt="id"
                    setOutput={setSelectedIndustries}
                    message={industryErr}
                  />
                )}
              </div>
              <div>
                {locations.length > 0 && (
                  <CMulSelect
                    size="sm"
                    limit={3}
                    defaultText="Tất cả tỉnh thành"
                    items={locations}
                    textAtt="name"
                    valueAtt="id"
                    setOutput={setSelectedLocations}
                    message={locationErr}
                  />
                )}
              </div>
            </div>
            <div className="row row-cols-lg-5 gap-1 gap-lg-0 mt-2 ps-3">
              <div>
                <select
                  className="form-select form-select-sm"
                  {...register("salary")}
                >
                  {salaryLevel.map((item, index) => (
                    <option key={index} value={item.value}>
                      {item.name}
                    </option>
                  ))}
                </select>
              </div>
              <div>
                <select
                  className="form-select form-select-sm"
                  {...register("experience")}
                >
                  {candExpLevel.map((item, index) => (
                    <option key={index} value={item.value}>
                      {item.name}
                    </option>
                  ))}
                </select>
              </div>
              <div>
                <select
                  className="form-select form-select-sm"
                  {...register("jtype_id")}
                >
                  <option value="">Hình thức việc làm</option>
                  {jtypes.map((item) => (
                    <option value={item.id} key={"jtype" + item.id}>
                      {item.name}
                    </option>
                  ))}
                </select>
              </div>
              <div>
                <select
                  className="form-select form-select-sm"
                  {...register("jlevel_id")}
                >
                  <option value="">Cấp bậc việc làm</option>
                  {jlevels.map((item) => (
                    <option value={item.id} key={"jlevel" + item.id}>
                      {item.name}
                    </option>
                  ))}
                </select>
              </div>
              <div>
                <select
                  className="form-select form-select-sm"
                  {...register("posting_period")}
                >
                  <option value="">Đăng trong vòng</option>
                  <option value="4">4 ngày trước</option>
                  <option value="7">1 tuần trước</option>
                  <option value="14">2 tuần trước</option>
                  <option value="30">1 tháng trước</option>
                </select>
              </div>
            </div>
            <div className="ms-3 mt-2 d-flex gap-2 align-items-lg-center flex-lg-row flex-column">
              <CTooltip
                text={
                  !checkCanUseMap()
                    ? "Để sử dụng tính năng này vui lòng lựa chọn Tỉnh thành và Ngành nghề"
                    : "Có thể dùng"
                }
              >
                <div style={{ marginTop: "5px", width: "170px" }}>
                  <Form.Check
                    type="switch"
                    label="Tìm kiếm với map"
                    className="ts-smd"
                    onClick={handleUseMap}
                    disabled={!checkCanUseMap() && !useMap}
                  />
                </div>
              </CTooltip>
              {useMap && (
                <>
                  <div className="position-relative" style={{ width: "390px" }}>
                    <Form.Control
                      id="map-address-input"
                      type="type"
                      size="sm"
                      aria-label="address-input"
                      placeholder="Nhập địa điểm"
                      onChange={(e) => handleChangeAddress(e.target.value)}
                      // onKeyDown={(e) => handleEnter(e.key)}()
                      onFocus={() => setShowHint(true)}
                      onBlur={() => {
                        setTimeout(() => {
                          setShowHint(false);
                        }, 500);
                      }}
                    />
                    {showHint && (
                      <div
                        className="position-absolute w-100 bg-white z-index-1 ts-smd mt-1 shadow border overflow-auto"
                        style={{ maxHeight: "280px" }}
                      >
                        <div
                          className="fw-600 px-2 py-1 hover-bg-primary hover-text-white pointer border-bottom"
                          onClick={handleSelectYourLocation}
                        >
                          Vị trí của bạn
                        </div>
                        {hintLocations?.map((location, index) => (
                          <div
                            key={index}
                            className="px-2 py-1 hover-bg-primary hover-text-white pointer border-bottom"
                            onClick={() => handleSelectLocation(location)}
                          >
                            {location.address.label}
                          </div>
                        ))}
                      </div>
                    )}
                  </div>
                  <InputGroup size="sm" style={{ width: "230px" }}>
                    <InputGroup.Text className="bg-white">Bán kính</InputGroup.Text>
                    <Form.Control
                      type="number"
                      aria-label="job-distance-input"
                      placeholder="Khoảng cách"
                      className="border-end-0"
                      onChange={(e) => setDistance(e.target.value)}
                    />
                    <InputGroup.Text className="bg-white border-start-0">
                      km
                    </InputGroup.Text>
                  </InputGroup>
                </>
              )}
            </div>
          </div>
          <div className="flex-fill ps-3 align-self-lg-center mt-2 mt-lg-0">
            <button
              id="job-filter-btn"
              type="button"
              className="btn btn-sm border-0 bg-main text-white rounded-sm px-3"
              onClick={handleSubmit(handleFilter)}
            >
              {isSearchLoading ? (
                <Spinner size="sm" />
              ) : (
                <BsSearch className="fs-5" />
              )}
              <span>Tìm kiếm</span>
            </button>
          </div>
        </div>
      </Form>
      <div className="clearfix mt-3 mb-2">
        <div className="float-start text-main ts-smd mt-2">
          Có {jobNum} kết quả phù hợp
        </div>
        {!useMap && jobs.length > 0 ? (
          <CTooltip text="Sắp xếp theo">
            <Form.Select
              size="sm"
              className="float-end"
              style={{ width: "220px" }}
              onChange={(e) => setSortType(Number(e.target.value))}
            >
              <option value="0">Mặc định</option>
              <option value="1">Mới nhất đến cũ nhất</option>
              <option value="2">Cũ nhất đến mới nhất</option>
            </Form.Select>
          </CTooltip>
        ) : null}
      </div>
      {useMap ? (
        <JobMap
          jobs={jobs}
          address={address}
          distance={distance}
          refreshHint={refreshHint}
          setRefreshHint={setRefreshHint}
          hintLocations={hintLocations}
          setHintLocations={setHintLocations}
          curLocation={curLocation}
          setJobNum={setJobNum}
        />
      ) : isLoading ? (
        <div className="row row-cols-lg-3">
          {Array.from({ length: 9 }, (_, index) => (
            <JobItemSkeleton key={index} />
          ))}
        </div>
      ) : jobs.length === 0 ? (
        <h4 className="my-4">Không có bản ghi nào phù hợp!</h4>
      ) : (
        <>
          <div className="row row-cols-lg-3">
            {jobs.map((job) => (
              <JobItem key={job.id} job={job} />
            ))}
          </div>
          <CPagination
            className="justify-content-center"
            totalPage={totalPage}
            curPage={curPage}
            setCurPage={setCurPage}
            getList={getJobs}
          />
        </>
      )}
    </div>
  );
}

export default JobList;
