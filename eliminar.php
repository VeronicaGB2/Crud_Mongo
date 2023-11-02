<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info"> <i class="fa-solid fa-angles-left"></i> Regresar</a>
                    <h2>Eliminar registro</h2>

                    <table class="table table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Receta</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <p>¿Esta seguro de querer eliminar este registro?
                        </p>
                        <p>Una vez eliminado no se podra recuperar
                        </p>
                    </div>
                    <form action="" method="post">
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<?php include "./scripts.php"; ?>