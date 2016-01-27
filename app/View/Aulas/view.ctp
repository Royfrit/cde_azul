<div class="aulas view">
<h2><?php echo __('Aula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aula['Seccion']['numero'], array('controller' => 'seccions', 'action' => 'view', $aula['Seccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aula['Horario']['id'], array('controller' => 'horarios', 'action' => 'view', $aula['Horario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aula['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $aula['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distintivo'); ?></dt>
		<dd>
			<?php echo h($aula['Aula']['distintivo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aula'), array('action' => 'edit', $aula['Aula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aula'), array('action' => 'delete', $aula['Aula']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $aula['Aula']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($aula['Horario'])): ?>
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
	<?php foreach ($aula['Horario'] as $horario): ?>
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
	<h3><?php echo __('Related Seccions'); ?></h3>
	<?php if (!empty($aula['Seccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Horario Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Aula Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aula['Seccion'] as $seccion): ?>
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
