<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['User']['fullname'], array('controller' => 'users', 'action' => 'view', $student['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cohort'); ?></dt>
		<dd>
			<?php echo h($student['Student']['cohort']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $student['Student']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sections'); ?></h3>
	<?php if (!empty($student['Section'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Period Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id']; ?></td>
			<td><?php echo $section['subject_id']; ?></td>
			<td><?php echo $section['user_id']; ?></td>
			<td><?php echo $section['period_id']; ?></td>
			<td><?php echo $section['number']; ?></td>
			<td><?php echo $section['quantity']; ?></td>
			<td><?php echo $section['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), array('confirm' => __('Are you sure you want to delete # %s?', $section['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
