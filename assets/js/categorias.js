let boton = document.querySelector("#boton");
boton.addEventListener("click", (e) => {
  e.preventDefault();

  const formulario = document.querySelector("#formulario");
  const form = new FormData(formulario);

  const peticion = {
    method: "POST",
    body: form,
  };
  fetch("data/AddCategory.php", peticion)
    .then((res) => res.json())
    .then((res) => {
      if (res["respuesta"]) {
        swal({icon:'success',text:res["mensaje"]});
        formulario.reset();
      } else {
        alert(res["mensaje"]);
      }
    });
});