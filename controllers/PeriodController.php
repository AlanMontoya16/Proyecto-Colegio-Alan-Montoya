<?php

  class PeriodController {



  	public static function newPeriod() {

  		if (isset($_POST["nombre"])) {
  			
  			$nombre = $_POST["nombre"];

  			$fecha_inicio = $_POST["fecha_inicio"];

  			$fecha_cierre = $_POST["fecha_cierre"];

  			$fecha_entrega_notas = $_POST["fecha_entrega_notas"];



  			$period = Period::newPeriod($nombre, $fecha_inicio, $fecha_cierre, $fecha_entrega_notas);


  			if ($period == "true") {
  				
  				echo "<div class='alert-success'>
  					Periodo Registrado correctamente
  				</div>";

  			}else {
               
                echo "<div class='alert-danger'>
                	Periodo no registrado
                </div>";

  			}
  		}
  	}

  	public static function ctrListarPeriodo() {
     
     $period = Period::listarPeriod();

     return $period;

  	}

      public static function editPeriod() {

            if (isset($_POST["ideditar"])) {

              $id_periodo = $_POST["ideditar"];
              
              $nombre = $_POST["editarnombre"];

  			      $fecha_inicio = $_POST["editarfechai"];

  		      	$fecha_cierre = $_POST["editarfechac"];

  			      $fecha_entrega_notas = $_POST["editarfechae"];


              $period = Period::editPeriod($id_periodo, $nombre, $fecha_inicio, $fecha_cierre, $fecha_entrega_notas);


              if ($period == "true") {
                
                echo'<script>
    
                window.location = "periodo"; 
    
                    </script>';

              }else {
                 
                echo'<script>
    
                     window.location = "periodo"; 
    
                    </script>';

              }
            }
    }



  }