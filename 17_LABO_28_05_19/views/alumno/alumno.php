<div class="container-fluid">

   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Listado de Usuarios</h1>
      <a href="?c=Alumno&a=Crud" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Nuevo Usuario</a>
   </div>

   <table class="table table-bordered table-hover">
   <!-- <thead class="thead-dark"> -->
      <thead class="bg-primary" style="color:white; text-align:center">
      <tr>
         <th class="align-items-center" scope="col">Nombre</th>
         <th scope="col">Apellido</th>
         <th scope="col">Correo</th>
         <th scope="col">Sexo</th>
         <th scope="col">Nacimiento</th>
         <th></th>
         <th></th>
      </tr>
   </thead>
   <tbody style="text-align:center">
   <?php foreach($this->model->Listar() as $r):?>
   <tr>
   <td><?php echo $r->Nombre; ?></td>
   <td><?php echo $r->Apellido; ?></td>
   <td><?php echo $r->Correo; ?></td>
   <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer';?></td>
   <td><?php echo $r->FechaNacimiento;?></td>
   <td>
      <a class="btn btn-warning btn-sm" role="button" href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
      </td>
      <td>
      <a class="btn btn-danger btn-sm" role="button" onclick="javascript:return confirm('¿Segundo de eliminar este registro?');"
      href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
      </td>
      </tr>
   <?php endforeach; ?>
   </tbody>
   </table> 
</div>