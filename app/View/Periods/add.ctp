<<<<<<< HEAD
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
=======
<div class="periods form">
<?php echo $this->Form->create('Period'); ?>
	<fieldset>
		<legend><?php echo __('Add Period'); ?></legend>
	<?php
		echo $this->Form->input('number');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
>>>>>>> origin/Lee-Backend
</div>
