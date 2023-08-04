import { Splide } from "@splidejs/splide";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";

const serviciosSlider = () => {
  const serviciosContainer = document.getElementById("servicios");
  if (!serviciosContainer) return;
  new Splide(serviciosContainer, {
    type: "loop",
    perPage: 4,
    perMove: 1,
    gap: "1rem",
    pagination: false,
    breakpoints: {
      1200: {
        perPage: 3,
      },
      768: {
        perPage: 2,
      },
      576: {
        perPage: 1,
      },
    },
  }).mount();
};

const blogSlider = () => {
  const blogContainer = document.getElementById("blog-slider");
  if (!blogContainer) return;
  new Splide(blogContainer, {
    type: "loop",
    perPage: 3,
    perMove: 1,
    gap: "2rem",
    pagination: false,
    breakpoints: {
      1200: {
        perPage: 2,
      },
      768: {
        perPage: 1,
      },
    },
  }).mount();
};

const confianNosotrosSlider = () => {
  const confianNosotrosContainer = document.getElementById("confianNosotros");
  if (!confianNosotrosContainer) return;
  new Splide(confianNosotrosContainer, {
    type: "loop",
    perPage: 4,
    perMove: 1,
    gap: "1rem",
    pagination: false,
    breakpoints: {
      1200: {
        perPage: 3,
      },
      768: {
        perPage: 2,
      },
      576: {
        perPage: 1,
      },
    },
  }).mount();
};

const capacitacionesDestacadasSlider = () => {
  const capacitacionesDestacadasContainer = document.getElementById(
    "capacitaciones-destacadas"
  );
  if (!capacitacionesDestacadasContainer) return;
  new Splide(capacitacionesDestacadasContainer, {
    type: "loop",
    perPage: 2,
    perMove: 1,
    gap: "3rem",
    pagination: false,
    padding: {
      right: "12rem",
    },
    breakpoints: {
      // 1200: {
      //   perPage: 2,
      // },
      768: {
        perPage: 2,
      },
      576: {
        perPage: 1,
      },
    },
  }).mount();
};

export {
  serviciosSlider,
  blogSlider,
  confianNosotrosSlider,
  capacitacionesDestacadasSlider,
};
