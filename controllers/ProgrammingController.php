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

            if (isset($_POST["ideditar"])) {

              $id_programacion = $_POST["ideditar"];
              
              $nombre = $_POST["editarnombre"];
  
              $id_usuario = $_POST["editarusuario"];
  
              $id_curso = $_POST["editarcurso"];
  
              $id_periodo = $_POST["editarperiodo"];
  
              $id_asignatura = $_POST["editarasignatura"];
  
              $fecha_programacion = $_POST["editarfecha"];
  
              $hora_programacion = $_POST["editarhora"];


              $programming = Programming::editProgramming($id_programacion,$nombre, $id_usuario, $id_curso, $id_periodo,
              $id_asignatura, $fecha_programacion, $hora_programacion);


              if ($programming == "true") {
                
                echo'<script>
    
                window.location = "programacion"; 
    
                    </script>';
    
              }else {
                     
                echo'<script>
    
                     window.location = "programacion"; 
    
                    </script>';

              }
            }
    }
    public static function inactivarProgramacion() {

      if(isset($_POST["idinactivar"])){

        $id_programacion = $_POST["idinactivar"];

        $programacion = Programming::inactivarProgramacion($id_programacion);

        if($programacion == "ok") {

          echo'<script>
 
                window.location = "programacion"; 

            </script>';

        }

      }
    }


    public static function activarProgramacion() {

      if(isset($_POST["idactivar"])){

        $id_programacion = $_POST["idactivar"];

        $programacion = Programming::activarProgramacion($id_programacion);

        if($programacion == "ok") {

          echo'<script>
 
                window.location = "programacion"; 

            </script>';

        }

      }
    }


  }


  