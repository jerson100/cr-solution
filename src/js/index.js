// import "animate.css";
import "../../public/css/app.css";
import mainPage from "./pages/inicio";
import graciasPage from "./pages/gracias";
import tiendaPage from "./pages/tienda";
// import { addWowAnimation } from "./utils/reveal";

(() => {
  window.addEventListener("load", () => {
    // addWowAnimation();
    mainPage();
    graciasPage();
    tiendaPage();
  });
})();
