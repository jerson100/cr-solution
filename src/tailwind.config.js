/** @type {import('tailwindcss').Config} */
module.exports = {
  //   content: ["../**/*.{php,html,js}"],
  content: ["../**/*.{html,js}", "../page-template/**/*.php", "../**/*.php"],
  theme: {
    screens: {
      tablet: "640px",
      // => @media (min-width: 640px) { ... }

      "tablet-middle": "768px",
      // => @media (min-width: 768px) { ... }

      laptop: "1024px",
      // => @media (min-width: 1024px) { ... }

      desktop: "1280px",
      // => @media (min-width: 1280px) { ... }

      "desktop-middle": "1440px",
      // => @media (min-width: 1440px) { ... }

      "desktop-large": "1600px",
      // => @media (min-width: 1600px) { ... }
    },
    extend: {
      gridTemplateColumns: {
        fluid: "repeat(auto-fit, minmax(420px, 1fr))",
      },
      fontFamily: {
        "gordita-black": ["Gordita Black", "sans-serif"],
        "gordita-bold": ["Gordita Bold", "sans-serif"],
        "gordita-medium": ["Gordita Medium", "sans-serif"],
        "gordita-regular": ["Gordita Regular", "sans-serif"],
        "gordita-light": ["Gordita Light", "sans-serif"],
        roboto: ["Roboto", "Arial", "sans-serif"],
      },
      colors: {
        "text-primary": "#313131",
        "white-50": "#FFFFFFEA",
        "white-100": "#FFFFFF00",
        "white-150": "#FFFFFF",
        "gray-50": "#F2F2F2",
        "gray-100": "#00000029",
        "gray-150": "#10234859",
        "gray-200": "#8E8E8E",
        black: "#000000",
        yellow: "#FFF026",
        blue: "#1F4690",
        "celeste-50": "#0097B27D",
        "celeste-100": "#0097B2",
      },
      boxShadow: {
        custom: "0 3px 6px #00000029",
        "custom-left-shadow": "-23px 23px 6px #0097B2",
      },
    },
  },
  plugins: [],
};
