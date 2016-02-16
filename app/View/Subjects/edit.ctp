<div class="subjects form">
<?php echo $this->Form->create('Subject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cod_subject');
		echo $this->Form->input('name');
		echo $this->Form->input('uc');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
