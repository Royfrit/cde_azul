<?php if (($opt==1) || ($opt==2)): ?>

    <h1 style='margin-left:360px;'>Busque la Materia</h1>
    <br>
    <div class="row" >
        <?php echo $this->Form->create('User', array('type' => 'GET')); ?>

        <div class="col-sm-4" align='center'>
            <?php echo $this->Form->input('search', array('options' => $subjects,'label' => false,'div' => false,'style'=>'margin-left:320px;' ,'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>
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

    <?php if ($opt==2): ?>
        <?php  //debug($schedules);?>
        <?php  //debug($section); ?>
        <?php


          //debug($schedules);
          //debug($section[0]['Section']['id']);


         ?>
        <div class="row" >
            <?php foreach($section as $sec): ?>

                <div class="col-sm-2" align=center>
<div class="cazul">


                  <?php //debug($sec);

                 foreach ($users as $r => $p) {
                   if ($r==$sec['Section']['user_id']) {
                     $prof=$p;
                   }
                 }


                  ?>

                    Seccion: <?php echo($sec['Section']['number']); ?>
                    <br>
                    Profesor: <?php echo ($prof); ?>
                    <br>
                    Cupos: <?php echo ($sec['Section']['quantity']); ?>
                    <br>

                    <?php echo $this->Html->link('Inscribir', array('action' => 'own', '1' ,$sec['Section']['id']), array('class' => 'btn btn-warning') ); ?>





</div>
                    <br><br>

            </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
