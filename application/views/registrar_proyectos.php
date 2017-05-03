<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DCPS | <?= $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>static/css/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>static/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>static/css/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>static/css/navbar.css">
  </head>
  <body>
    <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Proyectos</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profesores<span class="caret"></span></a>
                <ul class="dropdown-menu">

                  <li><a href="../Proyectos/registrar">Registrar</a></li>

                </ul>
              </li>
            </ul>
            </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
          </nav>
          <!-- Main component for a primary marketing message or call to action -->
          
          <div class="row">
            <div class="col-md-12">
              <?php if (isset($success)): ?>
              <div class="alert alert-success alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Profesor correctamente ingresado</strong>
              </div>
              <?php endif; ?>
              <?= form_open('Proyectos/submit', ['class'=> 'form']) ?>
              <div class="row">
                  <div class="col-md-1">
                    <?= form_label('Nombre', 'inputNombre', ['class' => 'control-label']) ?>
                  </div> 
                  <div class="col-md-3">
                    <?= form_input('inputNombre', (validation_errors()) ? set_value('inputNombre') : '',[
                    'id'=>'inputNombre',
                    'class' => 'form-control',
                    'required' => 'required',
                    'placeholder' => 'Nombre']);
                    ?>
                    <?php echo form_error('inputNombre',
                    '<div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>',
                      '</strong>
                    </div>');
                    ?>
                  </div>
                  <div class="col-md-1">
                    <?= form_label('Descripcion', 'inputDescripcion', ['class' => 'control-label']) ?>
                  </div> 
                  <div class="col-md-3">
                    <?= form_input('inputDescripcion', (validation_errors()) ? set_value('inputDescripcion') : '',[
                    'id'=>'inputDescripcion',
                    'class' => 'form-control',
                    'required' => 'required',
                    'placeholder' => 'Descripcion']);
                    ?>
                    <?php echo form_error('inputDescripcion',
                    '<div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>',
                      '</strong>
                    </div>');
                    ?>
                  </div>  
                </div>

                <div class="row">
                  <div class="col-md-1">
                    <?= form_label('Fecha Inicio', 'inputFechaInicio', ['class' => 'control-label']) ?>
                  </div> 
                  <div class="col-md-3">
                    <?= form_input('inputFechaInicio', (validation_errors()) ? set_value('inputFechaInicio') : '',[
                    'id'=>'inputFechaInicio',
                    'class' => 'form-control',
                    'required' => 'required',
                    'placeholder' => '10/01/2010']);
                    ?>
                    <?php echo form_error('inputFechaInicio',
                    '<div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>',
                      '</strong>
                    </div>');
                    ?>
                  </div>
                  <div class="col-md-1">
                    <?= form_label('Fecha Fin', 'inputFechaFin', ['class' => 'control-label']) ?>
                  </div> 
                  <div class="col-md-3">
                    <?= form_input('inputFechaFin', (validation_errors()) ? set_value('inputFechaFin') : '',[
                    'id'=>'inputFechaFin',
                    'class' => 'form-control',
                    'placeholder' => '10/02/2010']);
                    ?>
                    <?php echo form_error('inputFechaFin',
                    '<div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>',
                      '</strong>
                    </div>');
                    ?>
                  </div>  
                </div>

                <div class="row">   
                  <div class="col-md-1">
                    <?= form_label('Nombre Director Proyecto', 'inputNombreDirector', ['class' => 'control-label']) ?>
                  </div> 
                  <div class="col-md-3">
                    <?= form_input('inputNombreDirector', (validation_errors()) ? set_value('inputNombreDirector') : '',[
                    'id'=>'inputNombreDirector',
                    'class' => 'form-control',
                    'required' => 'required',
                    'placeholder' => 'Nombre Director Proyecto']);
                    ?>
                    <?php echo form_error('inputNombreDirector',
                    '<div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>',
                      '</strong>
                    </div>');
                    ?>
                  </div>      
                  <div class="col-md-1">
                    <?= form_label('Nombre Cliente', 'inputNombreCliente', ['class' => 'control-label']) ?>
                  </div> 
                  <div class="col-md-3">
                    <?= form_input('inputNombreCliente', (validation_errors()) ? set_value('inputNombreCliente') : '',[
                    'id'=>'inputNombreCliente',
                    'class' => 'form-control',
                    'required' => 'required',
                    'placeholder' => 'Nombre Cliente']);
                    ?>
                    <?php echo form_error('inputNombreCliente',
                    '<div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>',
                      '</strong>
                    </div>');
                    ?>
                  </div> 
                </div>
              <br />
              <?= form_submit('submit', 'Registrar', ['class' => 'btn btn-primary']) ?>
              <?= form_close(); ?><!-- /form -->
            </div>
          </div>
          </div> <!-- /container -->
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <script type = 'text/javascript' src = "<?php echo base_url(); ?>static/js/jquery-3.1.1.min.js"></script>
          <script type = 'text/javascript' src = "<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
        </body>
      </html>