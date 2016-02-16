<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ced');
		echo $this->Form->input('fullname');
		echo $this->Form->input('birthday');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
		echo $this->Form->input('status');
		echo $this->Form->input('sede_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Tlves'), array('controller' => 'user_tlves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Tlf'), array('controller' => 'user_tlves', 'action' => 'add')); ?> </li>
	</ul>
</div>
