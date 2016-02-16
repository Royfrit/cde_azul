
<?php if(($ajax != 1) && empty($users)): ?>

<div class="page-container">

    
    <h1>Ingeniería de Sistemas</h1>
    <h1>Ingrese su Cedula</h1>
    <br>
    <div class="row" >
        <?php echo $this->Form->create('User', array('type' => 'GET')); ?>

        <div align='center'>
            <?php echo $this->Form->input('search', array('label' => false,'div' => false,'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>
        </div>
    <?php //debug($search) ?>
<br> 
      <?php echo $this->Form->button('Buscar', array('div' => false,'style'=>'align=center;' ,'class' => 'btn btn-primary'));?>
              

                  <?php echo $this->Html->link('Regresar', array('action' => 'index'), array('class' => 'btn btn-warning') ); ?>
           
         </div>
  </div>



        <?php echo $this->Form->end(); ?>


    </div>

    <br><br>
<?php endif; ?>


<?php if(!empty($search)): ?>
    <?php if(!empty($users)): ?>
    <div class="page-container3">


      <?php if(empty($users[0]['User']['email'])){ ?>
        <h1> Se encontro la Cedula</h1><br>
          Rellene el Registro
          <br> <br>

                <?php echo $this->Form->create('User'); ?>
                	<fieldset>
                		<legend><?php echo __('Datos del Usuario'); ?></legend>
                	<?php
                  	echo $this->Form->input('id');
                		echo $this->Form->input('email');
                		echo $this->Form->input('password');

                	?>
                  <br>
                	</fieldset>
                <?php echo $this->Form->end('Guardar'); ?>

              <br>


      <?php }else{ ?>

          <h1> Ya Existe Cuenta Asociada a este Registro </h1>

          <div align=center> <a class='btn btn-warning' href="javascript:history.back(-1);" title="Regresar">Regresar</a> 
        <?php } ?>


    <?php else: ?>

    <h3>  No se Encontro la Cedula o No Existe el Registro, Porfavor Comunicarse con el Administrador </h3>

    <?php endif; ?>

<?php endif; ?>

</div>
</div>