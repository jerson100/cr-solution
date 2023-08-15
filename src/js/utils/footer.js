import Splide from "@splidejs/splide";
const sliderBajoEstandares = () => {
  const container = document.getElementById("slider-bajo-estandares");
  if (container) {
    new Splide(container, {
      type: "loop",
      perPage: 5,
      perMove: 1,
      arrows: false,
      gap: "2.5rem",
    }).mount();
  }
};

export { sliderBajoEstandares };
