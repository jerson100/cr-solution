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
// import { addWowAnimation } from "./utils/reveal";

(() => {
  window.addEventListener("DOMContentLoaded", () => {
    // addWowAnimation();
    onHeightAnimation(300);
    onHandleModals();
    mainPage();
    graciasPage();
    tiendaPage();
    verificacionPage();
    servicesPage();
  });
})();
