<?php
require_once "./core/configGeneral.php";
require_once "./controladores/vistasControlador.php";

$plantilla = new vistasControlador();
$plantilla->odtener_plantilla_controlador();

