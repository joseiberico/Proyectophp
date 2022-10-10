<?php

require_once('database.php');

$idproducto = $_POST['idproducto'] ?? '';
$descripcion = $_POST['descripcion'] ?? '';
$stock = $_POST['stock'] ;
$id_usuario = $_POST['id_usuario'] ;




$stmt = $db->prepare('INSERT INTO salida_producto (id,idproducto,descripcion,stockS,id_usuario) VALUES(null,?,?,?,?)');
$stmt->bindParam(1,$idproducto);
$stmt->bindParam(2,$descripcion);
$stmt->bindParam(3,$stock);
$stmt->bindParam(4,$id_usuario);
$stmt->execute();



function insertaNombre($idproducto,$descripcion,$stock,$id_usuario,$db){
    $stmt = $db->prepare('INSERT INTO salida_producto (id,idproducto,descripcion,stockS,id_usuario) VALUES(null,?,?,?,?)');
    $stmt->bindParam($idproducto,$descripcion,$stock,$id_usuario);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $nombres){
        if(!insertaNombre($idproducto,$descripcion,$stock,$id_usuario,$db)){
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