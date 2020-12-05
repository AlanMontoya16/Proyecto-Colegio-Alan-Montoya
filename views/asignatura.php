
<!-- titulo de la aplicacion y miga de pan  -->
<section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Asignaturas <i class="fas fa-table"></i></h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
           <li class="breadcrumb-item active">Asignatura</li>
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
             <button class="btn btn-danger text-right" data-toggle="modal" data-target="#modal-danger">Asignatura <i class="fas fa-plus"></i></button>
           </div>
           <!-- /.card-header -->

           <!-- card body -->
           <div class="card-body">
             <table id="example1" class="table table-striped">
               <thead>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre</th>
                 <th class="text-center">Grado</th>
                 <th class="text-center">Acciones</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $subject = SubjectController::ctrListarAsignatura();
                 
                foreach($subject as $value) {
                  
                  echo "<tr>";
                  echo '<td class="text-center">'.$value["id_asignatura"].'</td>';
                  echo '<td class="text-center">'.$value["nombre"].'</td>';
                  if ($value["id_grado"]==1 ) {
                    echo '<td class="text-center">Septimo</td>';
                  }
                  else if ($value["id_grado"]==2 ) {
                    echo '<td class="text-center">Quinto</td>';
                  }
                  else if ($value["id_grado"]==3 ) {
                    echo '<td class="text-center">Sexto</td>';
                  }
                  else if ($value["id_grado"]==4 ) {
                    echo '<td class="text-center">Once</td>';
                  }
                  else if ($value["id_grado"]==5 ) {
                    echo '<td class="text-center">Decimo</td>';
                  }
                  else if ($value["id_grado"]==6 ) {
                    echo '<td class="text-center">Octavo</td>';
                  }
                  else if ($value["id_grado"]==7 ) {
                    echo '<td class="text-center">Noveno</td>';
                  }
                  echo '<td class="text-center">';

                  


                  echo "</tr>";


                }

                ?>


               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de Asignatura</th>
                 <th class="text-center">Grado</th>
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

<div class="card">
<div class="card-header">
  <h3 class="text-primary"> Editar Asignatura <i class="fas fa-edit"></i></h3>
</div>
<div class="card-body">
    <table id="example2" class="table ">
      <thead class="table-primary">
      <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de Asignatura</th>
                 <th class="text-center">Grado</th>
                 <th class="text-center">Editar</th>
               </tr>
      </thead>
      <tbody>


       <?php  

       $subject = SubjectController::ctrListarAsignatura();
       foreach($subject as $value) {
         
         echo "<tr>";
         
         echo '<form action="" method="post">';

         echo '<td class="text-center">'.$value["id_asignatura"].'</td>';
         echo '<input type="hidden" class="form-control" value="'.$value["id_asignatura"].'" name="ideditar">';                 
         echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombre"].'" name="editarname"></td>';           
         echo'<td class="text-center">';
         echo '<select class="form-control" name="editargrade" id="id_grado">';
         if($value["id_grado"] == "1") {
                 
          echo '<option value="1">Séptimo</option>
          <option value="2">Quinto</option>
          <option value="3">Sexto</option>
          <option value="6">Octavo</option>
          <option value="7">Noveno</option>
          <option value="5">Decimo</option>
          <option value="4">Once</option>';

        }else if($value["id_grado"] == "2") {
         
          echo 
          '<option value="2">Quinto</option>
          <option value="3">Sexto</option>
          <option value="1">Séptimo</option>
          <option value="6">Octavo</option>
          <option value="7">Noveno</option>
          <option value="5">Decimo</option>
          <option value="4">Once</option>';

        }else if ($value["id_grado" ] == "3") {
         
          echo '<option value="3">Sexto</option>
          <option value="2">Quinto</option>
          <option value="1">Séptimo</option>
          <option value="6">Octavo</option>
          <option value="7">Noveno</option>
          <option value="5">Decimo</option>
          <option value="4">Once</option>';
        }else if ($value["id_grado" ] == "6") {
         
          echo '<option value="6">Octavo</option>
          <option value="2">Quinto</option>
          <option value="3">Sexto</option>
          <option value="1">Séptimo</option>
          <option value="7">Noveno</option>
          <option value="5">Decimo</option>
          <option value="4">Once</option>';
        }else if ($value["id_grado" ] == "7") {
         
          echo '<option value="7">Noveno</option>
          <option value="2">Quinto</option>
          <option value="3">Sexto</option>
          <option value="1">Séptimo</option>
          <option value="6">Octavo</option>
          <option value="5">Decimo</option>
          <option value="4">Once</option>';
        }
        else if ($value["id_grado" ] == "5") {
         
          echo '<option value="5">Decimo</option>
          <option value="2">Quinto</option>
          <option value="3">Sexto</option>
          <option value="1">Séptimo</option>
          <option value="6">Octavo</option>
          <option value="7">Noveno</option>
          <option value="4">Once</option>';
        }else if ($value["id_grado" ] == "4") {
         
          echo '<option value="4">Once</option>
          <option value="2">Quinto</option>
          <option value="3">Sexto</option>
          <option value="1">Séptimo</option>
          <option value="6">Octavo</option>
          <option value="7">Noveno</option>
          <option value="5">Decimo</option>';
        }


        echo '</select>';
         echo '<td class="text-center">
                 <button type="submit" class="btn-xs btn-primary"><i class="fas fa-edit"></i></button>
              </td>';
              

              $editar = new SubjectController();
              $editar->editSubject();

         echo '</form>';


         echo "</tr>";

       }

       ?>

      </tbody>
      <tfoot>
      <tr>
      <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre de Asignatura</th>
                 <th class="text-center">Grado</th>
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
         <h4 class="modal-title">Curso <i class="fas fa-plus"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">Nombre de asignatura <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="name" id="name" placeholder="Digíte el curso">
             </div>
             <div class="form-group col-md-6">
             <label for="state">Grado al que asignar <span class="text-danger">*</span></label>
             <select class="form-control" name="id_grado" id="id_grado">
                 <option value="">Seleccioné..</option>
                 <option value="2">Quinto</option>
                 <option value="3">Sexto</option>
                 <option value="1">Séptimo</option>
                 <option value="6">Octavo</option>
                 <option value="7">Noveno</option>
                 <option value="5">Decimo</option>
                 <option value="4">Once</option>
                 <option value="8">Doce</option>
               </select>
          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>


         <?php 

             $subject = new SubjectController();

             $subject-> newSubject();

          ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->










