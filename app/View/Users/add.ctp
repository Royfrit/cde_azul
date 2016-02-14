<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('ced');
		echo $this->Form->input('fullname');
		echo $this->Form->input('birthday');
		echo $this->Form->input('address');
	//	echo $this->Form->input('email');
		//echo $this->Form->input('password');
			echo '<div class="input-group col-xs-2">'.$this->Form->input('role', array('label'=>'Rol','class'=>'form-control', 'type'=>'select', 'options'=> array('Adminstrador'=>'Administrador', 'Profesor'=>'Profesor', 'Estudiante'=>'Estudiante')))."</div>";
		//echo $this->Form->input('status');
		echo $this->Form->input('sede_id');
		//echo $this->Form->input('UserTlf');
		echo $this->Form->input('cohort');
		echo " Nota * Campo Corte, No necesario para Profesores o Administradores";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Tlves'), array('controller' => 'user_tlves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Tlf'), array('controller' => 'user_tlves', 'action' => 'add')); ?> </li>
	</ul>
</div>
