<div class="horarios view">
<h2><?php echo __('Horario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Seccion']['numero'], array('controller' => 'seccions', 'action' => 'view', $horario['Seccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Aula']['distintivo'], array('controller' => 'aulas', 'action' => 'view', $horario['Aula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $horario['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entrada'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salida'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['salida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Horario'), array('action' => 'edit', $horario['Horario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Horario'), array('action' => 'delete', $horario['Horario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $horario['Horario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aulas'); ?></h3>
	<?php if (!empty($horario['Aula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Horario Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Distintivo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($horario['Aula'] as $aula): ?>
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
	<h3><?php echo __('Related Seccions'); ?></h3>
	<?php if (!empty($horario['Seccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Horario Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Aula Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($horario['Seccion'] as $seccion): ?>
		<tr>
			<td><?php echo $seccion['id']; ?></td>
			<td><?php echo $seccion['horario_id']; ?></td>
			<td><?php echo $seccion['numero']; ?></td>
			<td><?php echo $seccion['aula_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'seccions', 'action' => 'view', $seccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'seccions', 'action' => 'edit', $seccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'seccions', 'action' => 'delete', $seccion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
