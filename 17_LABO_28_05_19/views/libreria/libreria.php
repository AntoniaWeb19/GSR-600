<h1>Patron MVC CRUD PDO, Entidad Libreria</h1>
<hr>
<div>
   <a href="?c=Libreria&a=Crud">Nueva Libreria</a>
</div>
<table border="1">
    <thead>
     <tr>
       <th>Nombre</th>
       <th>Direccion</th>
       <th>Nit</th>   
       <th>Telefono</th>   
       <th></th>
       <th></th>

</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r):?>
<tr>
<td><?php echo $r->nombre; ?></td>
<td><?php echo $r->direccion; ?></td>
<td><?php echo $r->nit; ?></td>
<td><?php echo $r->telefono; ?></td>
<td>
   <a href="?c=Libreria&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
   </td>
   <td>
   <a onclick="javascript:return confirm('¿Segundo de eliminar este registro?');"
   href="?c=Libreria&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
   </td>
   </tr>
<?php endforeach; ?>
</tbody>
</table> 
 