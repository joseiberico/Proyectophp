<?php
require_once('database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

}else{
    $accion = $_GET['accion'];
    if($accion === 'listar'){
        $sql = "SELECT * FROM producto";
        $producto = $db -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);
        if(count($producto) > 0 ){
            $respuesta = [
                "codigo" => 200,
                "data" => $producto
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
