

    <!-- Formulario del login -->
    <body background="assets/images/img_5.jpeg">
    <center><section class="content mt-5">
      <div class="container-fluid">
        <div class="row">

          <div class="login-box m-auto ">

            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="text-center">Iniciar <span class="text-primary">Sesión</span></h3>
                <center><img src="assets/images/ojalaestes.png" width="200" height="100"></center>
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
                    <a href="recupera.php" class="text-dark">Olvidé mi contraseña</a>
                  </p>   


                </div></center>

<!--                 <div class="card-footer">
                  
                  <p class="mt-3 mb-1 text-center">
                    <a href="registrarme"  class="btn btn-outline-dark">Registrarme <i class="fas fa-plus"></i></a>
                  </p> 

                </div> -->


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

