<h1>
   <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>
<h3>
    <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
    </h3>

   <form action="?c=Libro&a=Guardar" method="post">
    <input type="hidden" name="id" value="<?php echo $alm->id;?>" />

    <label>Nombre</label>
    <input type="text" name="Nombre" value="<?php echo $alm->nombre;?>" placeholder="Ingrese su Nombre"/><br>

    <label>Autor</label>
    <input type="text" name="Autor" value="<?php echo $alm->autor;?>" placeholder="Ingrese su CI"/><br>

    <label>Editorial</label>
    <input type="text" name="Editorial" value="<?php echo $alm->editorial;?>" placeholder="Ingrese su Telefono"/><br>

     <hrm />
     <div>
       <button>Guardar</button>
       <a href="?c=Libro">Libros</a>
       </div>
   </form>
  