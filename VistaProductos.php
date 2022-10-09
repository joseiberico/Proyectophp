<?php
include_once 'includes/templates/header.php';
?>
<?php
require('data/database.php');
$sql="SELECT*FROM producto";
$listado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Listado de Productos</h1>
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

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Marca</th>
                                        <th>Categoria</th>
                                   </tr>
                                </thead>
                                <tbody>
                                <?php
                            foreach ($listado as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td><?php echo $row['precio']; ?></td>
                                    <td><?php echo $row['stock']; ?></td>
                                    <td><?php echo $row['marca']; ?></td>
                                    <td><?php echo $row['idcategoria']; ?></td>
                                    <td><a href="ModificarProducto.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a></td>
                                    
                                </tr>
                            <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


<?php
include_once 'includes/templates/footer.php'
?>