<h1>Patron MVC CRUD PDO, Entidad Libros</h1>
<hr>
<div>
   <a href="?c=Libro&a=Crud">Nuevo Libro</a>
</div>
<table border="1">
    <thead>
     <tr>
       <th>Nombre</th>
       <th>Autor</th>
       <th>Editorial</th>   
       <th></th>
       <th></th>

</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r):?>
<tr>
<td><?php echo $r->nombre; ?></td>
<td><?php echo $r->autor; ?></td>
<td><?php echo $r->editorial; ?></td>
<td>
   <a href="?c=Libro&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
   </td>
   <td>
   <a onclick="javascript:return confirm('¿Segundo de eliminar este registro?');"
   href="?c=Libro&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
   </td>
   </tr>
<?php endforeach; ?>
</tbody>
</table> 
 