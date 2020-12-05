<?php

  class PlanController {



  	public static function newPlan() {

  		if (isset($_POST["nombre_actividad"])) {
  			
  			$nombre_actividad = $_POST["nombre_actividad"];

  			$fecha_inicio = $_POST["fecha_inicio"];

  			$fecha_cierre = $_POST["fecha_cierre"];

  			$id_programacion = $_POST["id_programacion"];

            $id_dimension = $_POST["id_dimension"];



              $plan = Plan::newPlan($nombre_actividad, $fecha_inicio, $fecha_cierre, $id_programacion, $id_dimension);


  			if ($plan == "true") {
  				


          echo "


            <script>

             Swal.fire({
               icon: 'success',
               title: '¡Operación realizada correctamente!',
             })


          </script>";


  			}else {
               
                echo "<div class='alert-danger'>
                	Plan no registrado
                </div>";

  			}
  		}
  	}

  	public static function ctrListarPlan() {
     
     $plan = Plan::listarPlan();

     return $plan;

  	}

      public static function editPlan() {

            if (isset($_POST["ideditar"])) {
              
                $id_plan = $_POST ["ideditar"];

                $nombre = $_POST["editarnombre"];

                $fecha_inicio = $_POST["editarfechai"];
  
                $fecha_cierre = $_POST["editarfechac"];
  
                $id_programacion = $_POST["editarprogramacion"];
  
                $id_dimension = $_POST["editardimension"];
  

              $plan = Plan::editPlan($id_plan, $nombre_actividad, $fecha_inicio, $fecha_cierre, $id_programacion, $id_dimension);


              if ($plan == "true") {
                
                echo'<script>
    
                window.location = "plan"; 
    
                    </script>';
    
              }else {
                     
                echo'<script>
    
                     window.location = "plan"; 
    
                    </script>';

              }
            }
    }



  }