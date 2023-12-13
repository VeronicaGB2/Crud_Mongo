<?php

    require_once ('./clases/Conexion.php');
    require_once './clases/Crud.php';
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
    //print_r($datos);
?>

<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Crud con MongoDB y PhP</h2>
                    <a href="./agregar.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Agregar nuevo registro
                    </a>
                    <a href="./agregarDoc.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Agregar un Doctor
                    </a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <!--<th>id</th>-->
                            <th>Nombre Paciente</th>
                            <th>Mes</th>
                            <th>Peso</th>
                            <th>Estatura</th>
                            <th>Tipo de Sangre</th>
                            <th>No. de Receta</th>
                            <th>Doctor</th>
                            <th>Editar</th>
                            <th>Eliminar</th>

                        </thead>
                        <?php 
                            foreach($datos as $item) {
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo isset($item->nombre_paciente) ? $item->nombre_paciente : ''; ?> </td>
                                <td> <?php echo isset($item->mes) ? $item->mes : ''; ?> </td>
                                <td> <?php echo isset($item->peso) ? $item->peso : ''; ?> </td>
                                <td> <?php echo isset($item->estatura) ? $item->estatura : ''; ?> </td>
                                <td> <?php echo isset($item->tipo_sangre) ? $item->tipo_sangre : ''; ?> </td>
                                <td> <?php echo isset($item->noReceta) ? $item->noReceta : ''; ?> </td>
                                <td> <?php echo isset($item->id_doctor) ? $item->id_doctor : ''; ?> </td>
                                <td class="text-center">
                                    <form action="./actualizar.php" method="POST">
                                        
                                    <input type="hidden" name="id" value="<?php echo $item->_id ?>">
                                        <button class="btn btn-warning">
                                            <i class="fa-solid fa-user-pen"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="./eliminar.php" method="POST">
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>