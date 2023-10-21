<?php

require_once "../../controlles/reportes.controlador.php";
require_once "../../models/reportes.modelo.php";

require_once "../../controlles/medicamento.controlador.php";
require_once "../../models/medicamento.modelo.php";

require_once "../../controlles/cliente.controlador.php";
require_once "../../models/cliente.modelo.php";

require_once "../../controlles/mascota.controlador.php";
require_once "../../models/mascota.modelo.php";

$reporte = new ControladorReporte();
$reporte->ctrDescargarReporte();