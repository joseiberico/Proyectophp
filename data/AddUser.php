<?php

require_once('database.php');

$nombre = $_POST['nombre'] ?? '';
$username = $_POST['username']??'';
$password = $_POST['password']??'';
$estado = $_POST['estado'];




$stmt = $db->prepare('INSERT INTO usuario (id,nombre,username,password,estado) VALUES(null,?,?,?,?)');
$stmt->bindParam(1,$nombre);
$stmt->bindParam(2,$username);
$stmt->bindParam(3,$password);
$stmt->bindParam(4,$estado);
$stmt->execute();



function insertaNombre($nombre,$username,$password,$estado,$db){
    $stmt = $db->prepare('INSERT INTO usuario (id,nombre,username,password,estado) VALUES(null,?,?,?,?)');
    $stmt->bindParam($nombre,$username,$password,$estado);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $nombres){
        if(!insertaNombre($nombre,$username,$password,$estado,$db)){
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