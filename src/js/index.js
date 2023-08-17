// import "animate.css";
import "../../public/css/app.css";
import "../cart.css";
import "../step.js";
import { onHandleModals } from "./utils/modal";
import mainPage from "./pages/inicio";
import graciasPage from "./pages/gracias";
import tiendaPage from "./pages/tienda";
import verificacionPage from "./pages/verificacion";
import servicesPage from "./pages/services";
import { onHeightAnimation } from "./utils/header";
import { sliderBajoEstandares } from "./utils/footer";
// import { addWowAnimation } from "./utils/reveal";

(() => {
  window.addEventListener("DOMContentLoaded", () => {
    onHeightAnimation(200);
    sliderBajoEstandares();
    onHandleModals();
    mainPage();
    graciasPage();
    tiendaPage();
    verificacionPage();
    servicesPage();
  });
})();
