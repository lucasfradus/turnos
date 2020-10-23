<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Producto Edit</h3>
            </div>
			<?php echo form_open('producto/edit/'.$producto['id_producto']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $producto['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label"><span class="text-danger">*</span>Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $producto['descripcion']); ?>" class="form-control" id="descripcion" />
							<span class="text-danger"><?php echo form_error('descripcion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="precio_unitario" class="control-label"><span class="text-danger">*</span>Precio Unitario</label>
						<div class="form-group">
							<input type="text" name="precio_unitario" value="<?php echo ($this->input->post('precio_unitario') ? $this->input->post('precio_unitario') : $producto['precio_unitario']); ?>" class="form-control" id="precio_unitario" />
							<span class="text-danger"><?php echo form_error('precio_unitario');?></span>
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