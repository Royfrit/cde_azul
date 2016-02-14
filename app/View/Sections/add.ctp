<div class="sections form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Add Section'); ?></legend>
	<?php
		echo $this->Form->input('subject_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('period_id');
		echo $this->Form->input('number');
		echo $this->Form->input('quantity'); ?>
		<table>
			<table cellpadding="0" cellspacing="0" border="1">
			<thead>
			<tr>
					<th><?php echo ('Dia'); ?></th>
					<th><?php echo ('Aula'); ?></th>
					<th><?php echo ('Hora de Inicio'); ?></th>
					<th><?php echo ('Hora de Salida'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i=1; $i < 3 ; $i++): ?>
					<tr>
						<?php 	$dias = array('0' =>'','Lunes','Martes','Miercoles','Jueves',
								'Viernes','A Distancia'); ?>
						<?php  $aula = array('0' => '','Aula 1', 'Aula 2' , 'Aula 3', 'Aula 4' , 'Aula 5', 'Aula 6' , 'Aula 7', 'Aula 8' , 'Aula 9', 'Aula 10' , 'Aula 11', 'Aula 12' , 'Aula 13', 'Aula 14' , 'Aula 15', 'Aula 16' , 'Lab 1', 'Lab 2' , 'Lab 3', 'Lab 4','Lab 5','Opsu'); ?>

						<?php  $hora = array('0' => '','7:00-7:45','7:45-8:30','8:30-9:15','9:15-10:00','10:00-10:45','10:45-11:30','1:00-1:45','1:45-2:30','2:30-3:15','3:15-4:00','4:00-4:45','4:45-5:30'); ?>


					<td><?php echo $this->Form->input('day'.$i, array('class' => 'form-control','label' => false,'type'=>'select','options' => $dias )); ?> </td>
					<td><?php echo $this->Form->input('classroom'.$i, array('class' => 'form-control','label' => false,'type'=>'select','options' => $aula , 'placeholder' => $aula[0])); ?> </td>
					<td><?php echo $this->Form->input('start'.$i, array('class' => 'form-control','label' => false, 'type'=>'select','options' => $hora)); ?> </td>
					<td><?php echo $this->Form->input('end'.$i, array('class' => 'form-control','label' => false, 'type'=>'select','options' => $hora)); ?> </td>
					</tr>
			<?php endfor; ?>
			</tbody>
		</table>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?></li>
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
