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
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subjects as $subject): ?>
	<tr>
		<td><?php echo h($subject['Subject']['cod_subject']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['name']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['uc']); ?>&nbsp;</td>
		<td class="actions">
	
			<?php echo $this->Html->link(__('Editar'),array('action' => 'edit', $subject['Subject']['id']) , array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'),array('action' => 'delete', $subject['Subject']['id']), array('confirm' => __('Esta seguro de que Desea Eliminar Esta Materia?', $subject['Subject']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, Monstrando {:current} registros de un {:count} total, Empezando por el {:start}, Terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Despues') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
