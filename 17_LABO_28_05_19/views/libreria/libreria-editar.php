<h1>
   <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>
<h3>
    <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
    </h3>

   <form action="?c=Libreria&a=Guardar" method="post">
    <input type="hidden" name="id" value="<?php echo $alm->id;?>" />

    <label>Nombre</label>
    <input type="text" name="Nombre" value="<?php echo $alm->nombre;?>" placeholder="Ingrese su Nombre"/><br>

    <label>Autor</label>
    <input type="text" name="Direccion" value="<?php echo $alm->direccion;?>" placeholder="Ingrese su Direccion"/><br>

    <label>Editorial</label>
    <input type="text" name="Nit" value="<?php echo $alm->nit;?>" placeholder="Ingrese su Nit"/><br>

    <label>Telefono</label>
    <input type="text" name="Telefono" value="<?php echo $alm->telefono;?>" placeholder="Ingrese su Telefono"/><br>

     <hrm />
     <div>
       <button>Guardar</button>
       <a href="?c=Libreria">Librerias</a>
       </div>
   </form>
    

    