<!-- titulo de la aplicacion y miga de pan  -->
<section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Dimensión <i class="fas fa-list"></i></h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
           <li class="breadcrumb-item active">Dimensión</li>
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
             <button class="btn btn-danger text-right" data-toggle="modal" data-target="#modal-danger">Dimensión <i class="fas fa-plus"></i></button>
           </div>
           <!-- /.card-header -->

           <!-- card body -->
           <div class="card-body">
             <table id="example1" class="table table-striped">
               <thead>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de dimensión</th>
                 <th class="text-center">Estado </th>
                 <th class="text-center">Acciones</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $dimension = DimensionController::ctrListarDimension();

                foreach($dimension as $value) {
                  
                  echo "<tr>";
                  echo '<td class="text-center">'.$value["id_dimension"].'</td>';
                  echo '<td class="text-center">'.$value["nombre"].'</td>';
                  echo '<td class="text-center">'.$value["estado"].'</td>';
                  echo '<td class="text-center">';

                  if($value["estado"] == "Activo"){

                    echo '<form action="" method="post">
                             
                           <input type="hidden" value="'.$value["id_dimension"].'" name="idinactivar">
                           <button type="submit" class="btn-xs btn-danger"> <i class="fas fa-trash-alt"></i></button></td>';

                           $inactivar = new DimensionController();

                           $inactivar->inactivarDimension();

                  echo   '</form>';

                  }else if($value["estado"] == "Inactivo"){

                    echo '<form action="" method="post">
                             
                           <input type="hidden" value="'.$value["id_dimension"].'" name="idactivar">
                           <button type="submit" class="btn-xs btn-success"> <i class="fas fa-check"></i></button></td>';

                           $activar = new DimensionController();

                           $activar->activarDimension();

                  echo   '</form>';

                  }

                  echo "</tr>";

                }
                
                

                ?>


               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de dimensión</th>
                 <th class="text-center">Estado </th>
                 <th class="text-center">Acciones</th>
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.card body -->

           <!-- card footer -->
           <div class="card-footer">

           </div>
           <!-- /. card footer -->


           <div class="card">
         <div class="card-header">
           <h3 class="text-primary"> Editar Dimensión <i class="fas fa-edit"></i></h3>
         </div>
         <div class="card-body">
             <table id="example2" class="table ">
               <thead class="table-info">
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de dimensión</th>
                 <th class="text-center">Editar</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $dimension = DimensionController::ctrListarDimension();
                foreach($dimension as $value) {
                  
                  echo "<tr>";
                  
                  echo '<form action="" method="post">';

                  echo '<td class="text-center">'.$value["id_dimension"].'</td>';
                  echo '<input type="hidden" class="form-control" value="'.$value["id_dimension"].'" name="ideditar">';                 
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombre"].'" name="editarnombre"></td>';                         
                  echo '<td class="text-center">
                          <button type="submit" class="btn-xs btn-primary"><i class="fas fa-edit"></i></button>
                       </td>';

                       $editar = new DimensionController();
                       $editar->editDimension();

                  echo '</form>';


                  echo "</tr>";

                }

                
                
                

                ?>

               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de dimensión</th>
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
         <h4 class="modal-title">Dimensión <i class="fas fa-plus"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


           <div class="form-row">
             <div class="form-group col-md-6">
             <label for="name">Nombre de la Dimensión <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Digíte la dimensión">
             </div>
             <div class="form-group col-md-6">
             <label for="state">Estado de la Dimensión <span class="text-danger">*</span></label>
             <select class="form-control" name="typeDoc" id="typeDoc">
                 <option value="">Seleccioné..</option>
                 <option value="">Activo</option>
                 <option value="">Inactivo</option>
               </select>
               </div>
           </div>
          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>


         <?php 

             $dimension = new DimensionController();

             $dimension-> newDimension();

          ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->





 <!-- modal de nuevo editar -->
 <!-- <div class="modal fade" id="modal-editar">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header bg-primary">
         <h4 class="modal-title">Dimensión <i class="fas fa-edit"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


          <div class="form-row">
           <div class="form-group col-md-6">
               <label for="surname">Estado de la Dimensión <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="estado" id="estado" placeholder="Digíte el estado de la dimensión">
             </div>
           </div>
          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>
     </form>

     </div>
   </div>
 </div> -->
 <!-- /. modal de nuevo registro -->










