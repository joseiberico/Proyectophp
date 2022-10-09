<?php
require 'data/database.php';
$id = $_GET['id'];

$sql="DELETE FROM categoria_producto WHERE id = '$id'";
$resultado = $db->query($sql);
if($resultado){
header('Location:VistaCategorias.php');
echo '<script>alert("Se ha eliminado la categoria con exito")</script>';
}
?>