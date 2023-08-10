import { heroSlider } from "./hero";
import { modalInicio } from "./modal";
import {
  serviciosSlider,
  blogSlider,
  confianNosotrosSlider,
  capacitacionesDestacadasSlider,
} from "./sliders";

const init = () => {
  serviciosSlider();
  blogSlider();
  confianNosotrosSlider();
  capacitacionesDestacadasSlider();
  heroSlider(5000);
  modalInicio(3000);
};

export default init;
