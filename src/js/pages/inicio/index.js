import { heroSlider } from "./hero";
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
};

export default init;
