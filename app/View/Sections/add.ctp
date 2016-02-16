<<<<<<< HEAD
<style> 
body 
{ font: 14px/21px "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif; 
} 

.contact_form h2, 
.contact_form label 
{ font-family: Georgia, Times, "Times New Roman", serif; 
} 

.form_hint, .required_notification 
{ font-size: 11px; 
	}

/* === List Styles === */ 
.contact_form ul 
{ 	width: 100%; 
	list-style-type: none; 
	list-style-position: outside; 
	margin: 0px; 
	padding: 0px; 
} 

.contact_form li 
{ padding: 12px; 
	border-bottom: 1px solid #eee; 
	position: relative; 
} 

.contact_form li:first-child, .contact_form li:last-child 
{ border-bottom: 1px solid #777; 
	}
 /* === Form Header === */ 
 .contact_form h2 { 
 margin: 0; 
 display: inline; 
 } 
 .required_notification 
 { color: #d45252; 
 	margin: 5px 0 0 0; 
 	display: inline; 
 	float: right; } 
 /* === Form Elements === */ 
 .contact_form label 
 { width: 150px; 
 	margin-top: 3px; 
 	display: inline-block; 
 	float: left; 
 	padding: 3px; 
 	} 

 .contact_form input 
 { height: 20px; 
 	width: 220px; 
 	padding: 5px 8px; 
 	} 

 .contact_form textarea 
 { padding: 8px; 
 	width: 300px; 
 	} 
.contact_form button 
{ margin-left: 156px; 
}
 /* form element visual styles */ 

 .contact_form input, 
 .contact_form textarea 
 { border: 1px solid #aaa; 
 	box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset; 
 	border-radius: 2px; 
 	padding-right: 30px; 
 	-moz-transition: padding .25s; 
 	-webkit-transition: padding .25s; 
 	-o-transition: padding .25s; 
 	transition: padding .25s; 
 	} 

 	.contact_form input:focus, 
 	.contact_form textarea:focus 
 	{ background: #fff; 
 		border: 1px solid #555; 
 		box-shadow: 0 0 3px #aaa; 
 		padding-right: 70px; 
 		} 
 		/* === HTML5 validation styles === */ 

 .contact_form input:required, 
 .contact_form textarea:required 
 	{ background: #fff url(images/red_asterisk.png) no-repeat 98% center; 
 	} 
 .contact_form input:required:valid, 
 .contact_form textarea:required:valid 
 	{ background: #fff url(images/valid.png) no-repeat 98% center; 
 		box-shadow: 0 0 5px #5cd053; 
 		border-color: #28921f; 
 		} 
 .contact_form input:focus:invalid, 
 .contact_form textarea:focus:invalid 
 	{ background: #fff url(images/invalid.png) no-repeat 98% center; 
 		box-shadow: 0 0 5px #d45252; 
 		border-color: #b03535; 
 		}

  /* === Form hints === */ 
  .form_hint 
  { background: #d45252; 
  	border-radius: 3px 3px 3px 3px; 
  	color: white; 
  	margin-left: 8px; 
  	padding: 1px 6px; 
  	z-index: 999; 
  	/* hints stay above all other elements */ 
  	position: absolute; /* allows proper formatting if hint is two lines */ 
  	display: none; 
  	} 

.form_hint::before 
{ content: "\25C0"; 
color: #d45252; 
position: absolute; 
top: 1px; left: -6px; 
} 

.contact_form input:focus + 
.form_hint 
{ display: inline; 
	} 
.contact_form input:required:valid + 
.form_hint 
{ background: #28921f; 
	} 
.contact_form input:required:valid + .form_hint::before 
{ color: #28921f; 
	} 
	/* === Button Style === */ 
	button.submit 
{ background-color: #68b12f; 
	background: -webkit-gradient(linear, 
		left top, left bottom, from(#68b12f), to(#50911e)); 
	background: -webkit-linear-gradient(top, #68b12f, #50911e); 
	background: -moz-linear-gradient(top, #68b12f, #50911e); 
	background: -ms-linear-gradient(top, #68b12f, #50911e); 
	background: -o-linear-gradient(top, #68b12f, #50911e); 
	background: linear-gradient(top, #68b12f, #50911e); 
	border: 1px solid #509111; 
	border-bottom: 1px solid #5b992b; 
	border-radius: 3px; -webkit-border-radius: 3px; 
	-moz-border-radius: 3px; -ms-border-radius: 3px; 
	-o-border-radius: 3px; box-shadow: inset 0 1px 0 0 #9fd574; 
	-webkit-box-shadow: 0 1px 0 0 #9fd574 inset; 
	-moz-box-shadow: 0 1px 0 0 #9fd574 inset; 
	-ms-box-shadow: 0 1px 0 0 #9fd574 inset; 
	-o-box-shadow: 0 1px 0 0 #9fd574 inset; 
	color: white; 
	font-weight: bold; 
	padding: 6px 20px; 
	text-align: center; 
	text-shadow: 0 -1px 0 #396715; 
	} 

	button.submit:hover 
	{ opacity: .85; 
		cursor: pointer; 
		}

 button.submit:active 
 { border: 1px solid #20911e; 
 	box-shadow: 0 0 10px 5px #356b0b inset; 
 	-webkit-box-shadow: 0 0 10px 5px #356b0b inset; 
 	-moz-box-shadow: 0 0 10px 5px #356b0b inset; 
 	-ms-box-shadow: 0 0 10px 5px #356b0b inset; 
 	-o-box-shadow: 0 0 10px 5px #356b0b inset; 
 	}
</style>
<div class="page-container">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Seccion'); ?></legend>
	<?php
		echo $this->Form->input('subject_id', array('class' => 'form-control', 'label' => 'Materia'));
		echo $this->Form->input('user_id', array('class' => 'form-control', 'label' => 'Profesor'));
		echo $this->Form->input('period_id', array('class' => 'form-control', 'label' => 'Periodo'));
		echo $this->Form->input('number', array('class' => 'form-control', 'label' => 'Numero de la Seccion'));
		echo $this->Form->input('quantity' , array('class' => 'form-control', 'label' => 'Cantidad de Alumnos')); ?>
		<br>
=======
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
>>>>>>> origin/Lee-Backend
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
<<<<<<< HEAD
	<br>
<?php echo $this->Form->end(array('label' => 'Registrar Seccion', 'class' =>'btn btn-success')); ?>
=======
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
>>>>>>> origin/Lee-Backend
