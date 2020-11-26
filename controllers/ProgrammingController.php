<?php

  class ProgrammingController {



  	public static function newProgramming() {

  		if (isset($_POST["nombre"])) {
  			
  			$nombre = $_POST["nombre"];

  			$estado = $_POST["estado"];

  			$id_usuario = $_POST["id_usuario"];

  			$id_curso = $_POST["id_curso"];

            $id_periodo = $_POST["id_periodo"];

            $id_asignatura = $_POST["id_asignatura"];

            $fecha_programacion = $_POST["fecha_programacion"];

            $hora_programacion = $_POST["hora_programacion"];
              


              $programming = Programming::newProgramming($nombre, $estado, $id_usuario, $id_curso, $id_periodo,
               $id_asignatura, $fecha_programacion, $hora_programacion);


  			if ($programming == "true") {
  				


          echo "


            <script>

             Swal.fire({
               icon: 'success',
               title: '¡Operación realizada correctamente!',
             })


          </script>";


  			}else {
               
                echo "<div class='alert-danger'>
                	Programación no registrada
                </div>";

  			}
  		}
  	}

  	public static function ctrListarProgramacion() {
     
     $programming = Programming::listarProgramming();

     return $programming;

  	}

      public static function editProgramming() {

            if (isset($_POST["editarnombre"])) {
              
                $nombre = $_POST["editarnombre"];

                $estado = $_POST["editarestado"];
  
                $id_usuario = $_POST["editarid_usuario"];
  
                $id_curso = $_POST["editarid_curso"];
  
              $id_periodo = $_POST["editarid_periodo"];
  
              $id_asignatura = $_POST["editarid_asignatura"];
  
              $fecha_programacion = $_POST["editarfecha_programacion"];
  
              $hora_programacion = $_POST["editarhora_programacion"];


              $programming = Programming::editProgramming($nombre, $estado, $id_usuario, $id_curso, $id_periodo,
              $id_asignatura, $fecha_programacion, $hora_programacion);


              if ($programming == "true") {
                
                echo "<div class='alert-success'>
                Programación Registrada correctamente
                </div>";

              }else {
                     
                      echo "<div class='alert-danger'>
                      Programación no registrada
                      </div>";

              }
            }
    }



  }