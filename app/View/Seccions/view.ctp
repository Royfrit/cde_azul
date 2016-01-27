<div class="seccions view">
<h2><?php echo __('Seccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seccion['Seccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seccion['Horario']['id'], array('controller' => 'horarios', 'action' => 'view', $seccion['Horario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($seccion['Seccion']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seccion['Aula']['distintivo'], array('controller' => 'aulas', 'action' => 'view', $seccion['Aula']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccion'), array('action' => 'edit', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seccion'), array('action' => 'delete', $seccion['Seccion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccion['Seccion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aulas'); ?></h3>
	<?php if (!empty($seccion['Aula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Horario Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Distintivo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccion['Aula'] as $aula): ?>
		<tr>
			<td><?php echo $aula['id']; ?></td>
			<td><?php echo $aula['seccion_id']; ?></td>
			<td><?php echo $aula['horario_id']; ?></td>
			<td><?php echo $aula['materia_id']; ?></td>
			<td><?php echo $aula['distintivo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aulas', 'action' => 'view', $aula['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aulas', 'action' => 'edit', $aula['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aulas', 'action' => 'delete', $aula['id']), array('confirm' => __('Are you sure you want to delete # %s?', $aula['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($seccion['Horario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Aula Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Entrada'); ?></th>
		<th><?php echo __('Salida'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccion['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id']; ?></td>
			<td><?php echo $horario['seccion_id']; ?></td>
			<td><?php echo $horario['aula_id']; ?></td>
			<td><?php echo $horario['materia_id']; ?></td>
			<td><?php echo $horario['entrada']; ?></td>
			<td><?php echo $horario['salida']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $horario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Materias'); ?></h3>
	<?php if (!empty($seccion['Materia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Semestre Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccion['Materia'] as $materia): ?>
		<tr>
			<td><?php echo $materia['id']; ?></td>
			<td><?php echo $materia['seccion_id']; ?></td>
			<td><?php echo $materia['nombre']; ?></td>
			<td><?php echo $materia['status']; ?></td>
			<td><?php echo $materia['semestre_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), array('confirm' => __('Are you sure you want to delete # %s?', $materia['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
