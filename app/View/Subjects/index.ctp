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
	<h2><?php echo __('Materias'); ?></h2>
	<table cellpadding="0" cellspacing="0"  align=center;  >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('COD.Materia'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre de la Materia'); ?></th>
			<th><?php echo $this->Paginator->sort('UC'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
=======
<div class="subjects index">
	<h2><?php echo __('Subjects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cod_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('uc'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
>>>>>>> origin/Lee-Backend
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subjects as $subject): ?>
	<tr>
<<<<<<< HEAD
=======
		<td><?php echo h($subject['Subject']['id']); ?>&nbsp;</td>
>>>>>>> origin/Lee-Backend
		<td><?php echo h($subject['Subject']['cod_subject']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['name']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['uc']); ?>&nbsp;</td>
		<td class="actions">
<<<<<<< HEAD
	
			<?php echo $this->Html->link(__('Editar'),array('action' => 'edit', $subject['Subject']['id']) , array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'),array('action' => 'delete', $subject['Subject']['id']), array('confirm' => __('Esta seguro de que Desea Eliminar Esta Materia?', $subject['Subject']['id']))); ?>
=======
			<?php echo $this->Html->link(__('Ver Secciones'), array('action' => 'view', $subject['Subject']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $subject['Subject']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subject['Subject']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subject['Subject']['id']))); ?>
>>>>>>> origin/Lee-Backend
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
<<<<<<< HEAD
	</div>
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
<<<<<<< HEAD
		echo $this->Paginator->prev('< ' . __('Antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Despues') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
=======
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subject'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
>>>>>>> origin/Lee-Backend
