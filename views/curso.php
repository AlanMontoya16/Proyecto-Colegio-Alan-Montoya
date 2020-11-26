<!-- titulo de la aplicacion y miga de pan  -->
<section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Curso <i class="fas fa-child"></i></h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
           <li class="breadcrumb-item active">Curso</li>
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
             <button class="btn btn-danger text-right" data-toggle="modal" data-target="#modal-danger">Curso <i class="fas fa-plus"></i></button>
           </div>
           <!-- /.card-header -->

           <!-- card body -->
           <div class="card-body">
             <table id="example1" class="table table-striped">
               <thead>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center"># del curso</th>
                 <th class="text-center">Acciones</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $grade = GradeController::ctrListarCurso();

                foreach($grade as $value) {
                  
                  echo "<tr>";
                  echo '<td class="text-center">'.$value["id_curso"].'</td>';
                  echo '<td class="text-center">'.$value["n_curso"].'</td>';
                  echo '<td class="text-center">

                  <button type="button" class="btn-xs btn-info" data-toggle="modal" data-target="#modal-editar"> <i class="fas fa-edit"></i></button>

                  <button type="button" class="btn-xs btn-danger" idCurso="'.$value["id_curso"].'"> <i class="fas fa-lock"></i></button></td>';
                  echo "</tr>";


                }

                ?>


               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center"># del curso</th>
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
         <h4 class="modal-title">Curso <i class="fas fa-plus"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="surname">Numero del curso <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="n_curso" id="n_curso" placeholder="Digíte el curso">
             </div>
           </div>
          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>


         <?php 

             $grade = new GradeController();

             $grade-> newGrade();

          ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->





 <!-- modal de nuevo editar -->
 <div class="modal fade" id="modal-editar">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header bg-primary">
         <h4 class="modal-title">Curso <i class="fas fa-edit"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


          <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">Id del curso <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="id_curso" id="id_curso" placeholder="Digíte el nombre del curso">
             </div>
             <div class="form-group col-md-6">
               <label for="surname">Numero del curso <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="n_curso" id="n_curso" placeholder="Digíte el curso">
             </div>
           </div>
          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>


         <?php 

             $grade = new GradeController();

             $grade-> editGrade();

          ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->










