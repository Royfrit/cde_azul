<<<<<<< HEAD

         <h1>SISTEMA DE CONTROL DE ESTUDIO</h1>
    <h1>Ingeniería de Sistemas</h1>
<div class="page-container">
=======
<div class="account-wall">
>>>>>>> origin/Lee-Backend
<?php echo $this->Form->create('User', array('class'=>'form-signin')); ?>
     <h1>INGRESAR</h1>
   <fieldset>


    <?php
        echo "<div class=''>".$this->Form->input('email', array('label'=>'  ', 'placeholder'=>'Correo', 'class'=>'form-control white'))."</div>";
        echo "<div class=''>".$this->Form->input('password', array('label'=>'  ', 'placeholder'=>'Contraseña', 'class'=>'form-control'))."</div>";?>


    </fieldset>
<?php echo $this->Form->Submit('Ingresar', array('class'=>'btn btn-lg btn-primary btn-block')).'</br>';

echo $this->Html->link(__('¿Eres Nuevo? , Haz Click Aqui para Registrarte'), array('action' => 'choose'), array('class'=>'btn btn-sm btn-danger btn-block'));
     ?>
</div>
