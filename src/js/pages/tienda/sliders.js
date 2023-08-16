import Splide from "@splidejs/splide";

const masPlantillasSlider = () => {
  const container = document.getElementById("splide-mas-plantillas");
  if (container) {
    new Splide(container, {
      type: "loop",
      perPage: 5,
      perMove: 1,
      gap: "1.5rem",
      pagination: false,
      padding: {
        right: "13rem",
      },
      breakpoints: {
        1440: {
          perPage: 4,
        },
        1240: {
          perPage: 3,
        },
        768: {
          perPage: 2,
        },
        640: {
          perPage: 1,
        },
      },
    }).mount();
  }
};

export { masPlantillasSlider };
