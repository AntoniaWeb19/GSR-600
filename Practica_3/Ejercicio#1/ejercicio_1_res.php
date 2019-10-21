
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
     <h1>Soliucion el ejercicio 1</h1>
     
    <div class="content">
    <?php
        $dia = $_GET["dia"];

        $toca = "La meteria te toca es:"
    switch ($dia) {
        case "Lunes":
             echo $toca."Intelegencia Artificial";
        break;
        case "Martes":
             echo $toca."Aplicaciones Informatica Industriales";
        break;
        case "Miercoles":
             echo $toca."Gestion de seguridad en redes";
        break;
        case "Jueves":
             echo $toca."Gestion de seguridad en redes";
        break;
        case "Viernes":
             echo $toca."emprendimiento productivo II";
        break;
        case "Sabado":
             echo "¡Ese dia no hay clase!";
        break;
        default:
        echo "El dia introducido no es correcto";
        break;
      
    }
?>
    </div>
    <p>
    <a href="ejercicio_1.php">Volver el Ejercicio</a>
    </p>
</body>
</html>