<div class="sections form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Edit Section'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('period_id');
		echo $this->Form->input('number');
		echo $this->Form->input('Schedule');
		echo $this->Form->input('Student');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

