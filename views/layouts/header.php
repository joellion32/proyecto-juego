<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="pragma" content="no-cache"/>
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name ="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
     
  <title>Index</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

  <!-- Icons -->
  <link href="<?=base_url?>assets/css/nucleo-icons.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- BLK• CSS -->
  <link type="text/css" href="<?=base_url?>assets/css/blk-design-system.min.css" rel="stylesheet">

  <!--Estilos Propios-->
  <link rel="stylesheet" href="<?=base_url?>assets/demo/demo.css">

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="50">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="<?=base_url?>" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
        <span>BLK•</span> Design System
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a>
              BLK•
            </a>
          </div>
          <div class="col-6 collapse-close text-right">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item p-0">
          <a class="nav-link" rel="tooltip" title="Buscar Juegos" data-placement="bottom">
            <i class="fa fa-search" style="cursor:pointer;" id="boton-buscar"></i>
          </a>
        </li>
        <!--Buscador-->
        <form>
          <div class="form-group">
            <input type="text" style="display:none;" class="form-control" id="buscador" aria-describedby="emailHelp" placeholder="Buscar Juego">              </div>
        </form>

        <?php if(!isset($_SESSION['identificar'])):?>
        <li class="nav-item">
          <a class="nav-link" style="cursor:pointer;" data-toggle="modal" data-target="#exampleModal">Iniciar Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="cursor:pointer;" data-toggle="modal" data-target="#registrate">Registrate</a>
        </li>
        <?php else:?>
        <li class="nav-item">
        <div class="dropdown show">
      <button class="btn btn-secondary dropdown-toggle nav-link" type="button" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user"></i> <?=$_SESSION['identificar']->nombre?>
      </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Subir Juego</a>
    <a class="dropdown-item" href="#">Mis Juegos</a>
    <a class="dropdown-item" href="#">Ver Perfil</a>
    <a class="dropdown-item" href="<?=base_url?>Home/cerrarsession">Cerrar Sesion</a>
  </div>
</div>
        </li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->