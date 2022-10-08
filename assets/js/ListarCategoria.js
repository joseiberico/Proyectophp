"use strict"

document.addEventListener('DOMContentLoaded', function(){
    llamarDatos();
})

function llamarDatos() {
    const btn = document.getElementById('tuki');
    btn.addEventListener('click', obtenerCategoria)    
}

async function obtenerCategoria(){
    const url = "data/ListarCategoria.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
          
      
        const data = resultado.data;
        let datos = "";
        data.forEach(categoria => {
            datos += "<tr>";
            datos += "<td>" + categoria.id + "</td>";         
            datos += "<td>" + categoria.nombre + "</td>";
            datos += "</tr>";
        });
        const tabla = document.getElementById("tbl");
        tabla.innerHTML = datos
    }
}