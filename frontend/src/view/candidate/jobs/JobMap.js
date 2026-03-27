import { useEffect, useRef } from "react";
import L from "leaflet";
import "leaflet/dist/leaflet.css";
import "./JobMap.css";
import redLocationIcon from "../../../assets/images/icons/red_location.png";
import greenLocationIcon from "../../../assets/images/icons/green_location.png";
import { isNullObject } from "../../../common/functions";
import dayjs from "dayjs";

function haversineDistance(lat1, lng1, lat2, lng2) {
  const R = 6371000;
  const dLat = ((lat2 - lat1) * Math.PI) / 180;
  const dLng = ((lng2 - lng1) * Math.PI) / 180;
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos((lat1 * Math.PI) / 180) *
      Math.cos((lat2 * Math.PI) / 180) *
      Math.sin(dLng / 2) *
      Math.sin(dLng / 2);
  return R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
}

const redIcon = L.icon({
  iconUrl: redLocationIcon,
  iconSize: [38, 38],
  iconAnchor: [19, 38],
  popupAnchor: [0, -38],
});

const greenIcon = L.icon({
  iconUrl: greenLocationIcon,
  iconSize: [38, 38],
  iconAnchor: [19, 38],
  popupAnchor: [0, -38],
});

export default function JobMap({
  className,
  jobs,
  address,
  distance,
  refreshHint,
  setRefreshHint,
  setHintLocations,
  curLocation,
  setJobNum,
}) {
  const mapRef = useRef(null);
  const curMap = useRef(null);
  const markersLayer = useRef(null);
  const curMarker = useRef(null);
  const routeLayer = useRef(null);
  const markerCount = useRef(0);

  const clearRoute = () => {
    if (routeLayer.current) {
      routeLayer.current.remove();
      routeLayer.current = null;
    }
  };

  const drawRoute = async (destLat, destLng, routeInfoId) => {
    clearRoute();
    if (!curMarker.current) return;

    const { lat: srcLat, lng: srcLng } = curMarker.current.getLatLng();
    const el = document.getElementById(routeInfoId);
    if (el) el.innerHTML = `<span style="color:#888;font-size:12px">Đang tải đường đi...</span>`;

    try {
      const res = await fetch(
        `https://router.project-osrm.org/route/v1/driving/${srcLng},${srcLat};${destLng},${destLat}?overview=full&geometries=geojson`
      );
      const data = await res.json();

      if (data.code !== "Ok") {
        if (el) el.innerHTML = `<span style="color:#c00;font-size:12px">Không tìm được đường đi</span>`;
        return;
      }

      const route = data.routes[0];
      const coords = route.geometry.coordinates.map(([lng, lat]) => [lat, lng]);

      routeLayer.current = L.polyline(coords, {
        color: "#1a73e8",
        weight: 5,
        opacity: 0.8,
      }).addTo(curMap.current);

      const distKm = (route.distance / 1000).toFixed(1);
      const durationMin = Math.round(route.duration / 60);

      if (el) {
        el.innerHTML = `
          <div style="margin-top:6px;padding-top:6px;border-top:1px solid #eee;color:#1a73e8;font-size:12px;font-weight:600">
            🚗 ${distKm} km &nbsp;·&nbsp; ~${durationMin} phút lái xe
          </div>
        `;
      }
    } catch {
      if (el) el.innerHTML = `<span style="color:#c00;font-size:12px">Không thể tải đường đi</span>`;
    }
  };

  const addJobLocationsToMap = () => {
    if (markersLayer.current) {
      markersLayer.current.clearLayers();
    } else {
      markersLayer.current = L.layerGroup().addTo(curMap.current);
    }

    let markerData = [];
    let markerNum = 0;
    let jobNum = jobs.length;

    const addMarker = (data) => {
      const routeInfoId = `route-info-${markerCount.current++}`;

      let content = `<div style="width: 280px">`;
      for (let i = 0; i < data.length; i++) {
        let job = data[i];
        content += `
          <div class="pt-1 ${i !== data.length - 1 ? "border-bottom" : ""}">
            <a href="/jobs/${job.id}" class="fw-600 text-decoration-none text-dark hover-text-main" target="_blank" rel="noreferrer">
              ${job.jname}
            </a><br/>
            <div class="text-secondary ts-sm">${job.employer.name}</div>
            <div class="ts-xs d-flex gap-3">
              <div>${job.min_salary ? `${job.min_salary} - ${job.max_salary} triệu VND` : "Theo thỏa thuận"}</div>
              <div>${dayjs(job.expire_at).format("DD/MM/YYYY")}</div>
            </div>
          </div>
        `;
      }
      content += `<div id="${routeInfoId}"></div>`;
      content += "</div>";

      const marker = L.marker([data[0].latitude, data[0].longitude], {
        icon: redIcon,
      }).bindPopup(content);

      marker.on("popupopen", () => {
        drawRoute(data[0].latitude, data[0].longitude, routeInfoId);
      });

      markersLayer.current.addLayer(marker);
      markerNum++;
    };

    for (let i = 0; i < jobs.length; i++) {
      let job = jobs[i];
      if (!job.latitude || !job.longitude) {
        jobNum--;
        continue;
      }

      if (curMarker.current && distance) {
        const { lat, lng } = curMarker.current.getLatLng();
        if (haversineDistance(job.latitude, job.longitude, lat, lng) > 1000 * distance) {
          jobNum--;
          continue;
        }
      }

      if (markerData.length === 0) {
        markerData.push(job);
      } else if (
        job.latitude === markerData[markerData.length - 1].latitude &&
        job.longitude === markerData[markerData.length - 1].longitude
      ) {
        markerData.push(job);
      } else {
        addMarker(markerData);
        markerData = [job];
      }
    }

    if (markerData.length > 0) {
      addMarker(markerData);
    }

    setJobNum(jobNum);

    if (markerNum > 0) {
      const layers = markersLayer.current.getLayers();
      const bounds = L.latLngBounds(layers.map((m) => m.getLatLng()));
      curMap.current.fitBounds(bounds, { maxZoom: 12 });
    } else {
      curMap.current.setZoom(12);
    }
  };

  const getHints = async () => {
    try {
      const res = await fetch(
        `https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(address)}&format=json&limit=5`,
        { headers: { "Accept-Language": "vi" } }
      );
      const data = await res.json();
      setHintLocations(
        data.map((item) => ({
          address: { label: item.display_name },
          position: { lat: parseFloat(item.lat), lng: parseFloat(item.lon) },
        }))
      );
    } catch {
      console.log("Can't search for current address keyword!");
    }
  };

  useEffect(() => {
    if (!curMap.current) {
      const map = L.map(mapRef.current, {
        center: [16, 106],
        zoom: 6,
        wheelPxPerZoomLevel: 120,
      });

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      }).addTo(map);

      curMap.current = map;
    }

    return () => {
      if (curMap.current) {
        curMap.current.remove();
        curMap.current = null;
        markersLayer.current = null;
        curMarker.current = null;
        routeLayer.current = null;
      }
    };
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);

  useEffect(() => {
    if (curMap.current && jobs.length > 0) {
      clearRoute();
      addJobLocationsToMap();
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [jobs, curMap.current]);

  useEffect(() => {
    if (refreshHint) {
      getHints();
      setRefreshHint(false);
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [refreshHint]);

  useEffect(() => {
    if (!isNullObject(curLocation)) {
      if (curMarker.current) {
        curMarker.current.remove();
      }
      const marker = L.marker(
        [curLocation.position.lat, curLocation.position.lng],
        { icon: greenIcon }
      )
        .bindPopup(`<div style="width: 200px">Vị trí của bạn/ Vị trí bạn chọn</div>`)
        .addTo(curMap.current);
      curMap.current.setView([curLocation.position.lat, curLocation.position.lng], 15);
      curMarker.current = marker;
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [curLocation]);

  return (
    <div className={className}>
      <div
        id="job-map"
        ref={mapRef}
      />
    </div>
  );
}
