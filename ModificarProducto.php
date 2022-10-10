<?php
include_once 'includes/templates/header.php';
require_once('data/editarproducto.php');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Producto</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Los mejores productos solo en tecnoventas</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">                          
                            <form method="POST" id="form">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">id:</label>
                                    <input type="text" name="id" id="id" class="form-control" readonly="readonly" value="<?php echo $producto['id'] ?>">

                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $producto['nombre'] ?>">

                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripcion:</label>
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
                                    <input type="text" name="idcategoria" id="idcategoria" readonly="readonly" class="form-control" value="<?php echo $producto['idcategoria'] ?>">
                                </div>

                                <input type="submit" value="Grabar" id="boton" class="btn btn-primary">
                            </form>

                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include_once 'includes/templates/footer.php'
?>