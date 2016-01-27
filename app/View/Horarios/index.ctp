<div class="horarios index">
	<h2><?php echo __('Horarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('salida'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($horarios as $horario): ?>
	<tr>
		<td><?php echo h($horario['Horario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($horario['Seccion']['numero'], array('controller' => 'seccions', 'action' => 'view', $horario['Seccion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Aula']['distintivo'], array('controller' => 'aulas', 'action' => 'view', $horario['Aula']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $horario['Materia']['id'])); ?>
		</td>
		<td><?php echo h($horario['Horario']['entrada']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['salida']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $horario['Horario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $horario['Horario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $horario['Horario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $horario['Horario']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
