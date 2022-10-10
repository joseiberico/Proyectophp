<?php
require_once('database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

} else{
    $accion = $_GET['accion'];
    if($accion === 'listar'){        
        $sql = "SELECT E.id , P.nombre , E.descripcion , E.stockE , U.username
        from entrada_producto E
        inner join producto P on P.id = E.idproducto 
        inner join usuario U on U.id = E.id_usuario ;
        ";
        $Entrada = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        if(count($Entrada) > 0){
            $respuesta = [
                "codigo" => 200,
                "data" => $Entrada
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