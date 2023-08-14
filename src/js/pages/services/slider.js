import Splide from "@splidejs/splide";

const serviceSlider = () => {
  const container = document.getElementById("splide_services");
  if (container) {
    new Splide(container, {
      type: "loop",
      perPage: 2,
      perMove: 1,
      gap: "0",
      direction: "ttb",
      height: "473px",
      pagination: false,
      autoplay: true,
    }).mount();
  }
};

export { serviceSlider };
