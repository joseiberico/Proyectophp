<?php
require 'data/database.php';
$id = $_GET['id'];

$sql="DELETE FROM entrada_producto WHERE id = '$id'";
$resultado = $db->query($sql);
if($resultado){
header('Location: VistaEntradas.php');
echo '<script>alert("Se ha eliminado la entrada con exito")</script>';
}
?>