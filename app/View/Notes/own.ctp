<div class="page-container2">
  <?php  //debug($current_user); ?>
<?php if (($opt==1) || ($opt==2)): ?>

    <h1>Inscripcion</h1>
    <br>
    <div class="row" >
        <?php echo $this->Form->create('User', array('type' => 'GET')); ?>

        <div align='center'>
            <?php echo $this->Form->input('search', array('options' => $subjects,'label' => false,'div' => false ,'class' => 'form-control', 'autocomplet' => 'off', 'value' => $search)); ?>
        </div>
    <br> 
        <div class="col-sm-14" >
           <?php echo $this->Form->button('Buscar', array('div' => false,'style'=>'align=center;' ,'class' => 'btn btn-primary'));?>
           <br> <br>
            <?php echo $this->Html->link('Regresar', array('controller' => 'users','action' => 'mainmenu'), array('class' => 'btn btn-warning') ); ?>
          
        </div>

        <?php echo $this->Form->end(); ?>

    </div>
    <br>

    <?php endif; ?>

    <?php if ($opt==2): ?>
        <?php
         
         $hora = array('1'=>'7:00-7:45','7:45-8:30','8:30-9:15','9:15-10:00','10:00-10:45','10:45-11:30','1:00-1:45','1:45-2:30','2:30-3:15','3:15-4:00','4:00-4:45','4:45-5:30'); 
         $h=count($hora);

          $dias = array('1' =>'Lunes','Martes','Miercoles','Jueves',
                'Viernes','A Distancia'); 
          $d=count($dias);
          $aula = array('1' => 'Aula 1', 'Aula 2' , 'Aula 3', 'Aula 4' , 'Aula 5', 'Aula 6' , 'Aula 7', 'Aula 8' , 'Aula 9', 'Aula 10' , 'Aula 11', 'Aula 12' , 'Aula 13', 'Aula 14' , 'Aula 15', 'Aula 16' , 'Lab 1', 'Lab 2' , 'Lab 3', 'Lab 4','Lab 5','Opsu'); 
          $a=count($aula);

         
        if (!empty($notes)) {
           $stop=1;
        }
         

         ?>

         <?php if (!isset($stop)){  


          ?>


        <div class="row" >

             
     
            <?php foreach($section as $sec): 



 ?>


              <?php if ($sec['Section']['quantity']!=0): ?>

                <div class="col-sm-2" align=center>
          <div class="cazul">


                  <?php 

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
                    Horario: <br>
                    <?php foreach ($ss as $ssa): ?>
                      <?php if ($ssa['SectionsSchedule']['section_id']==$sec['Section']['id']): ?>
                         <?php foreach ($schedules as $sch): ?>
                           <?php if ($ssa['SectionsSchedule']['schedule_id']==$sch['Schedule']['id']): ?>
                              
                            <br>
                               <?php for ($i=1; $i < $d; $i++) { 
                                if ($i==$sch['Schedule']['start']) {
                                  echo $dias[$i];
                                }
                              } ?>

                               /
                              <?php for ($i=1; $i < $a; $i++) { 
                                if ($i==$sch['Schedule']['start']) {
                                  echo $aula[$i];
                                }
                              } ?>
                             
                              

                              <br>

                               Entrada : <?php for ($i=1; $i < $h; $i++) { 
                                if ($i==$sch['Schedule']['start']) {
                                  echo $hora[$i];
                                }
                              } ?>
                              <br>
                             
                                Salida : <?php for ($i=1; $i < $h; $i++) { 
                                if ($i==$sch['Schedule']['end']) {
                                  echo $hora[$i];
                                }
                              } ?>
                             


                           <?php endif ?>
                         <?php endforeach ?>               
                      <?php endif ?>
                    <?php endforeach ?>
                    
                    



                    <br>

                    <?php echo $this->Html->link('Inscribir', array('action' => 'own', $id ,$sec['Section']['id']), array('class' => 'btn btn-warning') ); ?>








</div>
                    <br><br>

            </div>
            <?php endif ?>
            <?php endforeach; ?>
        </div>
         <?php }else{   


           foreach ($users as $r => $p) {
                   if ($r==$notes['Section']['user_id']) {
                     $prof=$p;
                   }
                 }

          ?>

    <?php //debug($notes); ?>
         <div class="row" >
            
                <div class="col-sm-2" align=center>
          <div class="cverde">




                    Ya estas Inscrito:
                    Seccion: <?php  echo $notes['Section']['number'] ?> 
                    <br>
                    Con el Profesor: <?php echo $p; ?>
                    <br>
                    Cupos: <?php  echo $notes['Section']['quantity'] ?>
                    <br>
                      Horario: <br>
                    <?php foreach ($ss as $ssa): ?>
                      <?php if ($ssa['SectionsSchedule']['section_id']==$notes['Section']['id']): ?>
                         <?php foreach ($schedules as $sch): ?>
                           <?php if ($ssa['SectionsSchedule']['schedule_id']==$sch['Schedule']['id']): ?>
                              
                            <br>
                               <?php for ($i=1; $i < $d; $i++) { 
                                if ($i==$sch['Schedule']['start']) {
                                  echo $dias[$i];
                                }
                              } ?>

                               /
                              <?php for ($i=1; $i < $a; $i++) { 
                                if ($i==$sch['Schedule']['start']) {
                                  echo $aula[$i];
                                }
                              } ?>
                             
                              

                              <br>

                               Entrada : <?php for ($i=1; $i < $h; $i++) { 
                                if ($i==$sch['Schedule']['start']) {
                                  echo $hora[$i];
                                }
                              } ?>
                              <br>
                             
                                Salida : <?php for ($i=1; $i < $h; $i++) { 
                                if ($i==$sch['Schedule']['end']) {
                                  echo $hora[$i];
                                }
                              } ?>
                             


                           <?php endif ?>
                         <?php endforeach ?>               
                      <?php endif ?>
                    <?php endforeach ?>
                     <?php echo $this->Html->link('Quitar Inscripcion', array('action' => 'owndelete', $id ,$notes['Section']['id'],$notes['Note']['id']), array('class' => 'btn btn-danger') ); ?>

            </div>
                    <br><br>

            </div>
      
        </div>



            <?php } ?>

        <?php endif; ?>

   </div>


