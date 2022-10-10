<?php
include_once 'includes/templates/header.php';
require_once('data/editarcategoria.php');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Categoria</h1>
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
                            <h1>Agregar categoria</h1>
                            <form method="POST" id="form">
                                <div class="mb-3">
                                    <label for="id" class="form-label">id:</label>
                                    <input type="text" name="id" id="id" class="form-control" readonly="readonly" value="<?php echo $categoria['id'] ?>">

                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $categoria['tipo'] ?>">

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