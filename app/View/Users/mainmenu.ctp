<!DOCTYPE html>
<?php


if ($current_user['role']=='Estudiante') {

	foreach ($students as $stu) {

	if ($current_user['id'] == $stu['Student']['user_id']) {
			$current_Student_id = $stu['Student']['id'];
	}


}
}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>

        <div class="encabezado">
            <div class="col-md-12">
                <div class="container">

      
    <h1>Ingeniería de Sistemas</h1>
                  <div align=center> Bienvenido <?php echo $current_user['fullname'] ?> </div>
                </div>
            </div>

        </div>
    </head>
    <?php if ($current_user['role']=='Estudiante'): ?>
    <body>
        <div class="page-container2" align="center">
            <br>
            <br>
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="media">
                                <div class="icono">
                                    <div class="media-left ">



                                  <?php echo $this->Html->link('Acceder', array('controller' => 'notes', 'action' => 'own',$current_Student_id), array('class' => 'btn btn-info') ); ?>



                                    </div>

                                        <h3 class="media-heading">Inscripcion en Linea</h3>
                                        <p>Inscripcion en las Secciones</p>
                                        <p>

                                        </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="media">
                                <div class="icono">

                                    <div class="media-left ">



                                  <?php echo $this->Html->link('Acceder', array( 'action' => 'pswchange',$current_user['id'] ), array('class' => 'btn btn-info') ); ?>



                                    </div>

                                        <h3 class="media-heading">Editar Credenciales</h3>
                                        <p>Editar los Credenciales Basicos.</p>
                                        <p>

                                        </p>

                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">

                        <div class="col-md-4 ">
                            <div class="media">
                                <div class="icono">
                                    <div class="media-left ">




                                        <?php echo $this->Html->link(
    $this->Html->image('pdfdoc.png', array('alt' => 'Imprimir', 'border' => '1')),
    array('controller' => 'notes', 'action' => 'pdf_estudio','ext' => 'pdf',$current_Student_id,'Constancia de Estudio('.$current_user['ced'].')'),array('class'=>'btn btn-primary',null, 'escape' => false,'target' => '_blank')
   ); ?>

                                    </div>

                                        <h3 class="media-heading">Constancia de Estudio</h3>
                                        <p>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="media">
                                    <div class="icono">
                                        <div class="media-left ">


                                       <?php echo $this->Html->link(
    $this->Html->image('pdfdoc.png', array('alt' => 'Imprimir', 'border' => '1')),
    array('controller' => 'notes', 'action' => 'pdf_inscripcion','ext' => 'pdf',$current_Student_id,'Constancia de Inscripcion('.$current_user['ced'].')'),array('class'=>'btn btn-primary',null, 'escape' => false,'target' => '_blank')
   ); ?>
                                        </div>

                                            <h3 class="media-heading">Constancia de Inscripcion</h3>
                                            <p></p>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="icono">
                                        <div class="media-left ">


                                             <?php echo $this->Html->link(
    $this->Html->image('pdfdoc.png', array('alt' => 'Imprimir', 'border' => '1')),
    array('controller' => 'notes', 'action' => 'pdf_ownnotes','ext' => 'pdf',$current_Student_id,'Reporte de Notas('.$current_user['ced'].')'),array('class'=>'btn btn-primary',null, 'escape' => false,'target' => '_blank')
   ); ?>
                                        </div>

                                            <h3 class="media-heading">Reporte de Notas</h3>
                                            <p></p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="media">
                                    <div class="icono">
                                        <div class="media-left ">


                                            <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-info') ); ?>

                                        </div>

                                            <p>Si Desea Salir del Sistema</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </body>
         <?php endif ?>
<!-- //////////////////////////////////// Profesor Main Menu //////////////////////////////////////////////////-->
        <?php if ($current_user['role']=='Profesor'): ?>

    <body>
        <div class="page-container2" align="center">
            <br>
            <br>
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="media">
                                <div class="icono">
                                    <div class="media-left ">



                                  <?php echo $this->Html->link('Acceder', array('controller' => 'sections', 'action' => 'ownsec',$current_user['id']), array('class' => 'btn btn-info') ); ?>



                                    </div>

                                        <h3 class="media-heading">Mis Secciones</h3>
                                        <p>Secciones por Materia</p>
                                        <p>

                                        </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="media">
                                <div class="icono">

                                    <div class="media-left ">



                                  <?php echo $this->Html->link('Acceder', array( 'action' => 'pswchange',$current_user['id'] ), array('class' => 'btn btn-info') ); ?>



                                    </div>

                                        <h3 class="media-heading">Editar Credeciales</h3>
                                        <p>Editar los Credenciales Basicos.</p>
                                        <p>

                                        </p>

                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="media">
                                    <div class="icono">
                                        <div class="media-left ">


                                            <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-info') ); ?>

                                        </div>

                                            <p>Si Desea Salir del Sistema</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </body>
         <?php endif ?>

<!-- //////////////////////////////////// Profesor Main Menu //////////////////////////////////////////////////-->
         <?php if ($current_user['role']=='Adminstrador'): ?>
         <body>
        <div class="page-container2" align="center">
            <br>
            <br>
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 ">
                            <div class="media">

                                <div class="icono">
                                    <div class='cazul'>

                                        <h3 class="media-heading">Materias</h3>
                                        <p>Edicion, Creacion de Materias</p>
                                        <p>
                                    <?php echo $this->Html->link('Lista', array('controller' => 'subjects', 'action' => 'index'), array('class' => 'btn btn-info') ); ?>
                                    <br> <br>
                                    <?php echo $this->Html->link('Agregar Materia', array('controller' => 'subjects', 'action' => 'add'), array('class' => 'btn btn-warning') ); ?>
                                            <br>


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 ">
                            <div class="media">
                                <div class="icono">
                                      <div class='cazul'>

                                 <h3 class="media-heading">Secciones</h3>
                                        <p>Crear Secciones y mas.</p>
                                        <p>
                                    <?php echo $this->Html->link('Lista', array('controller' => 'sections', 'action' => 'index'), array('class' => 'btn btn-info') ); ?>
                                    <br> <br>
                                    <?php echo $this->Html->link('Agregar Seccion', array('controller' => 'sections', 'action' => 'add'), array('class' => 'btn btn-warning') ); ?>
                                            <br>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 ">
                            <div class="media">
                                <div class="icono">
                                      <div class='cazul'>


                                        <h3 class="media-heading">Nuevo Usuario</h3>
                                        Crear los Nuevos Ingresos, como asi los Profesores y Administradores.</p>
                                        <p>
                                        <?php echo $this->Html->link('Agregar', array('action' => 'add'), array('class' => 'btn btn-warning')); ?>
                                            <br>
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="media">
                                <div class="icono">
                                      <div class='cazul'>
                                        <h3 class="media-heading">Casos Especiales</h3>
                                        Casos Especiales para un Administrador</p>
                                        <p>
                                        <?php echo $this->Html->link('Agregar Periodos', array('controller' =>'periods' ,'action' => 'add'), array('class' => 'btn btn-warning')); ?>
                                            <br>
                                        <p>

                                            <p>
                                        <?php echo $this->Html->link('Acta Especial Notas', array('controller' =>'notes' ,'action' => 'admincharge'), array('class' => 'btn btn-warning')); ?>
                                            <br>
                                        <p>


                                        </p>


                                      </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">

                        <div class="col-md-4 ">
                            <div class="media">
                                <div class="icono">
                                     <div class='cazul'>



                                  <?php echo $this->Html->link('Acceder', array( 'action' => 'pswchange',$current_user['id'] ), array('class' => 'btn btn-info') ); ?>


                                        <h3 class="media-heading">Editar Credeciales</h3>
                                        <p>Editar los Credenciales Basicos.</p>
                                        <p>

                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                                <div class="media">
                                    <div class="icono">
                                        <div class='cazul'>


                                            <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-info') ); ?>



                                            <p>Si Desea Salir del Sistema</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
       <?php endif ?>
    </html>
