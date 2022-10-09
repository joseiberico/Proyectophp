<?php

require_once('data/database.php');
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 
    $nombre = $_POST['nombre'];
    
    $sql = "UPDATE categoria_producto SET nombre = '$nombre' WHERE id=$id";
    $resultado = $db->query($sql);
    if($resultado){
        header('location:VistaCategorias.php');
    }
    
    exit;
}




$query = $db->prepare("SELECT*FROM categoria_producto WHERE id=:id");
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $categoria = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location:VistaCategorias.php");
}



?>