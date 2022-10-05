document.addEventListener('DOMContentLoaded', function(){
    iniciar();
    })
    
    function iniciar(){
        agregarClientes();
    }
    
    async function agregarClientes(){
        const url = "data/agregar.php?accion=agregar";
        const respuesta = await fetch(url);
        const resultado = await respuesta.json();
        if(resultado.codigo === 201){
            const data = resultado.data;
            let html = "";
            data.forEach(cliente =>{
                html += "<tr>";
                html += "<td>" + cliente.id + "</td>";
                html += "<td>" + cliente.razon_social + "</td>";
                html += "<td>" + cliente.numero_documento + "</td>";
                html += "<td>" + cliente.direccion + "</td>";
                html += "</tr>";
            });
    
            const tabla = document.querySelector("#tblData");
            tabla.innerHTML = html
            //console.log(html);
        }
    }