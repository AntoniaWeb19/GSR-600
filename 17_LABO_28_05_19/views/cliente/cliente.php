<h1>Patron MVC CRUD PDO, Entidad Clientes</h1>
<hr>
<div>
   <a href="?c=Cliente&a=Crud">Nuevo Cliente</a>
</div>
<table border="1">
    <thead>
     <tr>
       <th>Nombre</th>
       <th>CI</th>
       <th>Telefono</th>   
       <th></th>
       <th></th>

</tr>
</thead>
<tbody>
<?php foreach($this->model->Listar() as $r):?>
<tr>
<td><?php echo $r->nombre; ?></td>
<td><?php echo $r->ci; ?></td>
<td><?php echo $r->telefono; ?></td>
<td>
   <a href="?c=Cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
   </td>
   <td>
   <a onclick="javascript:return confirm('¿Segundo de eliminar este registro?');"
   href="?c=Cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
   </td>
   </tr>
<?php endforeach; ?>
</tbody>
</table> 
 