<div class="page-container">
<?php echo $this->Form->create('Period'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Periodo'); ?></legend>
	<?php
		echo $this->Form->input('number', array('class' => 'form-control', 'label' => 'Numero del Periodo') );
		echo $this->Form->input('type'  , array('class' => 'form-control', 'label' => 'Tipo de Periodo','options' => array('Regular','Intensivo','Especial')));
	?>
	</fieldset> <br> <br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
