<?php
require 'data/database.php';
$id = $_GET['id'];

$sql="DELETE FROM salida_producto WHERE id = '$id'";
$resultado = $db->query($sql);
if($resultado){
header('Location:vistaSalidas.php');
}
?>