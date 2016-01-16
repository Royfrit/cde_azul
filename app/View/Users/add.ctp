<div class="account-wall">
<?php echo $this->Form->create('User', array('class'=>'form-inline')); ?>
	<fieldset>
		<legend> <center><?php echo __('Nuevo Usuario'); ?></center></legend>
	<?php
	$meses = array('01' =>'Enero', '02' =>'Febrero', '03' =>'Marzo', '04' =>'Abril',
		'05' =>'Mayo', '06' =>'junio', '07' =>'julio', '08' =>'Agosto', '09' =>'Septiembre',
		'10' =>'Octubre', '11' =>'Noviembre', '12' =>'Diciembre');
		echo '<div class="input-group col-xs-9">'.$this->Form->input('ced', array('label'=>' ','placeholder'=>'Cédula' , 'class'=>'form-control'))."</div>";
		echo '<div class="input-group col-xs-9">'.$this->Form->input('nombres', array('label'=>' ','placeholder'=>'Nombres' , 'class'=>'form-control'))."</div>";
		echo '<div class="input-group col-xs-9">'.$this->Form->input('apellidos', array('label'=>' ','placeholder'=>'Apellidos' , 'class'=>'form-control'))."</div>";
		echo '<div id="datetimepicker1">'.$this->Form->input('Fecha_nac', array('label'=>'Cumpleaños', 'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>','minYear'=>date(1930), 'maxYear'=>date(2050), 'monthNames' => $meses))."</div>";
		echo '<div class="input-group col-xs-12">'.$this->Form->input('Direccion', array('label'=>'', 'placeholder'=>'Escriba su direccion', 'class'=>'form-control'))."</div>";
		echo '<div class="input-group col-xs-4">'.$this->Form->input('tipotlf', array('label'=>'', 'class'=>'form-control', 'type'=>'select', 'options'=> array('Movil'=>'Movil', 'Fijo'=>'Fijo')))."</div>";
		echo '<div class="input-group col-xs-9">'.$this->Form->input('tlf', array('label'=>'', 'placeholder'=> 'Telefono [Ejemplo:(0123)456-7890]', 'class'=>'form-control'))."</div>";
		echo '<div class="input-group col-xs-9">'.$this->Form->input('role', array('label'=>'Rol','class'=>'form-control', 'type'=>'select', 'options'=> array('Adminstrador'=>'Administrador', 'Profesor'=>'Profesor', 'Estudiante'=>'Estudiante')))."</div>";
			echo '<div class="input-group col-xs-9">'.$this->Form->input('status', array('label'=>'Estado','class'=>'form-control', 'type'=>'select', 'options'=> array('1'=>'Activo', '0'=>'Inactivo')))."</div>";

echo '<div class="input-group col-xs-9">'.$this->Form->input('sede', array('label'=>'Sede', 'class'=>'form-control', 'type'=>'select', 'options'=> array('Ortiz'=>'Ortiz', 'San Juan de los morros'=>'San Juan de los morros', 'Sombrero'=>'Sombrero')))."</div>";
        echo '<div class="input-group col-xs-11">'.$this->Form->input('email', array('label'=>'', 'placeholder'=> 'example@example.com', 'class'=>'form-control'))."</div>";
		echo '<div class="input-group col-xs-9">'.$this->Form->input('password', array('label'=>'', 'placeholder'=> '*******', 'class'=>'form-control'))."</div>";
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Resgistrar')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
