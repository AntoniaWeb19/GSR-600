<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 5</title>
</head>
<body>
<h1>Practica 5</h1>
<h2>Escribir un programa que utilice las variables $x y $y.
Asignale los valores 144 y 999respectivamente.</h2>
<p>
<?php
   $x = 144;
   $y = 999;
 
   $Suma = $x + $y;
   $resta = $x- $y;
   $multiplicacion = $x * $y;
   $division  = $x / $y;
?>
</p>
<p>
   <?php
   echo "La suma es: ".$Suma;
   ?>
</p>
<p>
  <?php
   echo "La resta es: ".$resta;
  ?>
</p>
<p>
  <?php
  echo "La multiplicacion es: ".$multiplicacion;
  ?>
</p>

<p>
<?php
echo "La division es: ".$division;
?>
</p>
    
</body>
</html>