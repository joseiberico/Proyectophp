<?php
require 'data/database.php';
$sql = "SELECT id,nombre,descripcion,precio,stock,marca  FROM producto";
$resultado = $db->query($sql);
?>
