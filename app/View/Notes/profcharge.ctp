<style>

table {    
 font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    
    margin: 0px;     
    width: 480px; 
    text-align: left;    
    border-collapse: collapse; }

</style>
<div class='page-container4'>


 <h1>Seccion <?php echo $sections['Section']['number']; ?>  </h1>
 <br>
 <strong>Materia: <?php  echo $sections['Subject']['name']; ?> </strong>
 <br> <br>
 <?php 

 $options = array('' =>null,'1' => '1','2','3','4','5','6','7','8','9','10');

 ?>
 <table class="table" align='center' align='center' BORDER="4" BORDERCOLOR="000000">
<thead>
	<tr>
		<th><?php echo ('Cedula:'); ?></th>
		<th><?php echo ('Nombre del Estudiante:'); ?></th>
		<th><?php echo ('Nota:'); ?> </th>
		<th> Accion</th>
	</tr>
</thead>

<tbody>	
	<?php foreach ($notes as $note): ?>
		<?php foreach ($students as $stu): ?>
			<?php if ($note['Note']['student_id']==$stu['Student']['id']): ?>
			<tr>
				<td align=center> <?php echo $stu['User']['ced'] ?></td>
				<td align=center> <?php echo $stu['User']['fullname'] ?></td>
				<td align=center> <?php 
			 echo $this->Form->create('Note', array('type' => 'GET'));
				if (empty($note['Note']['note'])) {
					echo $this->Form->input('Update', array('label' => false,'div' => false,'class' => 'form-control', 'autocomplet' => 'off','placeholder' => $note['Note']['note'] ,'options' => $options,'value' => $Update));
					echo $this->Form->input('student_id', array('type' => 'hidden','value' =>$note['Note']['student_id'] ));
					echo $this->Form->input('id', array('type' => 'hidden','value' =>$note['Note']['id'] ));
				}else{
					echo $this->Form->input('Update', array('label' => false,'div' => false,'class' => 'form-control', 'autocomplet' => 'off','placeholder' => $note['Note']['note'] ,'disabled' => 'disabled','value' => $Update));
				}
				 ?></td>
				<td align=center> 
					<?php 
				if (empty($note['Note']['note'])) {
				
				 echo $this->Form->button('Cargar Nota', array('div' => false,'style'=>'align=center;' ,'class' => 'btn btn-primary'));


				}else{
					echo '¡Ya se Cargo esta Nota!';
				}

					 ?>
				</td>
			</tr>
			  <?php echo $this->Form->end(); ?>
        
				<?php endif ?>
		<?php endforeach ?>
	<?php endforeach ?>




</tbody>


 </table>
 *Para Evitar Errores, Carge las Materias una a la vez. Gracias.
 <div align=center> <a class='btn btn-warning' href="javascript:history.back(-1);" title="Regresar">Regresar</a> 
  
 </div>

</div>