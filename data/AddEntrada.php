<?php

require_once('database.php');
$idproducto = $_POST['idproducto'];
$descripcion = $_POST['descripcion'] ?? '';
$stock = $_POST['stock'] ;
$precio_entrada = $_POST['precio_entrada'] ;
$id_usuario = $_POST['id_usuario'];



$stmt = $db->prepare('INSERT INTO entrada_producto (id,idproducto,descripcion,stock,precio_entrada,id_usuario) VALUES(null,?,?,?,?,?)');
$stmt->bindParam(1,$idproducto);
$stmt->bindParam(2,$descripcion);
$stmt->bindParam(3,$stock);
$stmt->bindParam(4,$precio_entrada);
$stmt->bindParam(5,$id_usuario);
$stmt->execute();



function insertaNombre($idproducto, $descripcion, $stock,$precio_entrada, $idusuario,$db){
    $stmt = $db->prepare('INSERT INTO entrada_producto (id,idproducto,descripcion,stock,precio_entrada,id_usuario) VALUES(null,?,?,?,?,?)');
    $stmt->bindParam($idproducto, $descripcion, $stock,$precio_entrada, $idusuario);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $nombres){
        if(!insertaNombre($idproducto, $descripcion, $stock,$precio_entrada, $idusuario,$db)){
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