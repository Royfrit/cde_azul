<div class="seccions index">
	<h2><?php echo __('Seccions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('horario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('aula_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($seccions as $seccion): ?>
	<tr>
		<td><?php echo h($seccion['Seccion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seccion['Horario']['id'], array('controller' => 'horarios', 'action' => 'view', $seccion['Horario']['id'])); ?>
		</td>
		<td><?php echo h($seccion['Seccion']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seccion['Aula']['distintivo'], array('controller' => 'aulas', 'action' => 'view', $seccion['Aula']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seccion['Seccion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seccion['Seccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seccion['Seccion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccion['Seccion']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Seccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
