<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Especialidades Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('especialidade/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Especialidad</th>
						<th>Nombre</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($especialidades as $e){ ?>
                    <tr>
						<td><?php echo $e['id_especialidad']; ?></td>
						<td><?php echo $e['nombre']; ?></td>
						<td><?php echo $e['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('especialidade/edit/'.$e['id_especialidad']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('especialidade/remove/'.$e['id_especialidad']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
