<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Productos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('producto/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Producto</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Precio Unitario</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($productos as $p){ ?>
                    <tr>
						<td><?php echo $p['id_producto']; ?></td>
						<td><?php echo $p['nombre']; ?></td>
						<td><?php echo $p['descripcion']; ?></td>
						<td><?php echo $p['precio_unitario']; ?></td>
						<td>
                            <a href="<?php echo site_url('producto/edit/'.$p['id_producto']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('producto/remove/'.$p['id_producto']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
