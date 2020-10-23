<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Turno Add</h3>
            </div>
            <?php echo form_open('turno/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_especialidad" class="control-label"><span class="text-danger">*</span>Especialidade</label>
						<div class="form-group">
							<select name="id_especialidad" class="form-control">
								<option value="">select especialidade</option>
								<?php 
								foreach($all_especialidades as $especialidade)
								{
									$selected = ($especialidade['id_especialidad'] == $this->input->post('id_especialidad')) ? ' selected="selected"' : "";

									echo '<option value="'.$especialidade['id_especialidad'].'" '.$selected.'>'.$especialidade['nombre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_especialidad');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_cliente" class="control-label"><span class="text-danger">*</span>Cliente</label>
						<div class="form-group">
							<select name="id_cliente" class="form-control">
								<option value="">select cliente</option>
								<?php 
								foreach($all_clientes as $cliente)
								{
									$selected = ($cliente['id_cliente'] == $this->input->post('id_cliente')) ? ' selected="selected"' : "";

									echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nombre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_cliente');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label"><span class="text-danger">*</span>Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $this->input->post('fecha'); ?>" class="has-datetimepicker form-control" id="fecha" />
							<span class="text-danger"><?php echo form_error('fecha');?></span>
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