<?php

require_once('data/database.php');
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $marca = $_POST['marca'];
    $idcategoria = $_POST['idcategoria'];
    
    $sql = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion',precio='$precio',
    stock='$stock',marca='$marca',idcategoria='$idcategoria' WHERE id=$id";
    $resultado = $db->query($sql);
    if($resultado){
        header('location:VistaProductos.php');
    }
    
    exit;
}




$query = $db->prepare("SELECT*FROM producto WHERE id=:id");
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $producto = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location:VistaProductos.php");
}



?>