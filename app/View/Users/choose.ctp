<?php if(($ajax != 1) && empty($users)): ?>


    <h1 style='margin-left:360px;'>Ingrese su Cedula</h1>
    <br>
    <div class="row" >
        <?php echo $this->Form->create('User', array('type' => 'GET')); ?>

        <div class="col-sm-4" align='center'>
            <?php echo $this->Form->input('search', array('label' => false,'div' => false,'style'=>'margin-left:320px;' ,'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>
        </div>
    <?php //debug($search) ?>
<br> <br> <br>
        <div class="col-sm-14" >
        <p style='margin-left:420px;'>
                <?php echo $this->Html->link('Regresar', array('action' => 'index'), array('class' => 'btn btn-warning') ); ?>
           <?php echo $this->Form->button('Buscar', array('div' => false,'style'=>'align=center;' ,'class' => 'btn btn-primary'));?>
          </p>
        </div>



        <?php echo $this->Form->end(); ?>


    </div>

    <br><br>
<?php endif; ?>


<?php if(!empty($search)): ?>
    <?php if(!empty($users)): ?>

      <?php  //debug($users[0]['User']); ?>

      <?php if(empty($users[0]['User']['email'])){ ?>
        <h3> Se encontro la Cedula</h3><br>
          Rellene el Registro
          <br> <br>

                <div class="users form">
                <?php echo $this->Form->create('User'); ?>
                	<fieldset>
                		<legend><?php echo __('Datos del Usuario'); ?></legend>
                	<?php
                  	echo $this->Form->input('id');
                		echo $this->Form->input('email');
                		echo $this->Form->input('password');

                	?>
                	</fieldset>
                <?php echo $this->Form->end('Guardar'); ?>


                </div>

              <br><br><br>


      <?php }else{ ?>

          <h3> Ya Existe Cuenta Asociada a este Registro </h3>
          <?php echo $this->Html->link('Regresar', array('action' => 'login'), array('class' => 'btn btn-warning') ); ?>
        <?php } ?>







    <?php else: ?>

    <h3>  No se Encontro la Cedula o No Existe el Registro, Porfavor Comunicarse con el Administrador </h3>

    <?php endif; ?>

<?php endif; ?>
</div>
</div>
