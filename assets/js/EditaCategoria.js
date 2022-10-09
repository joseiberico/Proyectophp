let boton = document.querySelector("#boton");
boton.addEventListener("click", (e) => {
  e.preventDefault();

  const formulario = document.querySelector("#form");
  const form = new FormData(formulario);

  const peticion = {
    method: "POST",
    body: form,
  };
  fetch("data/editarcategoria.php", peticion)
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
