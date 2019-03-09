<!-- Modal Registrate -->
<div class="modal fade" id="registrate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-users"></i> Registrate</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?=base_url?>Home/registro" method="POST">
              <div class="form-group">
                  <label for="exampleInputEmail2">Nombre Usuario</label>
                  <input name="nombre" type="txt" style="color:black;" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Introduce Nombre Usuario" required>
                </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Correo Electronico</label>
              <input name="email" type="email" style="color:black;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce Correo" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input name="password" type="password" style="color:black;" class="form-control" id="exampleInputPassword1" placeholder="Introduce Contraseña" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Registrate</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<!-- Modal Iniciar-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Iniciar Sesion</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url?>Home/iniciar" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Correo Electronico</label>
            <input name="email" type="email" style="color:black;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce Correo">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input name="password" type="password" style="color:black;" class="form-control" id="exampleInputPassword1" placeholder="Introduce Contraseña">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Iniciar</button>
      </div>
      </form>
    </div>
  </div>
</div>




  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1 class="title">BLK•</h1>
        </div>
        <div class="col-md-3">
          <ul class="nav">
            <li class="nav-item">
              <a href="../index.html" class="nav-link">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/landing-page.html" class="nav-link">
                Landing
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/register-page.html" class="nav-link">
                Register
              </a>
            </li>
            <li class="nav-item">
              <a href="../examples/profile-page.html" class="nav-link">
                Profile
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="nav">
            <li class="nav-item">
              <a href="https://creative-tim.com/contact-us" class="nav-link">
                Contact Us
              </a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/about-us" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="nav-link">
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a href="https://opensource.org/licenses/MIT" class="nav-link">
                License
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3 class="title">Follow us:</h3>
          <div class="btn-wrapper profile">
            <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
              <i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
              <i class="fab fa-dribbble"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

  <!-- Core -->
  <script src="<?=base_url?>assets/js/core/jquery.min.js"></script>
  <script src="<?=base_url?>assets/js/core/popper.min.js"></script>
  <script src="<?=base_url?>assets/js/core/bootstrap.min.js"></script>
  <!-- BLK• JS -->
  <script src="<?=base_url?>assets/js/blk-design-system.js"></script>
  <script src="<?=base_url?>assets/js/funciones.js"></script>

  <!--Juego Game Marker-->
<script type="text/javascript" src="<?=base_url?>uploads/juegosgamemarker/juegogatos/<?=$juegos->archivo?>"></script>
  </body>
</html>