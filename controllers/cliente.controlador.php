<?php

class ControladorCliente{

    /*=============================================
    MOSTRAR CLIENTES
    =============================================*/
    public static function ctrMostrarCliente($item, $valor)
    {

        $tabla = "cliente";

        $respuesta = ModeloCliente::mdlMostrarCliente($tabla, $item, $valor);

        return $respuesta;
    }
}