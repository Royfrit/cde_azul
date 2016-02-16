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
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
$(function () {
$("#UserBirthday").datepicker();
});
</script>
<div class="page-container">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('ced', array('class' => 'form-control', 'label' => 'Cedula'));
		echo $this->Form->input('fullname' , array('class' => 'form-control', 'label' => 'Nombre Completo'));
		echo $this->Form->input('birthday' , array('class' => 'form-control', 'label' => 'Fecha de Nacimiento', 'type'=>'text'));
		echo $this->Form->input('address',  array('class' => 'form-control', 'label' => 'Direccion','style' => array('style'=>' resize:none;')));
	//	echo $this->Form->input('email');
		//echo $this->Form->input('password');
			echo ''.$this->Form->input('role', array('label'=>'Rol','class'=>'form-control', 'type'=>'select', 'options'=> array('Adminstrador'=>'Administrador', 'Profesor'=>'Profesor', 'Estudiante'=>'Estudiante')))."";
		//echo $this->Form->input('status');
		echo $this->Form->input('sede_id' , array('class' => 'form-control', 'label' => 'Sede'));
		//echo $this->Form->input('UserTlf');
		echo $this->Form->input('cohort', array('class' => 'form-control', 'label' => 'Cohorte'));
		echo " Nota * Campo Corte, No necesario para Profesores o Administradores";
	?>
	</fieldset>

<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>

=======
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('ced');
		echo $this->Form->input('fullname');
		echo $this->Form->input('birthday');
		echo $this->Form->input('address');
	//	echo $this->Form->input('email');
		//echo $this->Form->input('password');
			echo '<div class="input-group col-xs-2">'.$this->Form->input('role', array('label'=>'Rol','class'=>'form-control', 'type'=>'select', 'options'=> array('Adminstrador'=>'Administrador', 'Profesor'=>'Profesor', 'Estudiante'=>'Estudiante')))."</div>";
		//echo $this->Form->input('status');
		echo $this->Form->input('sede_id');
		//echo $this->Form->input('UserTlf');
		echo $this->Form->input('cohort');
		echo " Nota * Campo Corte, No necesario para Profesores o Administradores";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Tlves'), array('controller' => 'user_tlves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Tlf'), array('controller' => 'user_tlves', 'action' => 'add')); ?> </li>
	</ul>
>>>>>>> origin/Lee-Backend
</div>
