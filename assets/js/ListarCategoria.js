document.addEventListener('DOMContentLoaded', function(){
    iniciar();
    })
    
    function iniciar(){
        obtenerCategoria();
    }
    

async function obtenerCategoria(){
    const url = "data/ListarCategoria.php?accion=listar";
    const id = "ModificarCategoria.php?id=";
    const id2 = "EliminarCategoria.php?id=";


    
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){           
        const data = resultado.data;
        let html = "";
        data.forEach(categoria => {
            html += "<tr>";
            html += "<td>" + categoria.id + "</td>";         
            html += "<td>" + categoria.nombre + "</td>";
            html += "<td><a href="+id+categoria.id+" class='btn btn-warning'>Editar</a></td>";
            html += "<td><a href="+id2+categoria.id+" class='btn btn-danger'>Eliminar</a></td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblCategorias");
        tabla.innerHTML = html
        //console.log(html);
    }
}