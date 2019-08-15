<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal">Sistema Libreria</h5>
<nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="?home">Home</a>
    <a class="p-2 text-dark" href="?alumno">Usuarios</a>
    <a class="p-2 text-dark" href="?cliente">Clientes</a>
    <a class="p-2 text-dark" href="?libro">Libros</a>
    <a class="p-2 text-dark" href="?libreria">Libreria</a>
</nav>
<a class="btn btn-outline-primary" href="?login">Cerrar Sesión</a>
</div>

<?php
require_once 'models/database.php';

//$controller = 'alumno';
if (isset($_REQUEST['cliente'])) {
    $controller = 'cliente';
}else if(isset($_REQUEST['alumno'])){
    $controller = 'alumno';
}else if(isset($_REQUEST['libro'])){
    $controller = 'libro';
}else if(isset($_REQUEST['libreria'])){
    $controller = 'libreria';
}else{
    $controller = 'home';
}
//Todo esta logica hara el papel de un frontController

if(!isset($_REQUEST['c']))
{
    require_once "controllers/$controller.controller.php";
    $controller = ucwords($controller) . 'controller';
    $controller = new $controller;
    $controller->Index();
}
else
{
    //Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    //Intanciamos el controlador
    require_once "controllers/$controller.controller.php";
    $controller = ucwords($controller) . 'controller';
    $controller = new $controller;

    //llamar la accion
    call_user_func( array( $controller, $accion ));

 }

 ?>