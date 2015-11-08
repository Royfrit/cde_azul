<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
	$meses = array('01' =>'Enero', '02' =>'Febrero', '03' =>'Marzo', '04' =>'Abril', 
		'05' =>'Mayo', '06' =>'junio', '07' =>'julio', '08' =>'Agosto', '09' =>'Septiembre', 
		'10' =>'Octubre', '11' =>'Noviembre', '12' =>'Diciembre');
		echo $this->Form->input('ced', array('label'=>'Cèdula', 'class'=>''));
		echo $this->Form->input('nombres', array('label'=>'Nombres', 'class'=>''));
		echo $this->Form->input('apellidos', array('label'=>'Apellidos', 'class'=>''));
		echo $this->Form->input('Fecha_nac', array('label'=>'Fecha de nacimiento','dateFormat'=>'DMY', 'minYear'=>date(1930), 'maxYear'=>date(2050), 'monthNames' => $meses, 'class'=>''));
		echo $this->Form->input('Direccion', array('label'=>'Dirección', 'class'=>''));
		echo "<div>".$this->Form->input('tipotlf', array('label'=>'tipo de telefono', 'class'=>'', 'type'=>'select', 'options'=> array('Movil'=>'Movil', 'Fijo'=>'Fijo')));
		echo $this->Form->input('tlf', array('label'=>'Telefono [Ejemplo:(0123)456-7890]', 'class'=>''))."</div>";
		echo "<div class=''>".$this->Form->input('role', array('label'=>'Rol', 'class'=>'', 'type'=>'select', 'options'=> array('Adminstrador'=>'Administrador', 'Profesor'=>'Profesor', 'Estudiante'=>'Estudiante')))."</div>";
echo "<div>".$this->Form->input('sede', array('label'=>'Sede', 'class'=>'', 'type'=>'select', 'options'=> array('Ortiz'=>'Ortiz', 'San Juan de los morros'=>'San Juan de los morros', 'Sombrero'=>'Sombrero')))."</div>";
echo $this->Form->input('email', array('label'=>'Correo', 'class'=>''));
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
