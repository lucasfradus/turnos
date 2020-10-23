<div class="pull-right">
	<a href="<?php echo site_url('especialidades_producto/add'); ?>" class="btn btn-success">Nuevo</a> 
</div>
<div class="pull-left">
	Acá podemos ver que productos son necesarios para realizar una consulta o turno.
</div>
<table id="example" class="table table-striped">
<thead>

    <tr>
		<th>Id</th>
		<th>Especialidad</th>
		<th>Producto</th>
		<th>Cantidad</th>
		<th>Acciones</th>
	</tr>
</thead>
<tbody>
	<?php foreach($especialidades_productos as $e){ ?>
    <tr>
		<td><?php echo $e['id_especialidad_producto']; ?></td>
		<td><?php echo $e['nombre_especialidad']; ?></td>
		<td><?php echo $e['nombre_producto']; ?></td>
		<td><?php echo $e['cantidad']; ?></td>
		<td>
            <a href="<?php echo site_url('especialidades_producto/edit/'.$e['id_especialidad_producto']); ?>" class="btn btn-info btn-xs">Editar</a> 
            <a href="<?php echo site_url('especialidades_producto/remove/'.$e['id_especialidad_producto']); ?>" class="btn btn-danger btn-xs">Eliminar</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
