<?php
sleep(2);
$valor1=$_POST['ValorCaja1'];
if($valor1 % 2 == 0){
$resultado = "Es par";
}else{
    $resultado = "Es impar";
}

echo $valor1." = ".$resultado;
?>