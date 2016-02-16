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
		

	<?php 

	$uctotal=0;
	$cou=count($users['Note']);
	$tot=0;
	$ucA=0;
	foreach ($student['Section'] as $section) {
			foreach ($subjects as $sub) {
				//debug($section);
				if ($sub['Subject']['id'] == $section['subject_id']) {
					$uctotal+=$sub['Subject']['uc'];
					foreach ($users['Note'] as $notes) {
						if ($section['id']==$notes['section_id']) {
							if (!empty($notes['note'])) {
								$tot+=$notes['note'];
								if ($notes['note']>=6) {
									$ucA+=$sub['Subject']['uc'];
								}
							}
							

						}
						
					}
				}
			}
	}

	$prom=(float)($tot/$cou);


	
	 ?>
		<br>
		<br>
		<br>
		<br>

		<div align="center"><strong>CONSTANCIA DE CALIFICACIONES</strong></div>

		<br>

		C.I.:<strong> <?php echo $users['User']['ced']; ?> </strong> - <strong> <?php echo $users['User']['fullname']; ?> </strong> 
		<br>
 		Carrera: (<?php echo $sede['Sede']['code']; ?>) Ingenieria en Informatica - Ingenieria de Sistemas (<?php echo $sede['Sede']['name']; ?>)	
 		<br>
		Cohorte: <?php  echo $users['Student']['cohort']; ?>
		<br>
		Estado: <?php   

			if ($users['User']['status']==true) {
				echo "ACTIVO";
			}else{
				echo 'INACTIVO';
			}


		 ?>
		<br>
		<br> 
		<table class="table" align='center' align='center' BORDER="4" BORDERCOLOR="000000">
	<thead>
	<tr>

			<th><strong><?php echo ('COD.Materia'); ?></th>
			<th><strong><?php echo ('Nombre Materia'); ?></th>
			<th><strong><?php echo ('U.C'); ?></th>
			<th><strong><?php echo ('Nota'); ?></th>
			
			

		</tr>
		</thead>
		<tbody>
			<?php foreach ($student['Section'] as $section):  ?>
				<?php foreach ($subjects as $sub): ?>
					<?php if ($sub['Subject']['id'] == $section['subject_id']): ?>
						

					<tr>

					<td> <?php echo $sub['Subject']['cod_subject']; ?> </td>
					<td> <?php echo $sub['Subject']['name']; ?> </td>
					<td align=center> <?php echo $sub['Subject']['uc']; ?></td>
					<td align=center> <?php 

					foreach ($users['Note'] as $notes) {
						if ($section['id']==$notes['section_id']) {
							
							if (!empty($notes['note'])) {
								echo $notes['note'];
							}else{
								echo 'Cursando';
							}

							
						}
						
					}
									
					?></td>
					


					</tr>
					
					<?php endif ?>
			

					<?php endforeach ?>
			<?php endforeach; ?>

			<tr>
					<td align=right; colspan='2';>  <strong>Totales:</strong></td>
					<td align=center> <strong> U.A | U.C</td>
					<td align=center> <strong> I.A </td>

				</tr>

				<tr>
					<td align=right; colspan='2';> </td>
					<td align=center> <?php echo $ucA; ?> | <?php echo $uctotal; ?></td>
					<td align=center> <?php echo (float)$prom ?></td>

				</tr>



		</tbody>
		
		</table>
		<br> <br>
<div align='center'>
		Escala de Medicion: <strong> 1 - 10</strong> Califacion minima aprobatoria:  <strong> 6</strong> <br>
							 Califcaciones por equivalencia: <strong>  EQ AP </strong>

		
</div>	
	<br> 
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
<br> <br> 

		
</div>	

</div>

<br> 
<br>
<div align='center'>
	 <font size="1"> </font>
	Este Documento sin el sello y la Firma de la Oficina Sectorial de Control de Estudios, no tiene validez.
	
</body>


</html>