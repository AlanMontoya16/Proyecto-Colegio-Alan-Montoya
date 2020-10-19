

    <!-- Formulario del login -->
    <section class="content mt-5">
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

                    <button type="submit" class="btn btn-primary form-control">Ingresar <i class="fas fa-arrow-right"></i></button>
                 

                  <p class="mt-3 mb-1 text-center">
                    <a href="#" class="text-dark">Olvidé mi contraseña</a>
                  </p>   

                  <button type="submit" class="btn btn-outline-primary  form-control mt-5"><i class="fab fa-facebook mr-2"></i> Iniciar con facebook </button>

                  <button type="submit" class="btn btn-outline-danger form-control mt-3"><i class="fab fa-google-plus mr-2"></i> Iniciar con Google+</button>

                </div>

                <div class="card-footer">
                  
                  <p class="mt-3 mb-1 text-center">
                    <a href="registrarme"  class="btn btn-outline-dark">Registrarme <i class="fas fa-plus"></i></a>
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

