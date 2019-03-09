<?php require_once 'views/layouts/header.php';?>

<div class="content" style="padding-top: 10% !important; text-align:center;">
<div class="container">
    <div class="row">
    <div class="col-sm-2" style="text-align:initial !important;">
      <div class="card">
        <div class="card-header" style="text-align:center !important;"><h4>Creditos & Info</h4></div>
        <div class="card-body">
          <ul class="nav nav-pills flex-column m-0">
            <li class="nav-item">
              <a class="nav-link active bg-primary" href="#">Genero: <br><span style="color:black; font-weight: bold;"><?=$juegos->nombre_categoria?></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link active bg-primary" href="#">Autor: <span style="color:black; font-weight: bold;"><?=$juegos->nombre?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-primary" href="#">Reproducido: <br><span style="color:black; font-weight: bold;"><?=$juegos->reproducciones?> veces</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link active bg-primary" href="#">Estrellas: <br><span style="color:black; font-weight: bold;"><?=$juegos->estrellas?>-5</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link active bg-primary" href="#">Publicado: <br><span style="color:black; font-weight: bold;"><?=$juegos->fecha?></span></a>
            </li>
            <li class="nav-item">
              <span class="nav-link active bg-primary" href="#">Tags:  <br><a href="#" class="badge badge-dark">Terror</a>  <a href="#" class="badge badge-dark">Accion</a>  <a href="#" class="badge badge-dark">Otros</a></span>
            </li>
          </ul>
        </div> 
        <div class="card-footer"></div>
      </div> 
    </div>
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h4><?=$juegos->nombre_juego?></h4>
          </div>
          <div class="card-body">
          <div>
          <?php if($_SESSION['juegos']->tipo == 'gamemarker'):?>
          <h1>hola</h1>
          <?php else:?>
            <object data="<?=base_url?>uploads/juegosflash/<?=$juegos->archivo?>" style="margin:auto;" height="550" id="movie" type="application/x-shockwave-flash" width="750">
              <param name="movie" value="<?=$juegos->archivo?>" />
              <param name="wmode" value="transparent" />
            </object>
          <?php endif;?>
          </div>
          </div>
        </div>

         <!--Descipcion del Autor--> 
        <div class="card">
          <div class="card-header">
            <h4>Descripcion del Juego</h4>
          </div>
          <div class="card-body">
            <p class="card-text"><?=$juegos->descripcion?></p>
            <br>
            <h4>Comentario Autor</h4>
            <p class="card-text"><?=$juegos->comentario_autor?></p>
          </div>
        </div>  

<?php if(isset($_SESSION['identificar'])):?>
         <!--Calificacion--> 
        <div class="card">
          <div class="card-header">
            <h4>Califica este juego</h4>
          </div>
          <div class="card-body">
            <form action="#" method="POST">
            <div class="form-group">
            <label for="puntos">Puntuacion:</label>
            <select class="form-control" style="color:white; cursor: pointer;" id="puntos">
                <option style="color:black;">1 Estrella</option>
                <option style="color:black;">2 Estrellas</option>
                <option style="color:black;">3 Estrellas</option>
                <option style="color:black;">4 Estrellas</option>
                <option style="color:black;">5 Estrellas</option>
              </select>    
            </div>   

            <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Mensaje</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>  
            </form>           
          </div>
        </div>  
<?php endif;?>

<!--Comentarios-->
<div class="card" style="text-align:start;">
<div class="card-header"><h4>Comentarios</h4></div>  
<div class="card-body">
    <div class="media">
        <img src="https://images-na.ssl-images-amazon.com/images/I/516IQFTXDmL.jpg" width="64" height="64" class="align-self-start mr-3" alt="...">
        <div class="media-body">
          <h4 class="mt-0">Anonumus</h4>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
      <br>
      <div class="media">
          <img src="https://img.depor.com/files/ec_article_multimedia_gallery/uploads/2018/05/11/5af5fb33ad2dc.jpeg" width="64" height="64" class="align-self-start mr-3" alt="...">
          <div class="media-body">
            <h4 class="mt-0">Goku</h4>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </div>
</div>
</div>

      </div><!--Col-10-->
    </div><!--row-->
  </div><!--Container-->
  
</div><!--Content-->



<?php require_once 'views/layouts/footer.php';?>