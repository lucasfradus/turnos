<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Turnos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('turno/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Turno</th>
						<th>Id Especialidad</th>
						<th>Id Cliente</th>
						<th>Fecha</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($turnos as $t){ ?>
                    <tr>
						<td><?php echo $t['id_turno']; ?></td>
						<td><?php echo $t['id_especialidad']; ?></td>
						<td><?php echo $t['id_cliente']; ?></td>
						<td><?php echo $t['fecha']; ?></td>
						<td>
                            <a href="<?php echo site_url('turno/edit/'.$t['id_turno']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('turno/remove/'.$t['id_turno']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
