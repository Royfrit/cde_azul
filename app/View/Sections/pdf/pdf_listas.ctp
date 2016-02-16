<html>


<head>
<meta charset="utf-8">
<?php $meses = array('1'=> 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'); ?>
<style>




p    {
	
	margin-left:3px;
}

#lee{
	
	padding-left:20%;
	padding-right: 30%;
}

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 10px;     width: 480px; text-align: left;    border-collapse: collapse; }
caption { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 	text-align:center; 
 }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;   
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff;  }

td {    padding: 8px;       border-bottom: 1px solid #fff;
        border-top: 1px solid transparent; }
h3 {
	font-size: 15px;     font-weight: normal;      text-align: justify;     

 }

 tr {
 	border:1 ; border-color: #000000;
 }

div.container {
    margin-left: 50px;
}
</style> 
</head>
<body>

<div class="container" >
 <img src="C:\logo-unerg.png"; width="25%"; height="100"; margin-left='10px'; margin-top='10px'; />
 <div align='center'>
		Republica Bolivariana de Venezuela <br>
		Universidad Nacional Experimental Romulo Gallegos <br>
		Direccion de Admision, Control y Evaluacion
</div>	
	

		<br>
		<br>
		<br>

		<div align="center"><strong>Lista de Estudiantes</strong></div>

		<br>
		<br>
		<br>

		Profesor: <?php echo $users['User']['fullname']; ?> <br>
		Materia: <?php echo $sections['Subject']['name']; ?> <br>
		Seccion: <?php  echo $sections['Section']['number']; ?>

		<br>
		<br> 


		<div align="center"><strong>Estudiantes Inscritos</strong></div>

		<br> <br>
		<table class="table" align='center' align='center' BORDER="4" BORDERCOLOR="000000">
			<thead>
				<tr>

			<th><?php echo ('Cedula'); ?></th>
			<th><?php echo ('Nombre del Estudiante'); ?></th>
			<th><?php echo ('Email'); ?></th>

				</tr>
			</thead>

			<tbody>
					
							<?php foreach ($rwar as $note): ?>
									<?php foreach ($students as $use): ?>
										<?php if ($note['Note']['student_id'] == $use['Student']['id']): ?>
											<tr>
												<td align=center> <?php echo $use['User']['ced'];?></td>
												<td align=center> <?php echo $use['User']['fullname'];?></td>
												<td align=center> <?php echo $use['User']['email'];?></td>
											</tr>
										<?php endif; ?>
									<?php endforeach; ?>
							<?php endforeach ?>
			</tbody>	

		</table>	

	<br> <br> <br>
 <div align='center'>
		Este Documento fue Generado a los <strong> <?php echo date('j');?> </strong>  Dias del Mes <strong> <?php 
		
			for ($i=1; $i < 13; $i++) { 
				if ((date('n')) == $i ) {
					echo $meses[$i];
				}	
			}
		 ?>

		 </strong> del A&ntilde;o <strong><?php echo date('o'); ?> </strong>

		
</div>	
<br> <br> <br> <br> <br> <br>

		
</div>	

</div>

<br> 
<br>

</body>


</html>