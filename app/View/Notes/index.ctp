<div class="notes index">
	<h2><?php echo __('Notes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('period_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($notes as $note): ?>
	<tr>
		<td><?php echo h($note['Note']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($note['Student']['user_id'], array('controller' => 'students', 'action' => 'view', $note['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($note['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $note['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($note['Period']['number'], array('controller' => 'periods', 'action' => 'view', $note['Period']['id'])); ?>
		</td>
		<td><?php echo h($note['Note']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $note['Note']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $note['Note']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $note['Note']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $note['Note']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>