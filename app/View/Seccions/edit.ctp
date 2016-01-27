<div class="seccions form">
<?php echo $this->Form->create('Seccion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('horario_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('aula_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seccion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Seccion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
