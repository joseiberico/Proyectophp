<?php
include_once 'includes/templates/header.php';

?>
<?php
require "data/database.php";


$sql = "SELECT * FROM categoria_producto";
$resultado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$tipos_cliente = [];
foreach ($resultado as $tipo) {
    $tipos_cliente[] = $tipo;
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Entrada de categorias</h1>
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
                            <form id="formulario">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" name="tipo" id="tipo" autocomplete="off" class="form-control">
                                </div>

                                <button id="boton" class="btn btn-primary">Agregar</button>
                                <a href="VistaCategorias.php" class="btn btn-danger">Cancelar</a>

                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/js/categorias.js"></script>
<script src="assets/js/ListaCategorias.js"></script>
<?php
include_once 'includes/templates/footer.php'
?>