<?php
//require_once './Conexion.php';
//require_once './vendor/autoload.php';

class Crud extends Conexion {
    public function mostrarDatos() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paciente;
            $datos = $coleccion->find();
            
            return $datos; // Devolver los datos recuperados
        } catch (\Throwable $th) {
            return $th->getMessage(); // En caso de error, devuelve el mensaje de error
        }
    }
    public function obtenerDocumento($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->paciente;
            $datos = $coleccion->findOne(
                                    array(
                                        '_id' => new MongoDB\BSON\ObjectId($id)
                                    )
                                );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function insertarDatos($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->paciente;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function eliminar($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->paciente;
            $respuesta = $coleccion->deleteOne(
                                        array(
                                            "_id" => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function actualizar($id, $datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->paciente;
            $respuesta = $coleccion->updateOne(
                                        ['_id' => new MongoDB\BSON\ObjectId($id)],
                                        [
                                            '$set' => $datos    
                                        ]
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function insertarDatosDoc($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->doctor;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function mostrarDatosDoc() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->doctor;
            $datos = $coleccion->find();
            
            return $datos; // Devolver los datos recuperados
        } catch (\Throwable $th) {
            return $th->getMessage(); // En caso de error, devuelve el mensaje de error
        }
    }
    public function obtenerDocumentoDoc($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->doctor;
            $datos = $coleccion->findOne(
                                    array(
                                        '_id' => new MongoDB\BSON\ObjectId($id)
                                    )
                                );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function actualizarDoc($id, $datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->doctor;
            $respuesta = $coleccion->updateOne(
                                        ['_id' => new MongoDB\BSON\ObjectId($id)],
                                        [
                                            '$set' => $datos    
                                        ]
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}

    
?>
