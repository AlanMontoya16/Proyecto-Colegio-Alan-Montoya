
<!-- titulo de la aplicacion y miga de pan  -->
 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Acudientes <i class="fas fa-users"></i></h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
           <li class="breadcrumb-item active">Acudiente</li>
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
             <button class="btn btn-danger text-right" data-toggle="modal" data-target="#modal-danger">Acudiente <i class="fas fa-plus"></i></button>
           </div>
           <!-- /.card-header -->

           <!-- card body -->
           <div class="card-body">
             <table id="example1" class="table ">
               <thead class="table-primary">
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Estado</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $guardian = GuardianController::ctrListarAcudiente();
                foreach($guardian as $value) {
                  
                  echo "<tr>";

                  echo '<td class="text-center">'.$value["id_acudiente"].'</td>';
                  echo '<td class="text-center">'.$value["nombre"].'</td>';
                  echo '<td class="text-center">'.$value["apellido"].'</td>';
                  echo '<td class="text-center">'.$value["n_documento"].'</td>';
                  echo '<td class="text-center">'.$value["telefono"].'</td>';
                  echo '<td class="text-center">'.$value["correo"].'</td>';

                  echo '<td class="text-center">';

                  if($value["estado"] == "A"){

                    echo '<form action="" method="post">
                             
                           <input type="hidden" value="'.$value["id_acudiente"].'" name="idinactivar">
                           <button type="submit" class="btn-xs btn-danger"> <i class="fas fa-trash-alt"></i></button></td>';

                           $inactivar = new GuardianController();

                           $inactivar->inactivarAcudiente();

                  echo   '</form>';

                  }else if($value["estado"] == "I"){

                    echo '<form action="" method="post">
                             
                           <input type="hidden" value="'.$value["id_acudiente"].'" name="idactivar">
                           <button type="submit" class="btn-xs btn-success"> <i class="fas fa-check"></i></button></td>';

                           $activar = new GuardianController();

                           $activar->activarAcudiente();

                  echo   '</form>';

                  }

                  echo "</tr>";



                }

                ?>

               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Estado</th>
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.card body ------------------------------------------------------------------->
          <!-- card footer -->
           <div class="card-footer">

           </div>
           <!-- /. card footer -->


         </div>

         <div class="card">
         <div class="card-header">
           <h3 class="text-primary"> Editar Acudiente <i class="fas fa-edit"></i></h3>
         </div>
         <div class="card-body">
             <table id="example2" class="table ">
               <thead class="table-info">
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre(s)</th>
                 <th class="text-center">Apellidos</th>
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Editar</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $guardian = GuardianController::ctrListarAcudiente();
                foreach($guardian as $value) {
                  
                  echo "<tr>";
                  
                  echo '<form action="" method="post">';

                  echo '<td class="text-center">'.$value["id_acudiente"].'</td>';
                  echo '<input type="hidden" class="form-control" value="'.$value["id_acudiente"].'" name="ideditar">';                 
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombre"].'" name="editarnombre"></td>';           
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["apellido"].'" name="editarapellido"></td>';              
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["n_documento"].'" name="editardocumento"></td>';               
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["telefono"].'" name="editartelefono"></td>';              
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["correo"].'" name="editarcorreo"></td>';

                  echo '<td class="text-center">
                          <button type="submit" class="btn-xs btn-primary"><i class="fas fa-edit"></i></button>
                       </td>';

                       $editar = new GuardianController();
                       $editar->editGuardian();

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
                 <th class="text-center">Documento</th>
                 <th class="text-center">Celular</th>
                 <th class="text-center">Correo Electrónico</th>
                 <th class="text-center">Editar</th>
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.card body -->
         </div>


       </div>
     </div>
   </div>
 </section>
 <!-- /. ubicación de tablas y formularios -->





 <!-- modal de nuevo registro -->
 <div class="modal fade" id="modal-danger">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header bg-primary">
         <h4 class="modal-title">Acudiente <i class="fas fa-plus"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">Nombre completo <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="nombre" id="name" placeholder="Digíte su nombre completo">
             </div>
             <div class="form-group col-md-6">
               <label for="surname">Apellidos <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="apellido" id="surname" placeholder="Digíte sus apellidos">
             </div>
           </div>

           <div class="form-row">

            <div class="form-group col-md-6">
              <label for="document">Número de documento <span class="text-danger">*</span></label>
              <input type="number" class="form-control" name="documento" id="document" placeholder="Digíte su documento">
            </div>
             <div class="form-group col-md-6">
               <label for="email">Correo electrónico <span class="text-danger">*</span></label>
               <input type="email" class="form-control" name="correo" id="email" placeholder="Digíte su correo electrónico">
             </div>
           </div>

           <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Teléfono <span class="text-danger">*</span></label>
              <input type="number" class="form-control" name="telefono" id="email" placeholder="Digíte su correo electrónico">
            </div>
            
           </div>





          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>


         <?php 

             $guardian = new GuardianController();

             $guardian-> newGuardian();

          ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->
















