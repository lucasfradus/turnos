<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cliente Add</h3>
            </div>
            <?php echo form_open('cliente/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
				  <div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>DNI</label>
						<div class="form-group">
							<input type="text" name="dni" value="<?php echo $this->input->post('dni'); ?>" class="form-control" id="dni" />
							<span class="text-danger"><?php echo form_error('dni');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellido" class="control-label"><span class="text-danger">*</span>Apellido</label>
						<div class="form-group">
							<input type="text" name="apellido" value="<?php echo $this->input->post('apellido'); ?>" class="form-control" id="apellido" />
							<span class="text-danger"><?php echo form_error('apellido');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_nac" class="control-label">Fecha Nac</label>
						<div class="form-group">
							<input type="text" name="fecha_nac" value="<?php echo $this->input->post('fecha_nac'); ?>" class="has-datepicker form-control" id="fecha_nac" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direccion</label>
						<div class="form-group">
							<input type="text" name="direccion" value="<?php echo $this->input->post('direccion'); ?>" class="form-control" id="direccion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono" class="control-label">Telefono</label>
						<div class="form-group">
							<input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" class="form-control" id="telefono" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>