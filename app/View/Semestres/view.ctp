<div class="semestres view">
<h2><?php echo __('Semestre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($semestre['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $semestre['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distintivo'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['distintivo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Semestre'), array('action' => 'edit', $semestre['Semestre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Semestre'), array('action' => 'delete', $semestre['Semestre']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $semestre['Semestre']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estudiantes'); ?></h3>
	<?php if (!empty($semestre['Estudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Semestre Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Nota Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($semestre['Estudiante'] as $estudiante): ?>
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
