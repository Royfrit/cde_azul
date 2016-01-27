<div class="estudiantes view">
<h2><?php echo __('Estudiante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['Semestre']['distintivo'], array('controller' => 'semestres', 'action' => 'view', $estudiante['Semestre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['User']['role'], array('controller' => 'users', 'action' => 'view', $estudiante['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $estudiante['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['Nota']['id'], array('controller' => 'notas', 'action' => 'view', $estudiante['Nota']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudiante'), array('action' => 'edit', $estudiante['Estudiante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudiante'), array('action' => 'delete', $estudiante['Estudiante']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('controller' => 'semestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notas'), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota'), array('controller' => 'notas', 'action' => 'add')); ?> </li>
	</ul>
</div>
