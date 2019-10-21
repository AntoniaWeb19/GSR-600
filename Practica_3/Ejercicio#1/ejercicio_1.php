<?php
   $titulo = "ejercicio 1";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<h1><?php echo $titulo ?> </h1>
<h2>Escribe un programa que pida por teclado un
 dia de la semana y que diga que esignatura toca a primera hora ese dia</h2>
<div id="content">
<p>por favor, introduzca un dia de la semana (en minuscula)y le dire que materia te toca</p>
<form action="ejercicio_1_res.php"metho="get">
  <input type="text"name="dia"autofocus>
  <input type="submit" value="Aceptar">
  </form>
  </div>
</body>
</html>