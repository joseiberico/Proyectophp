<?php
require_once('database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

} else{
    $accion = $_GET['accion'];
    if($accion === 'listar'){        
        $sql = "SELECT S.id , P.nombre , S.descripcion , S.stockS , U.username
        from salida_producto S
        inner join producto P on P.id = S.idproducto 
        inner join usuario U on U.id = S.id_usuario ;";
        $categoria = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        if(count($categoria) > 0){
            $respuesta = [
                "codigo" => 200,
                "data" => $categoria
            ];
        } else {
            $respuesta = [
                "codigo" => 404,
                "mensaje" => "No hay data disponible"
            ];
        }
        echo json_encode($respuesta);
    }
}