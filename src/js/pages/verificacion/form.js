const acceptedForm = () => {
  //   const dni = document.getElementById("dni").value;
  const btnAcceptar = document.getElementById("btn-aceptar-verificacion");
  const detailsForm = document.getElementById("details-form");
  btnAcceptar?.addEventListener("click", (e) => {
    detailsForm?.classList.remove("hidden");
    detailsForm?.classList.add("grid");
  });
};

export { acceptedForm };
