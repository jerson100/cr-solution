const onHeightAnimation = (minTop = 180) => {
  const header = document.querySelector(".page-header");
  const initialHeight = header.offsetHeight;
  toHeightScroll(header, height, minTop, initialHeight);
  let height = {
    mobile: "48px",
    laptop: "80px",
    desktop: "100px",
  };
  let _height = height.desktop;
  const fn = () => {
    console.log("resize");
    const mediaquerie = window.matchMedia("(min-width: 1440px)");
    const mediaquerie2 = window.matchMedia("(min-width: 1024px)");
    if (mediaquerie.matches) {
      _height = height.desktop;
    } else if (mediaquerie2.matches) {
      _height = height.laptop;
    } else {
      _height = height.mobile;
    }
  };
  fn();
  window.addEventListener("resize", fn);
  window.addEventListener("scroll", () => {
    toHeightScroll(header, _height, minTop, initialHeight);
  });
};

const toHeightScroll = (element, height, minTop, initialHeight) => {
  element.style.height =
    window.scrollY > minTop ? height : `${initialHeight}px`;
};

export { onHeightAnimation };
