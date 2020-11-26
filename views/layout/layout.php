
  
  <!-- Menú horizontal -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    
    <!-- links del menu horizontal -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>
    <!-- /. links del menu horizontal -->

 
    <ul class="navbar-nav ml-auto">

      <!-- Notificaciones del menu horizontal -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Notificaciones</span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 nuevos reportes
            <span class="float-right text-muted text-sm">hace: 2 dias</span>
          </a>
          <div class="dropdown-divider"></div>
          
          <center><a href="salir" class="btn btn-success">Cerrar Sesión</a></center>
        </div>
      </li>
      <!-- /. Notificaciones del menu horizontal -->

      <!-- boton para agrandar pantalla -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- /. boton para agrandar pantalla -->

    </ul>
  </nav>
  <!-- /menu horizontal -->


  





  <!-- menu vertical -->
  <aside class="main-sidebar sidebar-light-dark elevation-4">

      <img src="assets/dist/img/logo.png" alt="AdminLTE Logo"  width="50px">
      <span class="brand-text font-weight-light">Colegio La Fuente</span>

     
    <!-- titulo y foto del menu vertical -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></a>
          <a href="#" class="d-block"><?php echo $_SESSION["rol"]; ?></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- item desplegable -->
     <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-home"></i>
              <p>
                Inicio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- item desplegable -->

          <li class="nav-item">
            <a href="inicio" class="nav-link text-secondary">
              <i class="fas fa-home"></i>
              <p>
                Inicio
<!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


              <li class="nav-item">
                <a href="usuarios" class="nav-link text-secondary">
                  <i class="fas fa-user"></i>
                  <p>
                    Usuarios
    <!--                 <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>


                <li class="nav-item">
                  <a href="acudientes" class="nav-link text-secondary">
                    <i class="fas fa-users"></i>
                    <p>
                      Acudiente
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="asignatura" class="nav-link text-secondary">
                    <i class="fas fa-table"></i>
                    <p>
                      Asignatura
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="curso" class="nav-link text-secondary">
                    <i class="fas fa-child"></i>
                    <p>
                      Curso
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dimension" class="nav-link text-secondary">
                    <i class="fas fa-list"></i>
                    <p>
                      Dimensión
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="periodo" class="nav-link text-secondary">
                    <i class="fas fa-calendar"></i>
                    <p>
                      Periodo
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="nota" class="nav-link text-secondary">
                    <i class="fas fa-book"></i>
                    <p>
                      Notas
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="grado" class="nav-link text-secondary">
                    <i class="fas fa-university"></i>
                    <p>
                      Grado
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <a href="programacion" class="nav-link text-secondary">
                    <i class="fas fa-clock"></i>
                    <p>
                      Programación
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
                <a href="plan" class="nav-link text-secondary">
                    <i class="fas fa-ad"></i>
                    <p>
                      Plan de acción
      <!--                 <span class="right badge badge-danger">New</span> -->
                    </p>
                  </a>
                </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- /menu vertical -->



 