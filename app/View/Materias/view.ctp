<div class="materias view">
<h2><?php echo __('Materia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materia['Seccion']['numero'], array('controller' => 'seccions', 'action' => 'view', $materia['Seccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre Id'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['semestre_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Materia'), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Materia'), array('action' => 'delete', $materia['Materia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $materia['Materia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('controller' => 'semestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aulas'); ?></h3>
	<?php if (!empty($materia['Aula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Horario Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Distintivo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materia['Aula'] as $aula): ?>
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
	<h3><?php echo __('Related Estudiantes'); ?></h3>
	<?php if (!empty($materia['Estudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Semestre Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Nota Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materia['Estudiante'] as $estudiante): ?>
		<tr>
			<td><?php echo $estudiante['id']; ?></td>
			<td><?php echo $estudiante['semestre_id']; ?></td>
			<td><?php echo $estudiante['user_id']; ?></td>
			<td><?php echo $estudiante['materia_id']; ?></td>
			<td><?php echo $estudiante['nota_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estudiantes', 'action' => 'view', $estudiante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estudiantes', 'action' => 'edit', $estudiante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estudiantes', 'action' => 'delete', $estudiante['id']), array('confirm' => __('Are you sure you want to delete # %s?', $estudiante['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($materia['Horario'])): ?>
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
	<?php foreach ($materia['Horario'] as $horario): ?>
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
	<h3><?php echo __('Related Semestres'); ?></h3>
	<?php if (!empty($materia['Semestre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Distintivo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materia['Semestre'] as $semestre): ?>
		<tr>
			<td><?php echo $semestre['id']; ?></td>
			<td><?php echo $semestre['materia_id']; ?></td>
			<td><?php echo $semestre['numero']; ?></td>
			<td><?php echo $semestre['distintivo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'semestres', 'action' => 'view', $semestre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'semestres', 'action' => 'edit', $semestre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'semestres', 'action' => 'delete', $semestre['id']), array('confirm' => __('Are you sure you want to delete # %s?', $semestre['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
