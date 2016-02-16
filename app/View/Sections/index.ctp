<<<<<<< HEAD
<style>
body {font-family: Arial, Helvetica, sans-serif;}

table {
 font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;
    margin: 45px;
    width: 480px;
    text-align: left;
    border-collapse: collapse; }

th {
font-size: 13px;
font-weight: normal;
padding: 8px;
background: #b9c9fe;
border-top: 4px solid #aabcfe;
border-bottom: 1px solid #fff;
color: #039; }

td {
padding: 8px;
background: #e8edff;
border-bottom: 1px solid #fff;
color: #669;
border-top: 1px solid transparent; }

tr:hover td {
background: #d0dafd;
color: #339; }

</style>
<div class="page-container5">
	<div align='center'>
	<h2><?php echo __('Secciones'); ?></h2>
	<table cellpadding="0" cellspacing="0" align=center; >
	<thead>
	<tr>

			<th><?php echo $this->Paginator->sort('Materia'); ?></th>
			<th><?php echo $this->Paginator->sort('Profesor'); ?></th>
			<th><?php echo $this->Paginator->sort('Periodo'); ?></th>
			<th><?php echo $this->Paginator->sort('Cantidad Maxima de la Materia'); ?></th>
			<th><?php echo $this->Paginator->sort('Numero de la Seccion'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
=======
<div class="sections index">
	<h2><?php echo __('Sections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('period_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
>>>>>>> origin/Lee-Backend
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sections as $section): ?>
	<tr>
<<<<<<< HEAD

=======
		<td><?php echo h($section['Section']['id']); ?>&nbsp;</td>
>>>>>>> origin/Lee-Backend
		<td>
			<?php echo $this->Html->link($section['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $section['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($section['User']['fullname'], array('controller' => 'users', 'action' => 'view', $section['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($section['Period']['number'], array('controller' => 'periods', 'action' => 'view', $section['Period']['id'])); ?>
		</td>
		<td><?php echo h($section['Section']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['number']); ?>&nbsp;</td>
		<td class="actions">
<<<<<<< HEAD
	
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $section['Section']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $section['Section']['id']), array('confirm' => __('Esta seguro de que desea Elimnar esta section?', $section['Section']['id']))); ?>
=======
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $section['Section']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $section['Section']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $section['Section']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $section['Section']['id']))); ?>
>>>>>>> origin/Lee-Backend
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
<<<<<<< HEAD

	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, Monstrando {:current} registros de un {:count} total, Empezando por el {:start}, Terminando en {:end}')
=======
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
>>>>>>> origin/Lee-Backend
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<<<<<<< HEAD
=======
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
>>>>>>> origin/Lee-Backend
