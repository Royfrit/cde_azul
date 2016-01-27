<div class="horarios form">
<?php echo $this->Form->create('Horario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Horario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('seccion_id');
		echo $this->Form->input('aula_id');
		echo $this->Form->input('materia_id');
		echo $this->Form->input('entrada');
		echo $this->Form->input('salida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Horario.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Horario.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
