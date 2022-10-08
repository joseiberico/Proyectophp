document.addEventListener('DOMContentLoaded', function(){
    iniciar();
    })
    
    function iniciar(){
        obtenerCategoria();
    }
    

async function obtenerCategoria(){
    const url = "data/ListarCategoria.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){           
        const data = resultado.data;
        let html = "";
        data.forEach(categoria => {
            html += "<tr>";
            html += "<td>" + categoria.id + "</td>";         
            html += "<td>" + categoria.nombre + "</td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblCat");
        tabla.innerHTML = html
        //console.log(html);
    }
}