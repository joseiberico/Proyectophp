<?php
require 'data/database.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $marca = $_POST['marca'];

        $sql = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', 
        stock = '$stock', marca = '$marca'
        WHERE id = $id";
        $resultado = $db->query($sql);
        echo $sql;
        if($resultado){
            header('location:producto.php');
         }
         exit;
    }