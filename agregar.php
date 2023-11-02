<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info"> <i class="fa-solid fa-angles-left"></i> Regresar</a>
                    <h2>Agregar nuevo registro</h2>

                   <form action="" method="post"></form>
                   <label for="nombre">Nombre</label>
                   <input type="text" class="form-control" id="nombre" name="nombre">
                   <label for="nombre">Fecha</label>
                   <input type="date" class="form-control" id="fecha" name="fecha">
                   <label for="nombre">Receta</label>
                   <input type="text" class="form-control" id="receta" name="receta">
                   <button class="btn btn-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Agregar</button>
             
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "./scripts.php"; ?>