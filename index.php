<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/administrador.controlador.php";
require_once "controllers/medicamento.controlador.php";
require_once "controllers/cliente.controlador.php";
require_once "controllers/mascota.controlador.php";


require_once "models/administrador.modelo.php";
require_once "models/rutas.php";

$plantilla = new ControladorPlantilla();

$plantilla->ctrPlantilla();