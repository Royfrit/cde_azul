<div class="usuarios index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>

			<th><?php echo $this->Paginator->sort('Cèdula'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('Apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('Sede'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['User']['ced']); ?>&nbsp;</td>
		<td><?php echo h($usuario['User']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($usuario['User']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($usuario['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($usuario['User']['sede']); ?>&nbsp;</td>
		<td><?php echo h($usuario['User']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['User']['id']))); ?>
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
		<li><?php if ($current_user['role']=='Adminstrador') {
		 echo 'solo admin'; //$this->Html->link(__('New Usuario'), array('action' => 'add'));
	 	}?></li>


	</ul>
</div>
