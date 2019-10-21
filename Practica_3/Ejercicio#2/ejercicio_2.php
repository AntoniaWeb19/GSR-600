<?php
   $titulo = "ejercicio 2";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
<h1><?php echo $titulo ?> </h1>
<h2> Realiza un programa que pida por teclado y que muestre luego buenos dias, 
buenas tardes o buenas noches segun la hora.Se utilizaran los tramos de 6 a 12,de 13 a 20 de 21 a 5.
respectivamente.Solo se tienen en cuenta las horas,los minutos y se deben introdusir por teclado. <datalist></datalist>
</h2>
<div id="content">
<p>por favor, introduzca una hora del dia (0-23).</p>
<form action="ejercicio_2_res.php"metho="get">
  <input type="number"name="dia"autofocus>
  <input type="submit" value="Aceptar">
  </form>
  </div>
</body>
</html>