<div class="transparente">

<?php  $c=0;?>

<?php foreach ($users as $user): ?>
  <?php if ($c==0): ?>
        <?php  $options = array($user['User']['id'] => $user['User']['fullname'] ); $c++; ?>

  <?php endif; ?>

  <?php if ($c!=0): ?>

    <?php $options[$user['User']['id']] = $user['User']['fullname']; ?>

  <?php endif; ?>


<?php endforeach; ?>


	<?php echo $this->Form->create('Seccion'); ?>
				<fieldset>
				<div align=center><legend><?php echo __('Asignando Estudiantes'); ?></legend></div>
				<?php


	        echo $this->Form->input('id',array('type' => 'hidden','value'=> $id));
					echo $this->Form->input('Students', array('class' => 'form-control','multiple' => true, 'options' =>$options, 'label' => 'Estudiantes'));


				?>
				</fieldset>
				<p>
				<div align=center> <a class='btn btn-warning' href="javascript:history.back(-1);" title="Regresar">Regresar</a>
					<p>

				<div align=center> <?php echo $this->Form->end(array('label' => 'Asignar Estudiantes', 'class' =>'btn btn-success')); ?> </div>
				</p>



</div>
