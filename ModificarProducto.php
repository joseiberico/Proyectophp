<?php
include_once 'includes/templates/header.php';
require_once('data/editarproducto.php');
?>

<div class="container">
        <h1 class="header">Editar Producto</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $producto['nombre'] ?>">

            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Apellidos:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $producto['descripcion'] ?>">

            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control" value="<?php echo $producto['precio'] ?>">


            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="text" name="stock" id="stock" class="form-control" value="<?php echo $producto['stock'] ?>">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $producto['marca'] ?>">
            </div>    
            <div class="mb-3">
                <label for="idcategoria" class="form-label">ID Categoria:</label>
                <input type="text" name="idcategoria" id="idcategoria" class="form-control" value="<?php echo $producto['idcategoria'] ?>">
            </div>    
                
            <input type="submit" value="Grabar" class="btn btn-primary">
        </form>

    </div>


<?php
include_once 'includes/templates/footer.php'
?>