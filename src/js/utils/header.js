const onHeightAnimation = (minTop = 180, height = "100px") => {
  const header = document.querySelector(".page-header");
  const initialHeight = header.offsetHeight;
  toHeightScroll(header, height, minTop, initialHeight);
  window.addEventListener("scroll", () => {
    toHeightScroll(header, height, minTop, initialHeight);
  });
};

const toHeightScroll = (element, height, minTop, initialHeight) => {
  element.style.height =
    window.scrollY > minTop ? height : `${initialHeight}px`;
};

export { onHeightAnimation };
