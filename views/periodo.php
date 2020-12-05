
<!-- titulo de la aplicacion y miga de pan  -->
<section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Periodos <i class="fas fa-calendar"></i></h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
           <li class="breadcrumb-item active">Periodos</li>
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
             <button class="btn btn-danger text-right" data-toggle="modal" data-target="#modal-danger">Periodos <i class="fas fa-plus"></i></button>
           </div>
           <!-- /.card-header -->

           <!-- card body -->
           <div class="card-body">
             <table id="example1" class="table table-striped">
               <thead>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre periodo</th>
                 <th class="text-center">Fecha de inicio</th>
                 <th class="text-center">Fecha de cierre</th>
                 <th class="text-center">Fecha para entregar notas</th>
                 <th class="text-center">Acciones</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $period = PeriodController::ctrListarPeriodo();

                foreach($period as $value) {
                  
                  echo "<tr>";
                  echo '<td class="text-center">'.$value["id_periodo"].'</td>';
                  echo '<td class="text-center">'.$value["nombre"].'</td>';
                  echo '<td class="text-center">'.$value["fecha_inicio"].'</td>';
                  echo '<td class="text-center">'.$value["fecha_cierre"].'</td>';
                  echo '<td class="text-center">'.$value["fecha_entrega_notas"].'</td>';
                  echo '<td class="text-center">

                  <button type="button" class="btn-xs btn-info" data-toggle="modal" data-target="#modal-editar"> <i class="fas fa-edit"></i></button>

                  <button type="button" class="btn-xs btn-danger" idPeriodo="'.$value["id_periodo"].'"> <i class="fas fa-lock"></i></button></td>';
                  echo "</tr>";


                }

                ?>


               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre periodo</th>
                 <th class="text-center">Fecha de inicio</th>
                 <th class="text-center">Fecha de cierre</th>
                 <th class="text-center">Fecha para entregar notas</th>
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
           <h3 class="text-primary"> Editar Curso <i class="fas fa-edit"></i></h3>
         </div>
         <div class="card-body">
             <table id="example2" class="table ">
               <thead class="table-info">
               <tr>
               <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre periodo</th>
                 <th class="text-center">Fecha de inicio</th>
                 <th class="text-center">Fecha de cierre</th>
                 <th class="text-center">Fecha para entregar notas</th>
                 <th class="text-center">Editar</th>
               </tr>
               </thead>
               <tbody>


                <?php  

                $period = PeriodController::ctrListarPeriodo();
                foreach($period as $value) {
                  
                  echo "<tr>";
                  
                  echo '<form action="" method="post">';

                  echo '<td class="text-center">'.$value["id_periodo"].'</td>';
                  echo '<input type="hidden" class="form-control" value="'.$value["id_periodo"].'" name="ideditar">';                 
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["nombre"].'" name="editarnombre"></td>';    
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["fecha_inicio"].'" name="editarfechai"></td>'; 
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["fecha_cierre"].'" name="editarfechac"></td>'; 
                  echo '<td class="text-center"><input type="text" class="form-control" value="'.$value["fecha_entrega_notas"].'" name="editafechae"></td>';        
                  echo '<td class="text-center">
                          <button type="submit" class="btn-xs btn-primary"><i class="fas fa-edit"></i></button>
                       </td>';

                       $editar = new PeriodController();
                       $editar->editPeriod();

                  echo '</form>';


                  echo "</tr>";

                }

                ?>

               </tbody>
               <tfoot>
               <tr>
               <th class="text-center" width="10px">#</th>
                 <th class="text-center">Nombre periodo</th>
                 <th class="text-center">Fecha de inicio</th>
                 <th class="text-center">Fecha de cierre</th>
                 <th class="text-center">Fecha para entregar notas</th>
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
         <h4 class="modal-title">Periodo <i class="fas fa-plus"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

          <div class="modal-body">


           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">Nombre <span class="text-danger">*</span></label>
               <input type="text" class="form-control" name="nombre" id="name" placeholder="Digíte el nombre del periodo">
             </div>
             <div class="form-group col-md-6">
               <label for="inicial_date">Fecha de inicio <span class="text-danger">*</span></label>
               <input type="date" class="form-control" name="fecha_inicio" id="inicial_date" placeholder="Digíte la fecha de inicio">
             </div>
           </div>

           <div class="form-row">

            <div class="form-group col-md-6">
              <label for="date">Fecha de cierre <span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="fecha_cierre" id="closed_date" placeholder="Digíte la fecha del cierre">
            </div>
             <div class="form-group col-md-6">
               <label for="date">Fecha para entregar notas <span class="text-danger">*</span></label>
               <input type="date" class="form-control" name="fecha_entrega_notas" id="send_date" placeholder="Digíte la fecha para entrega de notas">
             </div>
           </div>
          </div>

          <div class="modal-footer pull-right">
            <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
           <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
         </div>


         <?php 

             $period = new PeriodController();

             $period-> newPeriod();

          ?>

     </form>

     </div>
   </div>
 </div>
 <!-- /. modal de nuevo registro -->





 <!-- modal de nuevo editar 
 <div class="modal fade" id="modal-editar">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header bg-primary">
         <h4 class="modal-title">Periodo <i class="fas fa-edit"></i></h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
         </button>
       </div>

       <form action="" class="validar" method="post">

       <div class="modal-body">


<div class="form-row">
  <div class="form-group col-md-6">
    <label for="name">Nombre <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="nombre" id="name" placeholder="Digíte el nombre del periodo">
  </div>
  <div class="form-group col-md-6">
    <label for="inicial_date">Fecha de inicio <span class="text-danger">*</span></label>
    <input type="date" class="form-control" name="fecha_inicio" id="inicial_date" placeholder="Digíte la fecha de inicio">
  </div>
</div>

<div class="form-row">

 <div class="form-group col-md-6">
   <label for="date">Fecha de cierre <span class="text-danger">*</span></label>
   <input type="date" class="form-control" name="fecha_cierre" id="closed_date" placeholder="Digíte la fecha del cierre">
 </div>
  <div class="form-group col-md-6">
    <label for="date">Fecha para entregar notas <span class="text-danger">*</span></label>
    <input type="date" class="form-control" name="fecha_entrega_notas" id="send_date" placeholder="Digíte la fecha para entrega de notas">
  </div>
</div>
</div>

<div class="modal-footer pull-right">
 <button type="reset" class="btn btn-outline-secondary">Limpiar <i class="fas fa-backspace"></i></button>
<button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
</div> -->

<!-- 

     </form>

     </div>
   </div>
 </div> -->
 <!-- /. modal de nuevo registro 










