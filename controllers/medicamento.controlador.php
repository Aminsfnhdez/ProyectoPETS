<?php

class ControladorMedicamento{

    /*=============================================
    MOSTRAR MEDICAMENTOS
    =============================================*/
    public static function ctrMostrarMedicamento($item, $valor)
    {

        $tabla = "medicamento";

        $respuesta = ModeloAdministrador::mdlMostrarAdministrador($tabla, $item, $valor);

        return $respuesta;
    }

}