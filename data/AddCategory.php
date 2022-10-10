<?php

require_once('database.php');

$tipo = $_POST['tipo'] ?? '';




$stmt = $db->prepare('INSERT INTO categoria_producto (id,tipo) VALUES(null,?)');
$stmt->bindParam(1,$tipo);
$stmt->execute();



function insertaNombre($tipo,$db){
    $stmt = $db->prepare('INSERT INTO categoria_producto (id,tipo) VALUES(null,?)');
    $stmt->bindParam($tipo);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $nombres){
        if(!insertaNombre($tipo,$db)){
            $errores[] = $key;
        }
    }
}

if(empty($errores)){
    echo json_encode(['respuesta' =>true,'mensaje'=>'se insertaron los datos correctamente']);
}else{
    echo json_encode(['respuesta' =>true,'mensaje'=>'no se insertaron los datos correctamente']);
}

?>