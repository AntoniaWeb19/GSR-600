<?php
sleep(2);
$valor1=$_POST['ValorCaja1'];
if($valor1 % 2 == 0){
$resultado = "Es mayor";
}else{
    $resultado = "Es menor";
}

echo $valor1." = ".$resultado;
?>