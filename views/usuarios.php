
<!-- titulo de la aplicacion y miga de pan  -->
 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Usuarios <i class="fas fa-user"></i></h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="inicio">inicio</a></li>
           <li class="breadcrumb-item active">Usuario</li>
         </ol>
       </div>
     </div>
   </div>
 </section>
 <!-- /. titulo de la aplicacion y miga de pan  -->

 <!-- ubicación de tablas y formularios -->
 <section class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <div class="card">

           <!-- card-header -->
           <div class="card-header">
             <button class="btn btn-danger text-right" data-toggle="modal" data-target="#modal-danger">Nuevo usuario <i class="fas fa-plus"></i></button>
           </div>
           <!-- /.card-header -->

           <!-- card body -->
           <div class="card-body">
             <table id="example1" class="table table-striped">
               <thead class="table table-primary">
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Tipo Documento</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Rol</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Dirección</th>
                
               </tr>
               </thead>
               <tbody>


                <?php  

                $user = UserController::ctrListarUsuario();

                foreach($user as $value) {
                  
                  echo "<tr>";
                  echo '<td>'.$value["id_usuario"].'</td>';
                  echo '<td>'.$value["nombreUsuario"].'</td>';
                  echo '<td>'.$value["apellido"].'</td>';
                  echo '<td>'.$value["nombreDoc"].'</td>';
                  echo '<td>'.$value["n_documento"].'</td>';
                  echo '<td>'.$value["celular"].'</td>';
                  echo '<td>'.$value["nombreRol"].'</td>';
                  echo '<td>'.$value["correo"].'</td>';
                  echo '<td>'.$value["direccion"].'</td>';
                  echo "</tr>";


                }

                ?>


               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Tipo Documento</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Rol</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Dirección</th>
                 
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.card body -->

           <!-- card footer -->
           <div class="card-footer">

           </div>
           <!-- /. card footer -->

           </div>

<div class="card">
<div class="card-header">
  <h3 class="text-primary"> Editar Usuario <i class="fas fa-edit"></i></h3>
</div>
<div class="card-body">
    <table id="example2" class="table ">
      <thead class="table-info">
      <tr>
      <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Tipo Documento</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Rol</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Dirección</th>
        <th class="text-center">Editar</th>
      </tr>
      </thead>
      <tbody>


       <?php  

       $user = UserController::ctrListarUsuario();
       foreach($user as $value) {
         
         echo "<tr>";
         
         echo '<form action="" method="post">';

         echo '<td class="text-center">'.$value["id_usuario"].'</td>';
         echo '<input type="hidden" class="form-control" value="'.$value["id_usuario"].'" name="ideditar">';                 
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombreUsuario"].'" name="editarnombre"></td>';           
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["apellido"].'" name="editarapellido"></td>';
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombreDoc"].'" name="editarDoc"></td>'; 
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["n_documento"].'" name="editarNDoc"></td>';
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["celular"].'" name="editarcelular"></td>';
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombreRol"].'" name="editarrol"></td>';               
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["correo"].'" name="editarcorreo"></td>';              
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["direccion"].'" name="editardireccion"></td>';

         echo '<td class="text-center">
                 <button type="submit" class="btn-xs btn-primary"><i class="fas fa-edit"></i></button>
              </td>';

              $editar = new UserController();
              $editar->editUser();

         echo '</form>';


         echo "</tr>";

       }

       ?>

      </tbody>
      <tfoot>
      <tr>
      <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Tipo Documento</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Rol</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Dirección</th>
        <th class="text-center">Editar</th>
      </tr>
      </tfoot>
    </table>
  </div>
 <!-- /. ubicación de tablas y formularios -->


 <!-- modal de nuevo registro -->
 <div class="modal fade" id="modal-danger">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header bg-primary">
         <h4 class="modal-title">Usuario <i class="fas fa-plus"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">Nombre completo <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="name" id="name" placeholder="Digíte su nombre completo">
             </div>
             <div class="form-group col-md-6">
               <label for="surname">Apellidos <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="surname" id="surname" placeholder="Digíte sus apellidos">
             </div>
           </div>

           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="typeDoc">Tipo de documento <span class="text-danger">*</span></label>
               <select class="form-control" name="typeDoc" id="typeDoc">
                 <option value="">Seleccione..</option>
                 <option value="2">Cédula de ciudadania</option>
                 <option value="1">Tarjeta de identidad</option>
                 <option value="3">Cédula extranjera</option>
               </select>
             </div>
             <div class="form-group col-md-6">
               <label for="document">Número de documento <span class="text-danger">*</span></label>
               <input type="number" class="form-control" name="document" id="document" placeholder="Digíte su documento">
             </div>
           </div>

           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="cellphone">Número de celular <span class="text-danger">*</span></label>
               <input type="number" class="form-control" name="phone" id="phone" placeholder="Digite el número de celular">
             </div>

             <div class="form-group col-md-6">
             <label for="role">Rol <span class="text-danger">*</span></label>
             <select name="role" id="role" class="form-control">
               <option value="">Seleccione..</option>
               <option value="1">Docente</option>
               <option value="2">Estudiante</option>
               <option value="3">Coordinador</option>
               <option value="7">Administrador</option>
               <option value="11">Secretaria</option>
             </select>
             </div>

           </div>

           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="email">Correo Electrónico <span class="text-danger">*</span></label>
               <input type="email" class="form-control" name="email" id="email" placeholder="Digite el correo electrónico">
             </div>

             <div class="form-group col-md-6">
             <label for="address">Dirección <span class="text-danger">*</span></label>
             <input type="text" name="address" id="address" class="form-control" placeholder="Digíte su dirección">
             </div>

           </div>

          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>

         <?php
          
          $registro = new UserController();

          $registro->new();
         
         ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->
