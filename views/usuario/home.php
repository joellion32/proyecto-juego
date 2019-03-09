<?php require_once 'views/layouts/header.php';?>

<!--parte de los juegos-->
<div class="content" style="padding-top: 10% !important; text-align:center;">
        <div class="container">
<!---mensajes notificacion-->
<?php if(isset($_SESSION['mensaje'])):?>
<div class="alert alert-success" role="alert">
<?=$_SESSION['mensaje']?>
</div>
<?php endif;?>

<?php if(isset($_SESSION['error'])):?>
<div class="alert alert-danger" role="alert">
<?=$_SESSION['error']?>
</div>
<?php endif;?>

<?php Utils::deletesession('mensaje')?>
<?php Utils::deletesession('error')?>

          <div class="row">
              <div class="col-md-4">
                <!--Categorias-->
                  <div class="card" style="width: 20rem;">
                      <div class="card-body">
                        <h4 class="card-title">Categorias</h4>
                        <?php while($categoria = $categorias->fetch_object()):?>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                              <a class="nav-link active bg-primary" href="#"><?=$categoria->nombre_categoria?></a>
                            </li>
                          <?php endwhile;?>
                        </ul>
                      </div>
                    </div>
                <!----El mas jugado--->
                <div class="card" style="width: 20rem;">
                <div class="card-body">
                <h4 class="card-title">El Mas Jugado</h4>
                 <br>
                 <?php if($reproducido = $reproducidos->fetch_object()):?>
                <h5 class="mt-0" style="font-weight:bold; color:white;"><?=$reproducido->nombre_juego?></h5>
                <div class="media" style="text-align:start;">
                <a href="<?=base_url?>Juegos/home&id=<?=$reproducido->id?>"><img src="<?=$reproducido->imagen?>" class="mr-3" alt="..." width="100" height="100"></a>
                <div class="media-body">
                <b style="color:white;">Reproducciones:</b><p><?=$reproducido->reproducciones?> veces</p>
                <b style="color:white;">Categoria:</b><p><?=$reproducido->nombre_categoria?></p>
                <b style="color:white;">Estrellas:</b><p><?=$reproducido->estrellas?>-5</p>
                </div>
                </div>
                <?php endif;?>
                </div><!--Card-body-->
                </div>

                </div><!--Cierre de la columna-->
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Todos Los Juegos</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <br>
                          <div class="row">
                            <?php while($juego = $juegos->fetch_object()):?>
                            <div class="col-sm-3 m-3">
                                <div class="card bg-dark" id="card" data-toggle="tooltip" data-placement="top" data-html="true" title="Jugar <?=$juego->nombre_juego?>" style="width: 12rem; height: 10rem;">
                                    <a href="<?=base_url?>Juegos/home&id=<?=$juego->id?>" id="reproducion"><img src="<?=$juego->imagen?>" width="140" height="120" class="card-img-top" alt="...">
                                      <div class="card-footer">
                                        <p class="card-text"><?=$juego->nombre_juego?></p>
                                      </div></a> 
                                    </div>
                            </div><!--Cierre Columna-->
                            <?php endwhile;?>
                          </div>
                        </div>
                      </div>
                      <!--Panel 2-->
                      <div class="col-md-14">
                          <div class="card text-center">
                              <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">Mas Destacados</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="card-body">
                                <br>
                                <div class="row">
                                  <?php while($destacado = $destacados->fetch_object()):?>
                                  <div class="col-sm-3 m-3">
                                  <div class="card bg-dark" id="card" data-toggle="tooltip" data-placement="top" data-html="true" title="Jugar <?=$destacado->nombre_juego?>" style="width: 12rem; height: 10rem;">
                                    <a href="<?=base_url?>Juegos/home&id=<?=$destacado->id?>"><img src="<?=$destacado->imagen?>" width="140" height="120" class="card-img-top" alt="...">
                                      <div class="card-footer">
                                        <p class="card-text"><?=$destacado->nombre_juego?></p>
                                      </div></a> 
                                    </div>
                                   </div><!--Cierre Columna-->
                                    <?php endwhile;?>
      
                                </div>
                              </div>
                            </div>
                      </div>
                </div><!--Cierre COL-MD-8-->         
        </div><!--Cierre Row-->
       

      </div><!--Cierre Container-->
    </div><!--Cierre Content-->
<!--Cierre-->





<?php require_once 'views/layouts/footer.php';?>