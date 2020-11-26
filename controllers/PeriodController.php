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

            if (isset($_POST["editarnombre"])) {
              
              $nombre = $_POST["editarnombre"];


  			$fecha_inicio = $_POST["editarfecha_inicio"];

  			$fecha_cierre = $_POST["editarfecha_cierre"];

  			$fecha_entrega_notas = $_POST["editarfecha_entrega_notas"];


              $period = Period::editPeriod($nombre, $fecha_inicio, $fecha_cierre, $fecha_entrega_notas);


              if ($period == "true") {
                
                echo "<div class='alert-success'>
                  Periodo actualizado correctamente
                </div>";

              }else {
                     
                      echo "<div class='alert-danger'>
                        Periodo no actualizado
                      </div>";

              }
            }
    }



  }