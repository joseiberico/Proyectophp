<?php
$db = new PDO('mysql:host=localhost; dbname=tecnoventasx', 'cursos', '72573348');
if(!$db){
    echo "Error al conectar la base de datos";
    exit;
}
?>