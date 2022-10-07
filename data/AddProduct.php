<?php

require_once('database.php');

$nombre = $_POST['nombre'] ?? '';
$descripcion = $_POST['descripcion'] ?? '';
$precio = $_POST['precio'] ;
$stock = $_POST['stock'] ;
$marca = $_POST['marca'] ;
$idcategoria = $_POST['categoria'];



$stmt = $db->prepare('INSERT INTO producto (id,nombre,descripcion,precio,stock,marca,idcategoria) VALUES(null,?,?,?,?,?,?)');
$stmt->bindParam(1,$nombre);
$stmt->bindParam(2,$descripcion);
$stmt->bindParam(3,$precio);
$stmt->bindParam(4,$stock);
$stmt->bindParam(5,$marca);
$stmt->bindParam(6,$idcategoria);
$stmt->execute();



function insertaNombre($nombre, $descripcion, $precio, $stock,$marca, $idcategoria,$db){
    $stmt = $db->prepare('INSERT INTO producto (id,nombre,descripcion,precio,stock,marca,idcategoria) VALUES(null,?,?,?,?,?,?)');
    $stmt->bindParam($nombre, $descripcion, $precio, $stock, $marca, $idcategoria);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $nombres){
        if(!insertaNombre($nombre, $descripcion, $precio, $stock, $marca, $idcategoria,$db)){
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