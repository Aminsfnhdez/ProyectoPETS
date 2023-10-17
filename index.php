<?php
// Librerias

require_once "controllers/plantilla.controlador.php";

require_once "models/administrador.modelo.php";
require_once "models/rutas.php";

$plantilla = new ControladorPlantilla();

$plantilla->ctrPlantilla();