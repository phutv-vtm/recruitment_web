import "./job.css";
import { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";
import { AiFillHeart, AiOutlineHeart } from "react-icons/ai";
import {
  BsCalendar2Check,
  BsCalendarEvent,
  BsFillBriefcaseFill,
  BsFillGeoAltFill,
  BsFillPeopleFill,
  BsFillPersonFill,
  BsPersonWorkspace,
} from "react-icons/bs";
import { FaIndustry } from "react-icons/fa";
import { useSelector } from "react-redux";
import jobApi from "../../../api/job";
import candidateApi from "../../../api/candidate";
import { MdOutlineAttachMoney } from "react-icons/md";
import { IoMdPeople } from "react-icons/io";
import dayjs from "dayjs";
import Button from "react-bootstrap/Button";
import AppyingDialog from "./ApplyingDialog";
import { toast } from "react-toastify";
import defaultCompanyLogo from "../../../assets/images/default_company_logo.png";
import SimilarJobItem from "./SimilarJobItem";
import clsx from "clsx";
import Form from "react-bootstrap/Form";
import jobQuestionApi from "../../../api/jobQuestion";

function Job() {
  const { id } = useParams();
  const nav = useNavigate();
  const [job, setJob] = useState({
    employer: {},
    jtype: {},
    jlevel: {},
    industries: {},
  });
  const user = useSelector((state) => state.candAuth.current);
  const isAuth = useSelector((state) => state.candAuth.isAuth);

  const [showDialog, setShowDialog] = useState(false);
  const [canApply, setCanApply] = useState(false);
  const [isSaved, setIsSaved] = useState(false);
  const [isLoadingCanApply, setIsLoadingCanApply] = useState(true);
  const [isLoadingIsSaved, setIsLoadingIsSaved] = useState(true);
  const [industries, setIndustries] = useState([]);
  const [recommendData, setRecommendData] = useState({});
  const [isLoadingRecommend, setIsLoadingRecommend] = useState(true);
  const [similarJobs, setSimilarJobs] = useState([]);
  const [question, setQuestion] = useState(null);
  const [questions, setQuestions] = useState([]);
  const [quesErr, setQuesErr] = useState(null);

  const getQuestions = async () => {
    if (!job?.id) return;
    const res = await jobQuestionApi.getByJobId(job.id);
    console.log({ res });
    setQuestions(res);
  };

  const getJobInf = async () => {
    const res = await jobApi.getById(id);
    setJob(res);
    setIndustries(res.industries);
  };

  const getSimilarJobs = async () => {
    const res = await jobApi.getSimilarJobs(id);
    setSimilarJobs(res);
  };

  const checkCanApply = async () => {
    try {
      setIsLoadingCanApply(true);
      const res = await jobApi.checkCanApply(id);
      setCanApply(res.value);
    } finally {
      setIsLoadingCanApply(false);
    }
  };

  const checkLoggedIn = () => {
    if (!isAuth) {
      toast.error("Vui lòng đăng nhập!");
    } else {
      setShowDialog(true);
    }
  };
  const checkJobSaved = async () => {
    try {
      setIsLoadingIsSaved(true);
      const res = await candidateApi.checkJobSaved(id);
      setIsSaved(res.value);
    } finally {
      setIsLoadingIsSaved(false);
    }
  };

  const getCurJobRecommendData = async () => {
    try {
      setIsLoadingRecommend(true);
      const res = await candidateApi.getCurJobRecommendData(id);
      setRecommendData(res);
    } catch (error) {
    } finally {
      setIsLoadingRecommend(false);
    }
  };

  const handleClickSaveBtn = async (status) => {
    const data = { status: status };
    await candidateApi.processJobSaving(id, data);
    setIsSaved(!isSaved);
  };

  const handleSendQues = async () => {
    if (!question) {
      setQuesErr("Vui lòng nhập câu hỏi!");
      return;
    }
    document.getElementById("ques-input").value = null;
    let data = {
      employer_id: job.employer_id,
      job_id: job.id,
      question: question,
    };
    await jobQuestionApi.create(data);
    toast.success("Gửi thành công!");
    await getQuestions();
  };

  useEffect(() => {
    getJobInf();
    getSimilarJobs();
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);
  useEffect(() => {
    if (isAuth) {
      checkCanApply();
      checkJobSaved();
      getCurJobRecommendData();
    } else if (!localStorage.getItem("candidate_jwt")) {
      setIsLoadingCanApply(false);
      setIsLoadingIsSaved(false);
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [isAuth]);

  useEffect(() => {
    getQuestions();
  // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [job]);

  useEffect(() => {
    if (question) setQuesErr(null);
  }, [question]);

  return (
    <div style={{ margin: "0 10%" }}>
      {job.employer.image ? (
        <div className="container image-container d-flex justify-content-center">
          <img
            src={job.employer.image}
            className="mx-auto d-block mt-3"
            style={{ maxWidth: "93%", maxHeight: "400px" }}
            alt=""
          />
        </div>
      ) : (
        <div className="pt-2" />
      )}
      <div className="d-flex mt-3">
        <div className="left-part">
          <div className="bg-white shadow-sm pb-4">
            <div className="d-flex border-bottom ps-4 pe-4">
              <div
                className="d-flex align-items-center ms-2 mt-4 mb-3"
                style={{ width: "130px", height: "130px" }}
              >
                <img
                  src={job.employer.logo || defaultCompanyLogo}
                  style={{ width: "130px" }}
                  alt=""
                />
              </div>
              <div className="container pt-2" style={{ marginLeft: "25px" }}>
                <div>
                  <h5 className="mt-3 text-main fw-600">{job.jname}</h5>
                  <div className="clearfix mt-3 mb-2">
                    <button
                      className={clsx("btn bg-main text-white ts-sm", isLoadingCanApply && "px-5")}
                      disabled={isLoadingCanApply || !canApply}
                      onClick={checkLoggedIn}
                    >
                      {isLoadingCanApply ? (
                        <span
                          className="spinner-border spinner-border-sm"
                          role="status"
                        />
                      ) : canApply ? (
                        "Ứng tuyển"
                      ) : (
                        "Đã ứng tuyển"
                      )}
                    </button>
                    <button
                      className={clsx("btn border-danger text-danger ms-5 ts-sm", isLoadingIsSaved && "px-5")}
                      disabled={isLoadingIsSaved}
                      onClick={() => handleClickSaveBtn(!isSaved)}
                    >
                      {isLoadingIsSaved ? (
                        <span
                          className="spinner-border spinner-border-sm"
                          role="status"
                        />
                      ) : !isSaved ? (
                        <div>
                          <AiOutlineHeart className="fs-5" /> Lưu việc làm
                        </div>
                      ) : (
                        <div>
                          <AiFillHeart className="fs-5" /> Hủy lưu việc làm
                        </div>
                      )}
                    </button>
                    {isAuth && (
                      <AppyingDialog
                        show={showDialog}
                        setShow={setShowDialog}
                        job={job}
                        user={user}
                        jobId={id}
                        recommendData={recommendData}
                        isLoadingRecommend={isLoadingRecommend}
                      />
                    )}
                  </div>
                </div>
              </div>
            </div>
            <div className="row row-cols-2 row-cols-lg-3 p-3 ps-5 ts-smd">
              <div className="d-flex mb-2 border-bottom pb-1">
                <div>
                  <FaIndustry className="text-main me-2 mb-1" />
                </div>
                <div>
                  <div className="text-main">Ngành nghề</div>
                  <div className="ts-sm fw-500">
                    {industries.map((item, index) => (
                      <span key={"industry" + item.id}>
                        {item.name}
                        {index !== industries.length - 1 ? ", " : null}
                      </span>
                    ))}
                  </div>
                </div>
              </div>
              <div className="d-flex mb-2 border-bottom pb-1">
                <div>
                  <MdOutlineAttachMoney className="fs-5 text-main mb-1" />
                </div>
                <div>
                  <div className="text-main">Lương</div>
                  <div className="fw-500">
                    {job.min_salary ? (
                      <span>
                        {job.min_salary} - {job.max_salary} triệu VND
                      </span>
                    ) : (
                      <span>Thỏa thuận</span>
                    )}
                  </div>
                </div>
              </div>
              <div className="d-flex mb-2 border-bottom pb-1">
                <div>
                  <BsFillBriefcaseFill className="ts-md text-main me-2 mb-1" />
                </div>
                <div>
                  <div className="text-main">Kinh nghiệm</div>
                  <div className="fw-500">
                    {job.yoe === null ? (
                      <span>Không yêu cầu</span>
                    ) : (
                      <span>{job.yoe === 0 ? "Dưới 1" : job.yoe} năm</span>
                    )}
                  </div>
                </div>
              </div>
              <div className="d-flex mb-2 border-bottom pb-1">
                <div>
                  <BsFillPeopleFill className="text-main me-1 mb-1" />
                </div>
                <div>
                  <div className="text-main">Số lượng</div>
                  <span className="fw-500">{job.amount} người</span>
                </div>
              </div>
              <div className="d-flex mb-2 border-bottom pb-1">
                <div>
                  <BsPersonWorkspace className="text-main me-2 mb-1" />
                </div>
                <div>
                  <div className="text-main">Hình thức</div>
                  <span className="fw-500">{job.jtype.name}</span>
                </div>
              </div>
              <div className="d-flex mb-2 border-bottom pb-1">
                <div>
                  <BsFillPersonFill className="text-main me-2 mb-1" />
                </div>
                <div>
                  <div className="text-main">Cấp bậc</div>
                  <span className="fw-500">{job.jlevel.name}</span>
                </div>
              </div>
              <div className="d-flex border-bottom pb-1">
                <div>
                  <BsCalendarEvent className="text-main me-2 mb-1" />
                </div>
                <div>
                  <div className="text-main">Ngày đăng</div>
                  <span className="fw-500">
                    {dayjs(job.created_at).format("DD/MM/YYYY")}
                  </span>
                </div>
              </div>
              <div className="d-flex border-bottom pb-1">
                <div>
                  <BsCalendar2Check className="text-main me-2 mb-1" />
                </div>
                <div>
                  <div className="text-main"> Hạn nộp</div>
                  <span className="fw-500">
                    {dayjs(job.expire_at).format("DD/MM/YYYY")}
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div className="bg-white mt-4 shadow-sm">
            <h5 className="bg-main text-white p-3">Chi tiết về job</h5>
            <div className="ps-4 pe-3 pt-1 pb-4 whitespace-preline">
              <div>
                <strong className="ts-lg">Mô tả công việc:</strong>
                <div className="ps-3 ts-smd">
                  {job.description || "Chưa cập nhật"}
                </div>
              </div>
              <div className="mt-2">
                <strong className="ts-lg">Yêu cầu ứng viên:</strong>
                <div className="ps-3 ts-smd">
                  {job.requirements || "Chưa cập nhật"}
                </div>
              </div>
              <div className="mt-2">
                <strong className="ts-lg">Chế độ phúc lợi:</strong>
                <div className="ps-3 ts-smd">
                  {job.benefits || "Chưa cập nhật"}
                </div>
              </div>
            </div>
          </div>
          <div className="bg-white mt-3 mb-5 shadow-sm px-3 py-2">
            <Form.Group>
              <strong>Đặt câu hỏi</strong>
              <div className="d-flex gap-2">
                <Form.Control
                  id="ques-input"
                  type="text"
                  size="sm"
                  placeholder="Nhập câu hỏi"
                  className=""
                  onChange={(e) => setQuestion(e.target.value)}
                />
                <Button
                  size="sm"
                  className="bg-main border-0 px-3"
                  onClick={handleSendQues}
                >
                  Gửi
                </Button>
              </div>
            </Form.Group>
            {quesErr && <small className="text-danger">{quesErr}</small>}
            <div className="mt-3">
              {questions?.map((item, index) => (
                <div key={item.id}>
                  <div className="ts-sm">
                    {item.author} -{" "}
                    {dayjs(item.created_at).format("DD/MM/YYYY HH:mm")}
                  </div>
                  <strong>Câu hỏi {index + 1}:</strong>&nbsp;
                  {item.question}
                  <div>
                    {"-> "}
                    {item.answer || "Đợi trả lời"}
                  </div>
                  <hr className="text-main" />
                </div>
              ))}
            </div>
          </div>
        </div>
        <div className="right-part ps-3">
          <div className="bg-white px-1 pb-2 shadow-sm">
            <div className="d-flex align-items-center ms-2">
              <div
                className="d-flex align-items-center"
                style={{ width: "90px", height: "90px" }}
              >
                <img
                  src={job.employer.logo || defaultCompanyLogo}
                  style={{ width: "90px" }}
                  alt={job.employer.name}
                />
              </div>
              <div className="ts-smd fw-bold ms-2 me-1">
                {job.employer.name}
              </div>
            </div>
            <div className="mx-2 ts-smd mb-1">
              <div className="d-flex">
                <div
                  className="d-flex align-items-center text-secondary"
                  style={{ minWidth: "90px" }}
                >
                  <IoMdPeople className="fs-5 me-1" />
                  Quy mô:
                </div>
                <div>
                  {job.employer.min_employees ? (
                    <>
                      {job.employer.min_employees}
                      {job.employer.max_employees !== 0
                        ? " - " + job.employer.max_employees
                        : "+ "}{" "}
                      nhân viên
                    </>
                  ) : (
                    "Chưa cập nhật"
                  )}
                </div>
              </div>
              <div className="d-flex">
                <div className="text-secondary" style={{ minWidth: "90px" }}>
                  <BsFillGeoAltFill className="me-1 mb-1" />
                  Địa điểm:
                </div>
                <div
                  className="whitespace-preline"
                  style={{ fontSize: "14.5px" }}
                >
                  {job.address}
                </div>
              </div>
              <Button
                size="sm"
                className="container-fluid mt-1 bg-main border-0"
                onClick={() => nav(`/companies/${job.employer.id}`)}
              >
                Xem trang công ty
              </Button>
            </div>
          </div>
          <div className="mt-4 bg-white shadow-sm">
            <div className="bg-main ts-lg text-white text-center border-bottom py-1">
              Việc làm tương tự
            </div>
            {similarJobs.map((job, index) => (
              <SimilarJobItem
                key={job.id}
                job={job}
                className={clsx(
                  index !== similarJobs.length - 1 && "border-bottom"
                )}
              />
            ))}
          </div>
        </div>
      </div>
    </div>
  );
}

export default Job;
