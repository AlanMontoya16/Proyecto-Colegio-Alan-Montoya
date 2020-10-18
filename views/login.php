

    <!-- Formulario del login -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="login-box m-auto ">

            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="text-center">Iniciar <span class="text-primary">Sesión</span></h3>
              </div>

              <form role="form" id="quickForm" class="validar" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico">
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Ingresar <i class="fas fa-arrow-right"></i></button>
                  </div>

                  <p class="mt-3 mb-1 text-center">
                    <a href="#">Olvidé mi contraseña</a>
                  </p>   

                </div>


                <?php 

                     $user = new UserController();

                     $user-> login();

                 ?>


              </form>
            </div>
            </div>
        </div>
      </div>
    </section>   
    <!-- /.Formulario del login -->

