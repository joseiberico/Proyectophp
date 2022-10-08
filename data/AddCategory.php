<?php

require_once('database.php');

$nombre = $_POST['nombre'] ?? '';




$stmt = $db->prepare('INSERT INTO categoria_producto (id,nombre) VALUES(null,?)');
$stmt->bindParam(1,$nombre);
$stmt->execute();



function insertaNombre($nombre,$db){
    $stmt = $db->prepare('INSERT INTO categoria_producto (id,nombre) VALUES(null,?)');
    $stmt->bindParam($nombre);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $nombres){
        if(!insertaNombre($nombre,$db)){
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