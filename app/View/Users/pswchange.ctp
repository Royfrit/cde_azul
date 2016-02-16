<div class="page-container">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Credenciales'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('ced', array('class' => 'form-control','disabled' => 'disabled','label' => 'Cedula de Identidad'));
		echo $this->Form->input('fullname', array('class' => 'form-control','label' => 'Nombre Completo','disabled' => 'disabled'));
		echo $this->Form->input('email', array('class' => 'form-control','label' => 'Correo Electronico'));
		//echo $this->Form->input('password', array('class' => 'form-control','label' => 'Contraseña', 'placeholder' => ''));
		//echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Cuenta'));
		
	?>
	</fieldset>
	<br>
 <?php echo $this->Form->end(array('label' => 'Editar Credenciales', 'class' =>'btn btn-success')); ?>
<br>
  </div>



