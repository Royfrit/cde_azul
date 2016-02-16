<div class="notes view">
<h2><?php echo __('Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($note['Student']['user_id'], array('controller' => 'students', 'action' => 'view', $note['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($note['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $note['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period'); ?></dt>
		<dd>
			<?php echo $this->Html->link($note['Period']['number'], array('controller' => 'periods', 'action' => 'view', $note['Period']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($note['Note']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Note'), array('action' => 'edit', $note['Note']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Note'), array('action' => 'delete', $note['Note']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $note['Note']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
