 <div class="list-group">
<?php echo $this->Form->create('Usuario', array('class'=>'form-horizontal white')); ?>
   <fieldset>
    <div class="list-group">

        <legend><center><h3><?php echo __('Login'); ?></legend></h3></center></div> <div class="list-group">
    <?php
        echo "<div class=''>".$this->Form->input('email', array('label'=>'Correo', 'class'=>'form-control input-sm checkbox-inline'))."</div>";
        echo "<div class=''>".$this->Form->input('password', array('label'=>'password', 'class'=>'form-control input-sm checkbox-inline'))."</div>";
    ?>
    </fieldset>
<?php echo $this->Form->Submit('Ingresar', array('class'=>'btn btn-lg btn-link')); ?>
</div></div></div> 