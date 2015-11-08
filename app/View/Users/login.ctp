 <div class="list-group">
<?php echo $this->Form->create('User', array('class'=>'form-horizontal white')); ?>
   <fieldset>
    <div class="list-group">

        <legend><center><h3><?php echo __('Login'); ?></legend></h3></center></div> <div class="list-group">
    <?php
        echo "<div class=''>".$this->Form->input('email', array('label'=>'Correo', 'class'=>'form-control input-sm checkbox-inline'))."</div>";
        echo "<div class=''>".$this->Form->input('password', array('label'=>'password', 'class'=>'form-control input-sm checkbox-inline'))."</div>";
        echo $this->Html->link(__('Registrarse'), array('action' => 'add'));
    ?>

    </fieldset>
<?php echo $this->Form->Submit('Ingresar', array('class'=>'btn btn-lg btn-link')); ?>
</div></div></div> 