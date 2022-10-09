<?php
include_once 'includes/templates/header.php';
require_once('data/editarcategoria.php');

?>

<div class="container">
        <h1 class="header">Editar Categoria</h1>
        <form method="POST" id="form">
        <div class="mb-3">
                <label for="id" class="form-label">id:</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $categoria['id'] ?>">

            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $categoria['nombre'] ?>">

            </div>
                
            <input type="submit" value="Grabar" id="boton" class="btn btn-primary">
        </form>

    </div>


<?php
include_once 'includes/templates/footer.php'
?>