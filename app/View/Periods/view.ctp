<div class="periods view">
<h2><?php echo __('Period'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($period['Period']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($period['Period']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($period['Period']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Period'), array('action' => 'edit', $period['Period']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Period'), array('action' => 'delete', $period['Period']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $period['Period']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sections'); ?></h3>
	<?php if (!empty($period['Section'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Period Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($period['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id']; ?></td>
			<td><?php echo $section['subject_id']; ?></td>
			<td><?php echo $section['user_id']; ?></td>
			<td><?php echo $section['period_id']; ?></td>
			<td><?php echo $section['number']; ?></td>
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
