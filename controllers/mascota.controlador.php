<?php

class ControladorMascota{

    /*=============================================
    MOSTRAR CLIENTES
    =============================================*/
    public static function ctrMostrarMascota($item, $valor){

        $tabla = "mascota";

        $respuesta = ModeloMascota::mdlMostrarMascota($tabla, $item, $valor);
        return $respuesta;
    }
}