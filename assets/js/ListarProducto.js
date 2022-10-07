document.addEventListener('DOMContentLoaded', function(){
    iniciar();
    })
    
    function iniciar(){
        obtenerProductos();
    }
    
    async function obtenerProductos(){
        const url = "data/producto.php?accion=listar";
        const respuesta = await fetch(url);
        const resultado = await respuesta.json();
        if(resultado.codigo === 200){
            const data = resultado.data;
            let html = "";
            data.forEach(producto =>{
                html += "<tr>";
                html += "<td>" + producto.id + "</td>";
                html += "<td>" + producto.nombre + "</td>";
                html += "<td>" + producto.descripcion + "</td>";
                html += "<td>" + producto.precio + "</td>";
                html += "<td>" + producto.stock + "</td>";
                html += "<td>" + producto.marca + "</td>";
                html += "<td>" + producto.idcategoria + "</td>";
                html += "</tr>";
            });
    
            const tabla = document.querySelector("#tblData");
            tabla.innerHTML = html
            //console.log(html);
        }
    }