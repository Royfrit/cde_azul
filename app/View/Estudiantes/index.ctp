<div class="estudiantes index">
	<h2><?php echo __('Estudiantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td><?php echo h($estudiante['Estudiante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estudiante['Semestre']['distintivo'], array('controller' => 'semestres', 'action' => 'view', $estudiante['Semestre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estudiante['User']['role'], array('controller' => 'users', 'action' => 'view', $estudiante['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estudiante['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $estudiante['Materia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estudiante['Nota']['id'], array('controller' => 'notas', 'action' => 'view', $estudiante['Nota']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estudiante['Estudiante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiante['Estudiante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiante['Estudiante']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?></li>
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
