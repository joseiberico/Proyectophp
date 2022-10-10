document.addEventListener('DOMContentLoaded', function(){
    iniciar();
    })
    
    function iniciar(){
        obtenerSalida();
    }
    

async function obtenerSalida(){
    const url = "data/ListarSalidas.php?accion=listar";
    const id = "EliminarSalida.php?id=";



    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){           
        const data = resultado.data;
        let html = "";
        data.forEach(salida => {
            html += "<tr>";
            html += "<td>" + salida.id + "</td>"; 
            html += "<td>" + salida.username + "</td>";        
            html += "<td>" + salida.nombre + "</td>";
            html += "<td>" + salida.descripcion + "</td>";
            html += "<td>" + salida.stockS + "</td>";
            html += "<td><a href="+id+salida.id+" class='btn btn-danger'>Eliminar</a></td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblSalidas");
        tabla.innerHTML = html
        //console.log(html);
    }
}