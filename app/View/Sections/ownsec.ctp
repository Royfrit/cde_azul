<div class='page-container4'>
<div class='row'> 

 <h1>Mis Secciones</h1>
 <br>

 <?php 

 $hora = array('1'=>'7:00-7:45','7:45-8:30','8:30-9:15','9:15-10:00','10:00-10:45','10:45-11:30','1:00-1:45','1:45-2:30','2:30-3:15','3:15-4:00','4:00-4:45','4:45-5:30'); 
         $h=count($hora);

          $dias = array('1' =>'Lunes','Martes','Miercoles','Jueves',
                'Viernes','A Distancia'); 
          $d=count($dias);
          $aula = array('1' => 'Aula 1', 'Aula 2' , 'Aula 3', 'Aula 4' , 'Aula 5', 'Aula 6' , 'Aula 7', 'Aula 8' , 'Aula 9', 'Aula 10' , 'Aula 11', 'Aula 12' , 'Aula 13', 'Aula 14' , 'Aula 15', 'Aula 16' , 'Lab 1', 'Lab 2' , 'Lab 3', 'Lab 4','Lab 5','Opsu'); 
          $a=count($aula);

 ?>
      <div class="container">
                   <div class="col-md-12">
                    <div class='row'>
<?php foreach ($sections as $sec): ?>
            
            <div class="col-md-4">
                    <div class="cazul">
                            <div class="media">
                                <div class="icono">
                                    <div align="center">
                                       Materia: <?php echo $sec['Subject']['name']; ?> <br>
                                       Seccion: <?php echo $sec['Section']['number']; ?> <br>
                                       Horario: <br>


                                      <?php foreach ($sec['Schedule'] as $sch): ?>
                                          
                                        <br>
                               <?php for ($i=1; $i < $d; $i++) { 
                                if ($i==$sch['day']) {
                                  echo $dias[$i];
                                }
                              } ?>

                               /

                              <?php for ($i=1; $i < $a; $i++) { 
                                if ($i==$sch['classroom']) {
                                  echo $aula[$i];
                                }
                              } ?>



                              <br>

                               Entrada : <?php for ($i=1; $i < $h; $i++) { 
                                if ($i==$sch['start']) {
                                  echo $hora[$i];
                                }
                              } ?>
                              <br>
                             
                                Salida : <?php for ($i=1; $i < $h; $i++) { 
                                if ($i==$sch['end']) {
                                  echo $hora[$i];
                                }
                              } ?>
                                      <?php endforeach ?>
                                      <br>
                                      
                                        <?php echo $this->Html->link('Notas', array('controller' => 'notes' , 'action' => 'profcharge',$sec['Section']['id'] ), array('class' => 'btn btn-info') ); ?>
                                        <br>
                                      <?php echo $this->Html->link(
               $this->Html->image('pdfdoc.png', array('alt' => 'Lista de Estudiantes', 'border' => '1')),
                 array('action' => 'pdf_listas','ext' => 'pdf',$current_user['id'],$sec['Section']['id'],''.$sec['Subject']['name'].' - Seccion '.$sec['Section']['number'].''),array('class'=>'btn btn-success',null, 'escape' => false,'target' => '_blank')
                 ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <br>
<?php endforeach ?>

              </div>
          </div>
      </div>
      <br>
      <div align=center> <a class='btn btn-warning' href="javascript:history.back(-1);" title="Regresar">Regresar</a> 
    <br> <br>
      <?php // debug($sec); ?>

</div>
</div>