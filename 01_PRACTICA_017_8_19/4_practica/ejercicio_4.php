<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 4</title>
</head>
<body>
<h1>Practica 4</h1>
     <h2>Escribe un programa que muestre  tu horario de la clase mediante una tabla.</h2>
   
   <?php
       $iar_600 = "IAR - 600";
       $aii_600 = "AII - 600";
       $gsr_600 = "GSR - 600";
       $isl_600 = "ISL - 600";
       $emp_600 = "EMP - 600";
       $tmg_600 = "TMG - 600";
    
   ?>

    <table  border="1">
   <tr>
    <th>Per.</th>
    <th>Hrs.</th>
    <th>LUNES</th>
    <th>MARTES</th>
    <th>MIERCOLES</th>
    <th>JUEVES</th>
    <th>VIERNES</th>
   </tr>
   <tr>
   <td>1</td>
   <td>08:00 - 08:45</td>
   <td rowspan="4"><?php echo $iar_600;?></td>
   <td rowspan="4"><?php echo $aii_600;?></td>
   <td rowspan="2"><?php echo $gsr_600;?></td>
   <td rowspan="4"><?php echo $gsr_600;?></td>
   <td rowspan="2"><?php echo $emp_600;?></td>
   </tr>
   <tr>
   <td>2</td>
   <td>08:45 - 09:30</td>
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!--  <td></td> -->
   </tr>
   <tr>
   <td>3</td>
   <td>09:30 - 10:15</td>
   <!-- <td></td> -->
   <!-- <td></td> -->
   <td rowspan="2"><?php echo $isl_600;?></td>
   <!-- <td></td> -->
   <td rowspan="2"><?php echo $tmg_600;?></td>
   </tr>
    <tr>
   <td>4</td>
   <td>10:15 - 11:00</td>
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   </tr>
   <tr>
      <td colspan="7">DESCANSO</td>
      </tr>
      <tr>
   <td>5</td>
   <td>11:30 - 12:15</td>
   <td rowspan = "2"><?php echo $aii_600;?></td>
   <td rowspan = "2"><?php echo $isl_600;?></td>
   <td rowspan = "2"><?php echo $isl_600;?></td>
   <td rowspan = "2"><?php echo $air_600;?></td>
   <td rowspan="2"><?php echo $tmg_600;?></td>
   </tr>
   <tr>
   <td>6</td>
   <td>12:15 - 13:00</td>
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
   <!-- <td></td> -->
</tr>
</table>

    
</body>
</html>