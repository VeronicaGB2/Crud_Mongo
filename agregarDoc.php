<?php 
    include "./header.php"; 
    require_once ('./clases/Conexion.php');
    require_once './clases/Crud.php';
    $crud = new Crud();
    $datos = $crud->mostrarDatosDoc();
    //print_r($datos);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Agregar nuevo Doctor</h2>

                    <form action="./procesos/insertDoc.php" method="post">
                        <label for="txtNnombre">Nombre del Doctor</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" require>
                        <label for="txtCel">No Cedula</label>
                        <input type="text" class="form-control" id="txtCel" name="txtCel" require>
                        <button class="btn btn-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Agregar</button>

                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <!--<th>id</th>-->
                                <th>Nombre Doctor</th>
                                <th>Cedula</th>
                            </thead>
                            <?php 
                            foreach($datos as $item) {
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo isset($item->nombreDoc) ? $item->nombreDoc : ''; ?> </td>
                                    <td> <?php echo isset($item->cedula) ? $item->cedula : ''; ?> </td>
                                    <td class="text-center">
                                        <form action="./actualizarDoc.php" method="POST">

                                            <input type="hidden" name="id" value="<?php echo $item->_id ?>">
                                            <button class="btn btn-warning">
                                                <i class="fa-solid fa-user-pen"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="./eliminarDoc.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $item->_id ?>">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-user-xmark"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div>
                            <div class="mt-3">
                                <a href="index.php" class="btn btn-outline-info"> <i
                                        class="fa-solid fa-angles-left"></i> Regresar</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "./scripts.php"; ?>