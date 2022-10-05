<?php
require 'data/database.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $marca = $_POST['marca'];

        $sql = "INSERT INTO `producto` (`nombre`,`descripcion`,`precio`,
        `stock`,`marca`)
        Values('$nombre','$descripcion','$precio','$stock','$marca')";
        $resultado = $db -> query($sql);
        if($resultado){
            header('location:productos.php');
         }
         exit;
    }


       