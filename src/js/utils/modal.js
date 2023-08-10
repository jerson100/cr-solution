const onHandleModals = () => {
  const modals = [...document.querySelectorAll(".modal")];
  const targets = [...document.querySelectorAll("[data-modal-target]")];
  const closeButtons =
    modals?.length > 0 ? [...document.querySelectorAll(".modal__close")] : [];

  const modals_ids = modals?.map((modal) => {
    return {
      id: modal.dataset["modalId"],
      modal: modal,
    };
  });

  targets?.forEach((target) => {
    target.addEventListener("click", () => {
      const modalT = modals_ids.find(
        ({ id }) => id === target.dataset["modalTarget"]
      );
      if (modalT) {
        const { modal } = modalT;
        modal.classList.add("modal--open");
        const scrollBarWidth = window.innerWidth - document.body.offsetWidth;
        document.body.style.overflow = "hidden";
        document.body.style.paddingRight = `${scrollBarWidth}px`;
        document.querySelector(
          "header"
        ).style.paddingRight = `${scrollBarWidth}px`;
      }
    });
  });

  closeButtons?.forEach((btn) => {
    btn.addEventListener("click", () => {
      const parentModal =
        btn.parentElement?.parentElement?.parentElement?.parentElement;
      console.log(parentModal);
      parentModal?.classList.remove("modal--open");
      document.body.style.overflow = "";
      document.body.style.paddingRight = "";
      document.querySelector("header").style.paddingRight = "";
    });
  });
};

export { onHandleModals };
