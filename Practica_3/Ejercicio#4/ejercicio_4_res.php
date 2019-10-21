<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<h1>solucion al ejercicico 4</h1>
<div class="content">
<?php
$horas trabajadas  = $_GET["horas trabajadas"];

if($horasTrabajadas < 40){
    $sueldosemanal = $horasTrabajadas * 12;
}else{
    $sueldosemanal = (40*12) + ($horasTrabajadas-40) * 16;

}
    echo "El sueldo semanal que le corresponde es de $sueloSemanl Bs."
    ?>
    </div>
    <p>
    <a href="ejercicio_4.php">Volver al ejercicio</a>
    </p>
</body>
</html>