<div class="container-fluid">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $alm->id != null ? 'Editar Usuario '.$alm->Nombre : 'Nuevo Registro'; ?></h1>
   </div>
   
   <form action="?c=Alumno&a=Guardar" method="post">
   <input type="hidden" name="id" value="<?php echo $alm->id;?>" />
   
   <div class="form-row">
      <div class="form-group col-md-6">
         <label for="inputNombre">Nombre</label>
         <input class="form-control" type="text" name="Nombre" value="<?php echo $alm->Nombre;?>" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group col-md-6">
         <label for="inputApellido">Apellido</label>
         <input class="form-control" type="text" name="Apellido" value="<?php echo $alm->Apellido;?>" placeholder="Ingrese su apellido">
      </div>
   </div>
   
   <div class="form-group">
      <label for="inputCorreo">Correo</label>
      <input class="form-control" type="email" name="Correo" value="<?php echo $alm->Correo;?>" placeholder="Ingrese su correo electronico">
   </div>

   <div class="form-row">
      <div class="form-group col-md-6">
         <label for="inputSexo">Sexo</label>
         <select class="form-control" name="Sexo">
            <option selected>Selecione</option>
            <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Hombre</option>
            <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Mujer</option>
         </select>
      </div>
      <div class="form-group col-md-6">
         <label for="inputFechaNacimiento">Fecha Nacimiento</label>
         <input class="form-control" type="date" name="FechaNacimiento" value="<?php echo $alm->FechaNacimiento;?>">
      </div>
   </div>

   <button type="submit" class="btn btn-primary">Guardar</button>
   <a class="btn btn-success" href="?c=Alumno">Cancelar</a>
   </form>

</div>