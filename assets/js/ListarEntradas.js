document.addEventListener('DOMContentLoaded', function(){
    iniciar();
    })
    
    function iniciar(){
        obtenerEntrada();
    }
    

async function obtenerEntrada(){
    const url = "data/ListarEntradas.php?accion=listar";
    const id = "EliminarEntrada.php?id=";



    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){           
        const data = resultado.data;
        let html = "";
        data.forEach(entrada => {
            html += "<tr>";
            html += "<td>" + entrada.id + "</td>";  
            html += "<td>" + entrada.username + "</td>";       
            html += "<td>" + entrada.nombre + "</td>";
            html += "<td>" + entrada.descripcion + "</td>";
            html += "<td>" + entrada.stockE + "</td>";
            html += "<td><a href="+id+entrada.id+" class='btn btn-danger'>Eliminar</a></td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblEntradas");
        tabla.innerHTML = html
        //console.log(html);
    }
}