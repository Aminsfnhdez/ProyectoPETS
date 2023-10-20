<?php

class ModeloMedicamento{

    /*=============================================
    MOSTRAR MEDICAMENTOS
    =============================================*/
    public static function mdlMostrarMedicamento($tabla, $item, $valor)
    {

        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
}
