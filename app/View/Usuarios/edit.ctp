<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ced', array('label'=>'Cedula', 'class'=>''));
		echo $this->Form->input('nombres', array('label'=>'Nombres', 'class'=>''));
		echo $this->Form->input('apellidos', array('label'=>'Apellidos', 'class'=>''));
		echo $this->Form->input('Fecha_nac', array('label'=>'Fecha de nacimiento','dateFormat'=>'DMY', 'minYear'=>date(1930), 'maxYear'=>date(2050),'class'=>''));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
