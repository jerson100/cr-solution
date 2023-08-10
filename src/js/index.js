// import "animate.css";
import "../../public/css/app.css";
import { onHandleModals } from "./utils/modal";
import mainPage from "./pages/inicio";
import graciasPage from "./pages/gracias";
import tiendaPage from "./pages/tienda";
import verificacionPage from "./pages/verificacion";
// import { addWowAnimation } from "./utils/reveal";

(() => {
  window.addEventListener("load", () => {
    // addWowAnimation();
    onHandleModals();
    mainPage();
    graciasPage();
    tiendaPage();
    verificacionPage();
  });
})();
