import defaultAvt from "../../../../../../assets/images/default-avatar.webp";
import { IoCalendarClear } from "react-icons/io5";
import { FaPhoneAlt } from "react-icons/fa";
import { IoMdMail } from "react-icons/io";
import { MdLocationOn } from "react-icons/md";
import { IoIosLink } from "react-icons/io";
import { ContentItem, InforPart } from "../../components";
import { useContext, useEffect, useState } from "react";
import { CandidateContext } from "../../../layouts";
import clsx from "clsx";
import dayjs from "dayjs";
import { TemplateContext } from "../TemplateWrapper";
import FlexInput from "../../../../../../components/FlexInput";

// ─── Leaf components (defined outside Template2 to prevent remount on re-render) ───

function Skill({ infor, index, bgColor }) {
  const { cvSkills, setCvSkills } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [name, setName] = useState("");
  const [description, setDescription] = useState("");
  useEffect(() => {
    if (name) setCvSkills(prev => prev.map((s, i) => i === index ? { ...s, name } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [name]);
  useEffect(() => {
    if (description) setCvSkills(prev => prev.map((s, i) => i === index ? { ...s, description } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [description]);

  return (
    <div className="content">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("fw-550", bgColor)}
        placeholder="Tên kỹ năng"
        defaultValue={infor?.name}
        setCurrent={setName}
      />
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx(bgColor)}
        placeholder="Mô tả"
        defaultValue={infor?.description}
        setCurrent={setDescription}
      />
    </div>
  );
}

function Certificate({ infor, index, bgColor }) {
  const { cvCertificates, setCvCertificates } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [name, setName] = useState("");
  const [receiveDate, setReceiveDate] = useState("");
  useEffect(() => {
    if (name) setCvCertificates(prev => prev.map((s, i) => i === index ? { ...s, name } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [name]);
  useEffect(() => {
    if (receiveDate) setCvCertificates(prev => prev.map((s, i) => i === index ? { ...s, receive_date: receiveDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [receiveDate]);

  return (
    <div className="content d-flex">
      <FlexInput
        disabled={cvMode === "READ"}
        className="w-25"
        innerClassName={clsx("fw-550 ts-sm", bgColor)}
        placeholder="mm/yyyy"
        defaultValue={
          infor.receive_date
            ? dayjs(infor.receive_date).format("MM/YYYY")
            : null
        }
        setCurrent={setReceiveDate}
      />
      <FlexInput
        disabled={cvMode === "READ"}
        className="flex-fill"
        innerClassName={clsx(bgColor)}
        placeholder="Tên chứng chỉ"
        defaultValue={infor?.name}
        setCurrent={setName}
      />
    </div>
  );
}

function Prize({ infor, index, bgColor }) {
  const { cvPrizes, setCvPrizes } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [name, setName] = useState("");
  const [receiveDate, setReceiveDate] = useState("");
  useEffect(() => {
    if (name) setCvPrizes(prev => prev.map((s, i) => i === index ? { ...s, name } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [name]);
  useEffect(() => {
    if (receiveDate) setCvPrizes(prev => prev.map((s, i) => i === index ? { ...s, receive_date: receiveDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [receiveDate]);

  return (
    <div className="content d-flex">
      <FlexInput
        disabled={cvMode === "READ"}
        className="w-25"
        innerClassName={clsx("fw-550", bgColor)}
        placeholder="mm/yyyy"
        defaultValue={
          infor.receive_date
            ? dayjs(infor.receive_date).format("MM/YYYY")
            : null
        }
        setCurrent={setReceiveDate}
      />
      <FlexInput
        disabled={cvMode === "READ"}
        className="flex-fill"
        innerClassName={clsx(bgColor)}
        placeholder="Tên giải thưởng"
        defaultValue={infor?.name}
        setCurrent={setName}
      />
    </div>
  );
}

function Education({ infor, index, menu, bgColor }) {
  const { cvEducations, setCvEducations } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [school, setSchool] = useState("");
  const [major, setMajor] = useState("");
  const [description, setDescription] = useState("");
  const [startDate, setStartDate] = useState("");
  const [endDate, setEndDate] = useState("");

  useEffect(() => {
    if (school) setCvEducations(prev => prev.map((s, i) => i === index ? { ...s, school } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [school]);
  useEffect(() => {
    if (major) setCvEducations(prev => prev.map((s, i) => i === index ? { ...s, major } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [major]);
  useEffect(() => {
    if (description) setCvEducations(prev => prev.map((s, i) => i === index ? { ...s, description } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [description]);
  useEffect(() => {
    if (startDate) setCvEducations(prev => prev.map((s, i) => i === index ? { ...s, start_date: startDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [startDate]);
  useEffect(() => {
    if (endDate) setCvEducations(prev => prev.map((s, i) => i === index ? { ...s, end_date: endDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [endDate]);

  return (
    <div className="content">
      <div className="d-flex align-items-center">
        <FlexInput
          disabled={cvMode === "READ"}
          className="flex-fill"
          innerClassName={clsx("fw-550", bgColor)}
          placeholder="Trường/Trung tâm"
          defaultValue={infor?.school}
          setCurrent={setSchool}
        />
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx(
            "fst-italic text-secondary ts-xxs text-end",
            bgColor
          )}
          placeholder="Bắt đầu"
          defaultValue={
            infor.start_date ? dayjs(infor.start_date).format("YYYY") : null
          }
          setCurrent={setStartDate}
        />
        -
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx("fst-italic text-secondary ts-xxs", bgColor)}
          placeholder="Kết thúc"
          defaultValue={
            infor.end_date ? dayjs(infor.end_date).format("YYYY") : null
          }
          setCurrent={setEndDate}
        />
      </div>
      {menu[0].on && (
        <FlexInput
          disabled={cvMode === "READ"}
          innerClassName={clsx(bgColor)}
          placeholder="Chuyên ngành"
          defaultValue={infor?.major}
          setCurrent={setMajor}
        />
      )}
      {menu[1].on && (
        <FlexInput
          disabled={cvMode === "READ"}
          innerClassName={clsx(bgColor)}
          placeholder="Mô tả"
          defaultValue={infor?.description}
          setCurrent={setDescription}
        />
      )}
    </div>
  );
}

function Experience({ infor, index, bgColor }) {
  const { cvExperiences, setCvExperiences } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [name, setName] = useState("");
  const [company, setCompany] = useState("");
  const [description, setDescription] = useState("");
  const [startDate, setStartDate] = useState("");
  const [endDate, setEndDate] = useState("");

  useEffect(() => {
    if (name) setCvExperiences(prev => prev.map((s, i) => i === index ? { ...s, name } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [name]);
  useEffect(() => {
    if (company) setCvExperiences(prev => prev.map((s, i) => i === index ? { ...s, company } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [company]);
  useEffect(() => {
    if (description) setCvExperiences(prev => prev.map((s, i) => i === index ? { ...s, description } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [description]);
  useEffect(() => {
    if (startDate) setCvExperiences(prev => prev.map((s, i) => i === index ? { ...s, start_date: startDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [startDate]);
  useEffect(() => {
    if (endDate) setCvExperiences(prev => prev.map((s, i) => i === index ? { ...s, end_date: endDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [endDate]);

  return (
    <div className="content">
      <div className="d-flex align-items-center">
        <FlexInput
          disabled={cvMode === "READ"}
          className="flex-fill"
          innerClassName={clsx("fw-550", bgColor)}
          placeholder="Vị trí việc làm"
          defaultValue={infor?.name}
          setCurrent={setName}
        />
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx(
            "fst-italic text-secondary ts-xxs text-end",
            bgColor
          )}
          placeholder="Bắt đầu"
          defaultValue={
            infor.start_date
              ? dayjs(infor.start_date).format("MM/YYYY")
              : null
          }
          setCurrent={setStartDate}
        />
        -
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx("fst-italic text-secondary ts-xxs", bgColor)}
          placeholder="Kết thúc"
          defaultValue={
            infor.end_date ? dayjs(infor.end_date).format("MM/YYYY") : null
          }
          setCurrent={setEndDate}
        />
      </div>
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx(bgColor)}
        placeholder="Công ty/Doanh nghiệp"
        defaultValue={infor?.company}
        setCurrent={setCompany}
      />

      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx(bgColor)}
        placeholder="Mô tả"
        defaultValue={infor?.description}
        setCurrent={setDescription}
      />
    </div>
  );
}

function Project({ infor, index, menu, bgColor }) {
  const { cvProjects, setCvProjects } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [name, setName] = useState("");
  const [type, setType] = useState("");
  const [role, setRole] = useState("");
  const [technologies, setTechnologies] = useState("");
  const [link, setLink] = useState("");
  const [description, setDescription] = useState("");
  const [startDate, setStartDate] = useState("");
  const [endDate, setEndDate] = useState("");

  useEffect(() => {
    if (name) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, name } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [name]);
  useEffect(() => {
    if (type) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, prj_type: type } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [type]);
  useEffect(() => {
    if (role) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, role } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [role]);
  useEffect(() => {
    if (technologies) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, technologies } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [technologies]);
  useEffect(() => {
    if (link) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, link } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [link]);
  useEffect(() => {
    if (description) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, description } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [description]);
  useEffect(() => {
    if (startDate) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, start_date: startDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [startDate]);
  useEffect(() => {
    if (endDate) setCvProjects(prev => prev.map((s, i) => i === index ? { ...s, end_date: endDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [endDate]);

  return (
    <div className="content">
      <div className="d-flex align-items-center">
        <FlexInput
          disabled={cvMode === "READ"}
          className="flex-fill"
          innerClassName={clsx("fw-550", bgColor)}
          placeholder="Tên dự án"
          defaultValue={infor?.name}
          setCurrent={setName}
        />
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx(
            "fst-italic text-secondary ts-xxs text-end",
            bgColor
          )}
          placeholder="Bắt đầu"
          defaultValue={
            infor.start_date
              ? dayjs(infor.start_date).format("MM/YYYY")
              : null
          }
          setCurrent={setStartDate}
        />
        -
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx("fst-italic text-secondary ts-xxs", bgColor)}
          placeholder="Kết thúc"
          defaultValue={
            infor.end_date ? dayjs(infor.end_date).format("MM/YYYY") : null
          }
          setCurrent={setEndDate}
        />
      </div>
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("text-capitalize text-secondary ts-sm", bgColor)}
        placeholder="Loại dự án (Cá nhân/Nhóm)"
        defaultValue={infor?.prj_type}
        setCurrent={setType}
      />
      {menu[0].on && (
        <FlexInput
          disabled={cvMode === "READ"}
          innerClassName={clsx("text-decoration-underline", bgColor)}
          placeholder="Liên kết"
          defaultValue={infor?.link}
          setCurrent={setLink}
        />
      )}
      {menu[1].on && (
        <FlexInput
          disabled={cvMode === "READ"}
          innerClassName={clsx(bgColor)}
          placeholder="Công việc/Vai trò"
          defaultValue={infor?.role}
          setCurrent={setRole}
        />
      )}
      {menu[2].on && (
        <FlexInput
          disabled={cvMode === "READ"}
          innerClassName={clsx(bgColor)}
          placeholder="Công nghệ sử dụng"
          defaultValue={infor?.technologies}
          setCurrent={setTechnologies}
        />
      )}
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx(bgColor)}
        placeholder="Mô tả"
        defaultValue={infor?.description}
        setCurrent={setDescription}
      />
    </div>
  );
}

function Activity({ infor, index, menu, bgColor }) {
  const { cvActivities, setCvActivities } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [organization, setOrganization] = useState("");
  const [role, setRole] = useState("");
  const [link, setLink] = useState("");
  const [description, setDescription] = useState("");
  const [startDate, setStartDate] = useState("");
  const [endDate, setEndDate] = useState("");

  useEffect(() => {
    if (organization) setCvActivities(prev => prev.map((s, i) => i === index ? { ...s, organization } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [organization]);
  useEffect(() => {
    if (role) setCvActivities(prev => prev.map((s, i) => i === index ? { ...s, role } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [role]);
  useEffect(() => {
    if (link) setCvActivities(prev => prev.map((s, i) => i === index ? { ...s, link } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [link]);
  useEffect(() => {
    if (description) setCvActivities(prev => prev.map((s, i) => i === index ? { ...s, description } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [description]);
  useEffect(() => {
    if (startDate) setCvActivities(prev => prev.map((s, i) => i === index ? { ...s, start_date: startDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [startDate]);
  useEffect(() => {
    if (endDate) setCvActivities(prev => prev.map((s, i) => i === index ? { ...s, end_date: endDate } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [endDate]);

  return (
    <div className="content">
      <div className="d-flex align-items-center">
        <FlexInput
          disabled={cvMode === "READ"}
          className="flex-fill"
          innerClassName={clsx("fw-550", bgColor)}
          placeholder="Tên dự án"
          defaultValue={infor?.organization}
          setCurrent={setOrganization}
        />
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx(
            "fst-italic text-secondary ts-xxs text-end",
            bgColor
          )}
          placeholder="Bắt đầu"
          defaultValue={
            infor.start_date
              ? dayjs(infor.start_date).format("MM/YYYY")
              : null
          }
          setCurrent={setStartDate}
        />
        -
        <FlexInput
          disabled={cvMode === "READ"}
          style={{ width: "17%" }}
          innerClassName={clsx("fst-italic text-secondary ts-xxs", bgColor)}
          placeholder="Kết thúc"
          defaultValue={
            !infor.is_present
              ? infor.end_date
                ? dayjs(infor.end_date).format("MM/YYYY")
                : null
              : "hiện tại"
          }
          setCurrent={setEndDate}
        />
      </div>
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("text-secondary ts-sm", bgColor)}
        placeholder="Vị trí/Vai trò"
        defaultValue={infor?.role}
        setCurrent={setRole}
      />
      {menu[0].on && (
        <FlexInput
          disabled={cvMode === "READ"}
          innerClassName={clsx("text-decoration-underline", bgColor)}
          placeholder="Liên kết"
          defaultValue={infor?.link}
          setCurrent={setLink}
        />
      )}
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx(bgColor)}
        placeholder="Mô tả"
        defaultValue={infor?.description}
        setCurrent={setDescription}
      />
    </div>
  );
}

function Other({ infor, index, bgColor }) {
  const { cvOthers, setCvOthers } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  const [name, setName] = useState("");
  const [description, setDescription] = useState("");
  useEffect(() => {
    if (name) setCvOthers(prev => prev.map((s, i) => i === index ? { ...s, name } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [name]);
  useEffect(() => {
    if (description) setCvOthers(prev => prev.map((s, i) => i === index ? { ...s, description } : s));
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [description]);

  return (
    <div className="content">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Khác"
        defaultValue={infor?.name}
        setCurrent={setName}
      />
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx(bgColor)}
        placeholder="Mô tả"
        defaultValue={infor?.description}
        setCurrent={setDescription}
      />
    </div>
  );
}

// ─── Part wrapper components (defined outside Template2) ───

function PersonalPart({ bgColor }) {
  const { basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="personal" className="mb-3">
      <div className="position-relative mt-2">
        <div
          className="personal-icons-bar rounded-pill"
          style={{ height: "200px", width: "38px" }}
        ></div>
        <div
          className="position-absolute w-100 pe-2"
          style={{ fontSize: "14px", left: "9px", top: "15px" }}
        >
          <FlexInput
            disabled={cvMode === "READ"}
            className="mb-2"
            innerClassName={bgColor}
            iconLeft={
              <IoCalendarClear className="fs-5 mb-1 me-3 text-white" />
            }
            placeholder="Ngày/tháng/năm sinh"
            defaultValue={
              cvMode !== "CREATE_0"
                ? dayjs(basicInfor.dob).format("DD/MM/YYYY")
                : null
            }
            {...register("dob")}
          />
          <FlexInput
            disabled={cvMode === "READ"}
            className="mb-2"
            innerClassName={bgColor}
            iconLeft={<FaPhoneAlt className="fs-5 mb-1 me-3 text-white" />}
            placeholder="Số điện thoại"
            defaultValue={cvMode !== "CREATE_0" ? basicInfor.phone : null}
            {...register("phone")}
          />
          <FlexInput
            disabled={cvMode === "READ"}
            className="mb-2"
            innerClassName={bgColor}
            iconLeft={<IoMdMail className="fs-5 mb-1 me-3 text-white" />}
            placeholder="Email"
            defaultValue={cvMode !== "CREATE_0" ? basicInfor.email : null}
            {...register("email")}
          />
          <FlexInput
            disabled={cvMode === "READ"}
            className="mb-2"
            innerClassName={bgColor}
            iconLeft={<IoIosLink className=" fs-5 mb-1 me-3 text-white" />}
            placeholder="Liên kết"
            defaultValue={cvMode !== "CREATE_0" ? basicInfor.link : null}
            {...register("link")}
          />
          <FlexInput
            disabled={cvMode === "READ"}
            className="mb-2"
            innerClassName={bgColor}
            iconLeft={
              <MdLocationOn
                className="fs-4 mb-1 text-white"
                style={{ marginRight: "14px" }}
              />
            }
            placeholder="Địa chỉ"
            defaultValue={cvMode !== "CREATE_0" ? basicInfor.address : null}
            {...register("address")}
          />
        </div>
      </div>
    </InforPart>
  );
}

function ObjectivePart({ bgColor }) {
  const { basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="objective" className="mb-3">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Mục tiêu nghề nghiệp"
        defaultValue={
          cvMode === "EDIT"
            ? basicInfor.objectiveTitle
            : "Mục tiêu nghề nghiệp"
        }
        {...register("objectiveTitle")}
      />
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("content", bgColor)}
        placeholder="Nội dung"
        defaultValue={cvMode !== "CREATE_0" ? basicInfor?.objective : null}
        {...register("objective")}
      />
    </InforPart>
  );
}

function SkillPart({ bgColor }) {
  const { cvSkills, setCvSkills, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="skill" className="mb-3">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Các kỹ năng"
        defaultValue={
          cvMode === "EDIT" ? basicInfor.skillTitle : "Các kỹ năng"
        }
        {...register("skillTitle")}
      />
      {cvSkills.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          key={`skill_${index}`}
          index={index}
          items={cvSkills}
          setItems={setCvSkills}
        >
          <Skill infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function CertificatePart({ bgColor }) {
  const { cvCertificates, setCvCertificates, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart
      disabled={cvMode === "READ"}
      type="certificate"
      className="mb-3"
    >
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Chứng chỉ"
        defaultValue={
          cvMode === "EDIT" ? basicInfor.certificateTitle : "Chứng chỉ"
        }
        {...register("certificateTitle")}
      />
      {cvCertificates.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          key={`certificate_${index}`}
          index={index}
          items={cvCertificates}
          setItems={setCvCertificates}
        >
          <Certificate infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function PrizePart({ bgColor }) {
  const { cvPrizes, setCvPrizes, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="prize" className="mb-3">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Giải thưởng"
        defaultValue={
          cvMode === "EDIT" ? basicInfor.prizeTitle : "Giải thưởng"
        }
        {...register("prizeTitle")}
      />
      {cvPrizes.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          key={`prize_${index}`}
          index={index}
          items={cvPrizes}
          setItems={setCvPrizes}
        >
          <Prize infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function EducationPart({ bgColor }) {
  const { cvEducations, setCvEducations, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="education" className="mb-3">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Học vấn"
        defaultValue={
          cvMode === "EDIT" ? basicInfor.educationTitle : "Học vấn"
        }
        {...register("educationTitle")}
      />
      {cvEducations.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          className="mb-1 py-1"
          key={`education_${index}`}
          index={index}
          items={cvEducations}
          setItems={setCvEducations}
          menuVaule={[
            { name: "Chuyên ngành", on: item.major },
            { name: "Mô tả", on: item.description },
          ]}
        >
          <Education infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function ExperiencePart({ bgColor }) {
  const { cvExperiences, setCvExperiences, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart
      disabled={cvMode === "READ"}
      type="experience"
      className="mb-3"
    >
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Kinh nghiệm làm việc"
        defaultValue={
          cvMode === "EDIT"
            ? basicInfor.experienceTitle
            : "Kinh nghiệm làm việc"
        }
        {...register("experienceTitle")}
      />
      {cvExperiences.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          className="mb-1 py-1"
          key={`experience_${index}`}
          index={index}
          items={cvExperiences}
          setItems={setCvExperiences}
        >
          <Experience infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function ProjectPart({ bgColor }) {
  const { cvProjects, setCvProjects, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="project" className="mb-3">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Dự án"
        defaultValue={cvMode === "EDIT" ? basicInfor.projectTitle : "Dự án"}
        {...register("projectTitle")}
      />
      {cvProjects.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          className="mb-1 py-1"
          key={`project_${index}`}
          index={index}
          items={cvProjects}
          setItems={setCvProjects}
          menuVaule={[
            { name: "Liên kết", on: item.link },
            { name: "Công việc", on: item.role },
            { name: "Công nghệ", on: item.technologies },
          ]}
        >
          <Project infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function ActivityPart({ bgColor }) {
  const { cvActivities, setCvActivities, basicInfor, register } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="activity" className="mb-3">
      <FlexInput
        disabled={cvMode === "READ"}
        innerClassName={clsx("title", bgColor)}
        placeholder="Hoạt động"
        defaultValue={
          cvMode === "EDIT" ? basicInfor.activityTitle : "Hoạt động"
        }
        {...register("activityTitle")}
      />
      {cvActivities.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          className="mb-1 py-1"
          key={`activity_${index}`}
          index={index}
          items={cvActivities}
          setItems={setCvActivities}
          menuVaule={[{ name: "Liên kết", on: item.link }]}
        >
          <Activity infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

function OtherPart({ bgColor }) {
  const { cvOthers, setCvOthers } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);
  return (
    <InforPart disabled={cvMode === "READ"} type="other" className="mb-3">
      {cvOthers.map((item, index) => (
        <ContentItem
          disabled={cvMode === "READ"}
          className="mb-1 py-1"
          key={`other_${index}`}
          index={index}
          items={cvOthers}
          setItems={setCvOthers}
        >
          <Other infor={item} index={index} bgColor={bgColor} />
        </ContentItem>
      ))}
    </InforPart>
  );
}

// ─── Main template component ───

export default function Template2() {
  const {
    parts,
    setParts,
    basicInfor,
    fullname,
    cvEducations,
    cvExperiences,
    cvProjects,
    cvSkills,
    cvCertificates,
    cvPrizes,
    cvActivities,
    cvOthers,
    register,
    handleDisplayImg,
  } = useContext(TemplateContext);
  const { cvMode } = useContext(CandidateContext);

  useEffect(() => {
    setParts([
      "objective",
      "experience",
      "project",
      "activity",
      "prize",
      "personal",
      "education",
      "skill",
      "certificate",
      "other",
    ]);
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);

  const renderPart = (index) => {
    const bgColor = index >= 5 ? "cv-bg-main" : "bg-white";
    switch (parts[index]) {
      case "personal":
        return <PersonalPart bgColor={bgColor} />;
      case "objective":
        return basicInfor.objective ? (
          <ObjectivePart bgColor={bgColor} />
        ) : null;
      case "skill":
        return cvSkills.length > 0 ? <SkillPart bgColor={bgColor} /> : null;
      case "certificate":
        return cvCertificates.length > 0 ? (
          <CertificatePart bgColor={bgColor} />
        ) : null;
      case "prize":
        return cvPrizes.length > 0 ? <PrizePart bgColor={bgColor} /> : null;
      case "education":
        return cvEducations.length > 0 ? (
          <EducationPart bgColor={bgColor} />
        ) : null;
      case "experience":
        return cvExperiences.length > 0 ? (
          <ExperiencePart bgColor={bgColor} />
        ) : null;
      case "project":
        return cvProjects.length > 0 ? <ProjectPart bgColor={bgColor} /> : null;
      case "activity":
        return cvActivities.length > 0 ? (
          <ActivityPart bgColor={bgColor} />
        ) : null;
      case "other":
        return cvOthers.length > 0 ? <OtherPart bgColor={bgColor} /> : null;
      default:
        break;
    }
  };

  return (
    <div className="mx-auto " style={{ width: "800px" }}>
      <div id="resume" className="border d-flex shadow-sm">
        <div className="bg-white ps-1 pe-2" style={{ width: "510px" }}>
          <div className="mt-3 ms-3">
            <input
              id="cv-avatar-upload"
              type="file"
              className="d-none"
              onChange={(e) => handleDisplayImg(e)}
              disabled={cvMode === "READ"}
            />
            <div style={{ width: "180px", height: "186px" }}>
              <img
                id="cv-avatar"
                src={basicInfor.avatar || defaultAvt}
                alt="avatar"
                className={clsx("w-100 h-100", cvMode !== "READ" && "pointer")}
                style={{ objectFit: "cover" }}
                onClick={() =>
                  document.getElementById("cv-avatar-upload").click()
                }
              />
            </div>
            <FlexInput
              disabled={cvMode === "READ"}
              placeholder="HỌ TÊN"
              className="mt-2"
              innerClassName={clsx(
                "h4 cv-text-main text-uppercase",
                cvMode === "READ" && "bg-white"
              )}
              defaultValue={fullname}
              {...register("fullname")}
            />
          </div>
          <hr className="text-secondary" />
          {parts.map((_, index) => {
            return (
              index < 5 && <div key={`part_${index}`}>{renderPart(index)}</div>
            );
          })}
        </div>
        <div className="flex-fill px-1 cv-bg-main">
          <div className="ms-2">
            {parts.map((_, index) => {
              return (
                index >= 5 && (
                  <div key={`part_${index}`}>{renderPart(index)}</div>
                )
              );
            })}
          </div>
        </div>
      </div>
    </div>
  );
}
