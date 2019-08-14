<?php
require_once 'alumnos.entidad.php';
require_once 'alumnos.model.php';

$alumno = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']){
        case ' registrar':
        $alumno->__SET('Nombre',$_REQUEST['Nombre']);
        $alumno->__SET('Apellido',$_REQUEST['Apellido']);
        $alumno->__SET('Sexo',$_REQUEST['Sexo']);
        $alumno->__SET('FechaNacimiento',$_REQUEST['FechaNacimiento']);

        $model-> Registrar($alumno) ;
       
        break;

        case 'actualizar':
        $alumno->__SET('Id',$_REQUEST['id']);
        $alumno->__SET('Nombre',$_REQUEST['Nombre']);
        $alumno->__SET('Apellido',$_REQUEST['Apellido']);
        $alumno->__SET('Sexo',$_REQUEST['Sexo']);
        $alumno->__SET('FechaNacimiento',$_REQUEST['FechaNacimiento']);
         $model->Actualizar($alumno) ;
        header('Location: alumnos.php');
        break;

        case 'eliminar':
        $model->Eliminar($_REQUEST['id']);
        header('Location: alumnos.php');
        break;

        case 'editar':
        $alumno = $model->Obtener($_REQUEST['id']);
      
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABM BASICO en TEW-500</title>
</head>
<body>
<h2>Formulario ABM Basico con POO</h2>
<div>
   <table>
       <thead> 
            <tr>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Sexo</th>
             <th>Nacimiento</th>

    </tr>
    </thead>
    <tbody>
 <?php foreach($model->Listar() as $frow): ?>
 <tr>
      <td><?php echo $row->__GET('Nombre'); ?></td>
      <td><?php echo $row->__GET('Apellido'); ?></td>
      <td><?php echo $row->__GET('Sexo') == 1 ? 'M' : 'F'; ?></td>
      <td><?php echo $row->__GET('FechaNacimiento'); ?></td>
      <td>
      <a href="?action=editar&id=<?php echo $row->Id ?>">Editar</a>
      </td>
      <td>
      <a href="?action=eliminar&id=<?php echo $row->Id ?>">Eliminar</a>
      </td>
</tr>
<?php endforeach;?>

</tbody>
</table>
</div>
</article>
</section>
<aside>
   <h3>Guardar y Actualizar</h3>
   <div>
<form action="?action=<?php echo $alumno->Id > 0?'actualizar':'registrar'; ?>"method="POST">
<input type="hidden" name="id" value="<?php echo $alumno->__GET('Id'); ?>">
Nombre: 
<input type="text" name="Nombre" value="<?php echo $alumno->GET('Nombre');?>"><br>
Apellido:
 <input type="text" name="Apellido" value="<?php echo $alumno->GET('Apellido');?>"><br>
Sexo: 
<select name="Sexo">
<option value="1" <?php echo $alumno->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Masculino</option>
<option value="2" <?php echo $alumno->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Femenino</option>
</select>
<br>
FechaNacimiento:
 <input type="text" name="FechaNacimiento" value="<?php echo $alumno->GET('FechaNacimiento');?>"><br>
 <button type="submit" >Guardar</button>
 </form>
 </div>
</body>
</html> 



