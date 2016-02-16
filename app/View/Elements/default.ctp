<?php  //echo $this->html->link('Salir', array('controller' => 'users', 'action' => 'logout')); ?>
<br> <br>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
<<<<<<< HEAD
        <?php  echo $this->Html->link('Inicio', array('controller' => 'users', 'action' => 'mainmenu'), array('class' => 'navbar-brand')) ?>
=======
        <?php  echo $this->Html->link('Inicio', array('controller' => 'users', 'action' => 'index'), array('class' => 'navbar-brand')) ?>
>>>>>>> origin/Lee-Backend
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')); ?>
            </li>
          </ul>


        </ul>
      </div><!--/.nav-collapse -->
    </div> <!-- nav-header-->
  </nav>
