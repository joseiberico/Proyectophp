<?php
require 'data/database.php';
$id = $_GET['id'];

$sql="DELETE FROM producto WHERE id = '$id'";
$resultado = $db->query($sql);
if($resultado){
header('Location:VistaProductos.php');
echo '<script>alert("Se ha eliminado el producto con exito")</script>';
}
?>
