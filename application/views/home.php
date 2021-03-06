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
            <a class="navbar-brand" href="<?= site_url('Home') ?>">Proyectos</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= site_url('Proyectos/registrar') ?>">Registrar</a></li>
                  <li><a href="<?= site_url('Proyectos/listar') ?>">Listar</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
          <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>DCPS | Proyectos </h1>
        <p>Solución parcial 2 para la materia <strong>diseño y construcción de productos de software</strong>.</p>
      </div>
    </div> <!-- /container -->
          <!-- Bootstrap core JavaScript
          ================================================== -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>static/js/jquery-3.1.1.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
  </body>
</html>