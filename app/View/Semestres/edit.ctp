<div class="semestres form">
<?php echo $this->Form->create('Semestre'); ?>
	<fieldset>
		<legend><?php echo __('Edit Semestre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('materia_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('distintivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Semestre.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Semestre.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
