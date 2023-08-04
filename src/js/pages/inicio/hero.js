const heroSlider = (time = 2000) => {
  const topImages = [...document.querySelectorAll("#initial-top-hero img")];
  const topDescriptions = [
    ...document.querySelectorAll("#initial-top-hero p span"),
  ];
  const bottomImages = [
    ...document.querySelectorAll("#initial-bottom-hero img"),
  ];
  const bottomDescriptions = [
    ...document.querySelectorAll("#initial-bottom-hero p span"),
  ];

  if (
    topImages.length === 0 ||
    topDescriptions.length === 0 ||
    bottomImages.length === 0 ||
    bottomDescriptions.length === 0
  )
    return;

  addClassToHeroItems(
    topImages,
    topDescriptions,
    bottomImages,
    bottomDescriptions,
    0,
    0
  );

  let topIndex = 1;
  let bottomIndex = 1;
  console.log("render One");
  setInterval(() => {
    console.log("render");
    if (topIndex === topImages.length) topIndex = 0;
    if (bottomIndex === bottomImages.length) bottomIndex = 0;
    removedClass([
      ...topImages,
      ...topDescriptions,
      ...bottomImages,
      ...bottomDescriptions,
    ]);
    addClassToHeroItems(
      topImages,
      topDescriptions,
      bottomImages,
      bottomDescriptions,
      topIndex,
      bottomIndex
    );
    topIndex++;
    bottomIndex++;
  }, time);
};

const addClassToHeroItem = (image, description, isPair) => {
  image.classList.add("active");
  description.classList.add("active");
  const parent = description.parentElement;
  if (isPair) {
    moveLeft(parent, `0px`);
  } else {
    const { width } = parent.getBoundingClientRect();
    moveLeft(parent, `calc(100% - ${width}px)`);
  }
};

const addClassToHeroItems = (
  topImages,
  topDescriptions,
  bottomImages,
  bottomDescriptions,
  topIndex,
  bottomIndex
) => {
  addClassToHeroItem(
    topImages[topIndex],
    topDescriptions[topIndex],
    topIndex % 2 != 0
  );
  addClassToHeroItem(
    bottomImages[bottomIndex],
    bottomDescriptions[bottomIndex],
    bottomIndex % 2 == 0
  );
};

const moveLeft = (element, position) => {
  element.style.left = position;
};

const removedClass = (items, _class = "active") => {
  items.forEach((element) => {
    element.classList.remove(_class);
  });
};

export { heroSlider };
