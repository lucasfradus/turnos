<?php echo form_open('especialidades_producto/edit/'.$especialidades_producto['id_especialidad_producto'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_especialidad" class="col-md-4 control-label"><span class="text-danger">*</span>Especialidade</label>
		<div class="col-md-8">
			<select name="id_especialidad" class="form-control">
				<option value="">select especialidade</option>
				<?php 
				foreach($all_especialidades as $especialidade)
				{
					$selected = ($especialidade['id_especialidad'] == $especialidades_producto['id_especialidad']) ? ' selected="selected"' : "";

					echo '<option value="'.$especialidade['id_especialidad'].'" '.$selected.'>'.$especialidade['nombre'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_especialidad');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="id_producto" class="col-md-4 control-label"><span class="text-danger">*</span>Producto</label>
		<div class="col-md-8">
			<select name="id_producto" class="form-control">
				<option value="">select producto</option>
				<?php 
				foreach($all_productos as $producto)
				{
					$selected = ($producto['id_producto'] == $especialidades_producto['id_producto']) ? ' selected="selected"' : "";

					echo '<option value="'.$producto['id_producto'].'" '.$selected.'>'.$producto['nombre'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_producto');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cantidad" class="col-md-4 control-label">Cantidad</label>
		<div class="col-md-8">
			<input type="text" name="cantidad" value="<?php echo ($this->input->post('cantidad') ? $this->input->post('cantidad') : $especialidades_producto['cantidad']); ?>" class="form-control" id="cantidad" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>