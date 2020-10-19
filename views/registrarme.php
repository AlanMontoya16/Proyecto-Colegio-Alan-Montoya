<div class="register-box m-auto mt-3">
  <div class="register-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">

        <div class="form-group">
          <label for="name">Nombre(s) <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name" placeholder="Digíte su nombre completo">
        </div>

        <div class="form-group">
          <label for="name">Apellidos <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="surname" placeholder="Digíte sus apellidos">
        </div>

        <div class="form-group">
          <select class="form-control" name="gender">
            <option value="">Seleccione..</option>
            <option value="M">Masculino</option>
            <option value="F">Fememenino</option>
            <option value="N">Prefiero no decir</option>
            <option value="O">Otro</option>
          </select>
        </div>

        <div class="form-group">
          <label for="birthdate">Fecha de nacimiento <span class="text-danger">*</span></label>
          <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Digíte sus apellidos">
        </div>

        <div class="form-group">
          <label for="email">Correo electrónico <span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Digíte sus apellidos">
        </div>


        <div class="form-group">
          <label for="cellphone">Número de celular <span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="cellphone" id="cellphone" placeholder="Digíte sus apellidos">
        </div>

        <?php 

            $user = new UserController();

            $user-> new(); 

         ?>



    <!--     <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>


        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="#" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->