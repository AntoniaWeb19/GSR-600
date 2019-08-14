<?php
sleep(2);
$valor1=$_POST['ValorCaja1'];

$a = $valor1 % 10;
$valor1 = $valor1 / 10;

$b = $valor1 % 10;
$valor1 = $valor1 / 10;

$c = $valor1 % 10;
$valor1 = $valor1 / 10;

$d = $valor1 % 10;
$valor1 = $valor1 / 10;

//echo $a ." - ". $b." - ". $c." - ". $d;
echo "El 1er Digito es: ".$d;
echo "<br>El 2do Digito es: ".$c;
echo "<br>El 3er Digito es: ".$b;
?>