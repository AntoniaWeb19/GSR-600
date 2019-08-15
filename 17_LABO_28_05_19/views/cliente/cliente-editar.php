<h1>
   <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>
<h3>
    <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
    </h3>

    <form action="?c=Cliente&a=Guardar" method="post">
    <input type="hidden" name="id" value="<?php echo $alm->id;?>" />

    <label>Nombre</label>
    <input type="text" name="Nombre" value="<?php echo $alm->nombre;?>" placeholder="Ingrese su Nombre"/><br>

    <label>CI</label>
    <input type="text" name="CI" value="<?php echo $alm->ci;?>" placeholder="Ingrese su CI"/><br>

    <label>Telefono</label>
    <input type="text" name="Telefono" value="<?php echo $alm->telefono;?>" placeholder="Ingrese su Telefono"/><br>

     <hrm />
     <div>
       <button>Guardar</button>
       <a href="?c=Cliente">Clientes</a>
       </div>
       </form>
    

    