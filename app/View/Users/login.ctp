<div class="account-wall"> 
<?php echo $this->Form->create('User', array('class'=>'form-signin')); ?>
   <fieldset>

        <legend><center><h3 class="text-center login-title"><?php echo __('Área de Ingeniería de Sistemas'); ?></legend></h3></center>
    <?php
        echo "<div class=''>".$this->Form->input('email', array('label'=>'  ', 'placeholder'=>'Correo', 'class'=>'form-control white'))."</div>";
        echo "<div class=''>".$this->Form->input('password', array('label'=>'  ', 'placeholder'=>'Contraseña', 'class'=>'form-control'))."</div>";?>
        

    </fieldset>
<?php echo $this->Form->Submit('Ingresar', array('class'=>'btn btn-lg btn-primary btn-block')).'</br>';

echo $this->Html->link(__('Registrarse'), array('action' => 'add'), array('class'=>'btn btn-sm btn-danger btn-block'));
     ?>
</div>