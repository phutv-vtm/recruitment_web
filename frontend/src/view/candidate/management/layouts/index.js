import "./layout.css";
import { useNavigate } from "react-router-dom";
import { createContext, useCallback, useContext, useEffect, useMemo, useState } from "react";
import { useSelector } from "react-redux";
import candidateApi from "../../../../api/candidate";
import educationApi from "../../../../api/education";
import experienceApi from "../../../../api/experience";
import projectApi from "../../../../api/project";
import skillApi from "../../../../api/skill";
import certificateApi from "../../../../api/certificate";
import prizeApi from "../../../../api/prize";
import activityApi from "../../../../api/activity";
import otherApi from "../../../../api/other";
import clsx from "clsx";
import { AppContext } from "../../../../App";

export const CandidateContext = createContext();

function CandidateLayout(props) {
  const nav = useNavigate();
  const { curUrl, setCurUrl } = useContext(AppContext);
  const isAuth = useSelector((state) => state.candAuth.isAuth);

  const [personal, setPersonal] = useState({});
  const [isLoadingPersonal, setIsLoadingPersonal] = useState(true);
  const [educations, setEducations] = useState([]);
  const [experiences, setExperiences] = useState([]);
  const [projects, setProjects] = useState([]);
  const [skills, setSkills] = useState([]);
  const [certificates, setCertificates] = useState([]);
  const [prizes, setPrizes] = useState([]);
  const [activities, setActivities] = useState([]);
  const [others, setOthers] = useState([]);
  const [cvMode, setCvMode] = useState("CREATE_0");

  const getPersonal = useCallback(async () => {
    try {
      setIsLoadingPersonal(true);
      let res = await candidateApi.getCurrent();
      let avatar = await candidateApi.getCurrentAvatar();
      if (avatar.length > 0) res = { ...res, avatar };
      setPersonal(res);
    } catch (error) {
    } finally {
      setIsLoadingPersonal(false);
    }
  }, []);
  const getEducations = useCallback(async () => {
    const res = await educationApi.getByCurrentCandidateProfile();
    setEducations(res);
  }, []);
  const getExperiences = useCallback(async () => {
    const res = await experienceApi.getByCurrentCandidateProfile();
    setExperiences(res);
  }, []);
  const getProjects = useCallback(async () => {
    const res = await projectApi.getByCurrentCandidateProfile();
    setProjects(res);
  }, []);
  const getSkills = useCallback(async () => {
    const res = await skillApi.getByCurrentCandidateProfile();
    setSkills(res);
  }, []);
  const getCertificates = useCallback(async () => {
    const res = await certificateApi.getByCurrentCandidateProfile();
    setCertificates(res);
  }, []);
  const getPrizes = useCallback(async () => {
    const res = await prizeApi.getByCurrentCandidateProfile();
    setPrizes(res);
  }, []);
  const getActivities = useCallback(async () => {
    const res = await activityApi.getByCurrentCandidateProfile();
    setActivities(res);
  }, []);
  const getOthers = useCallback(async () => {
    const res = await otherApi.getByCurrentCandidateProfile();
    setOthers(res);
  }, []);
  const handleChangePage = useCallback((url) => {
    nav(url);
    setCurUrl(url);
  }, [nav, setCurUrl]);

  useEffect(() => {
    setCurUrl(window.location.pathname);
    if (isAuth) {
      getPersonal();
      getEducations();
      getExperiences();
      getProjects();
      getSkills();
      getCertificates();
      getPrizes();
      getActivities();
      getOthers();
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [isAuth]);

  const contextValue = useMemo(
    () => ({
      personal,
      setPersonal,
      isLoadingPersonal,
      educations,
      setEducations,
      experiences,
      setExperiences,
      projects,
      setProjects,
      skills,
      setSkills,
      certificates,
      setCertificates,
      prizes,
      setPrizes,
      activities,
      setActivities,
      others,
      setOthers,
      getPersonal,
      getEducations,
      getExperiences,
      getProjects,
      getSkills,
      getCertificates,
      getPrizes,
      getActivities,
      getOthers,
      cvMode,
      setCvMode,
    }),
    // eslint-disable-next-line react-hooks/exhaustive-deps
    [
      personal,
      isLoadingPersonal,
      educations,
      experiences,
      projects,
      skills,
      certificates,
      prizes,
      activities,
      others,
      cvMode,
    ]
  );

  return (
    <CandidateContext.Provider
      value={contextValue}
    >
      <div className="d-flex flex-column flex-lg-row">
        <div className="ts-smd fw-600 text-secondary menu-part bg-white">
          <div className="d-flex flex-row flex-lg-column sticky-top top-0">
            <div className="fw-600 text-center text-main border-bottom py-3 px-2 ts-lg fw-500">
              Tài khoản của tôi
            </div>
            {/* <div
              className={clsx(
                "d-flex align-items-center ps-lg-5 py-lg-2 px-2 pointer hover-bgt-light",
                curUrl === "/candidate/account" && "bg-mlight text-main"
              )}
              onClick={() => handleChangePage("/candidate/account")}
            >
              Tài khoản
            </div> */}
            <div
              className={clsx(
                "d-flex align-items-center ps-lg-5 py-lg-2 px-2 pointer hover-bgt-light",
                curUrl === "/candidate/profile" && "bg-mlight text-main"
              )}
              onClick={() => handleChangePage("/candidate/profile")}
            >
              Profile cá nhân
            </div>
            <div
              className={clsx(
                "d-flex align-items-center ps-lg-5 py-lg-2 px-2 pointer hover-bgt-light",
                curUrl === "/candidate/resumes" && "bg-mlight text-main"
              )}
              onClick={() => handleChangePage("/candidate/resumes")}
            >
              Quản lý hồ sơ
            </div>
            <div
              className={clsx(
                "d-flex align-items-center ps-lg-5 py-lg-2 px-2 pointer hover-bgt-light",
                curUrl === "/candidate/templates" && "bg-mlight text-main"
              )}
              onClick={() => handleChangePage("/candidate/templates")}
            >
              Mẫu hồ sơ
            </div>
            <div
              className={clsx(
                "d-flex align-items-center ps-lg-5 py-lg-2 px-2 pointer hover-bgt-light",
                curUrl === "/candidate/applied-jobs" && "bg-mlight text-main"
              )}
              onClick={() => handleChangePage("/candidate/applied-jobs")}
            >
              Việc làm đã nộp
            </div>
            <div
              className={clsx(
                "d-flex align-items-center ps-lg-5 py-lg-2 px-2 pointer hover-bgt-light",
                curUrl === "/candidate/saved-jobs" && "bg-mlight text-main"
              )}
              onClick={() => handleChangePage("/candidate/saved-jobs")}
            >
              Việc làm đã lưu
            </div>
          </div>
        </div>
        <div className="content-part">{props.children}</div>
      </div>
    </CandidateContext.Provider>
  );
}

export default CandidateLayout;
