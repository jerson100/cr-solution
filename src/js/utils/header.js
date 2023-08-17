const onHeightAnimation = (minTop = 100) => {
  const header = document.querySelector(".page-header");
  if (header) {
    let height = {
      mobile: {
        animate: "48px",
        normal: "56px",
      },
      laptop: { animate: "70px", normal: "80px" },
      laptopMd: { animate: "90px", normal: "100px" },
      desktop: { animate: "100px", normal: "135px" },
    };
    let _height = height.desktop;
    const fn = () => {
      const widthScreen = window.innerWidth;
      if (widthScreen >= 1600) {
        _height = height.desktop;
      } else if (widthScreen >= 1280) {
        _height = height.laptopMd;
      } else if (widthScreen >= 1024) {
        _height = height.laptop;
      } else {
        _height = height.mobile;
      }
      toHeightScroll(header, _height, minTop);
    };
    fn();
    window.addEventListener("resize", fn);
    window.addEventListener("scroll", () => {
      toHeightScroll(header, _height, minTop);
    });
  }
};

const toHeightScroll = (element, height, minTop) => {
  element.style.height =
    window.scrollY > minTop ? height.animate : height.normal;
};

export { onHeightAnimation };
