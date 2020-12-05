<?php

  class DegreeController {



  	public static function newDegree() {

  		if (isset($_POST["nombre"])) {
  			
  			$nombre = $_POST["nombre"];
  			$degree = Degree::newDegree($nombre);


  			if ($degree == "true") {
  				
  				echo "<div class='alert-success'>
  					Grado Registrado correctamente
  				</div>";

  			}else {
               
                echo "<div class='alert-danger'>
                	Grado no registrado
                </div>";

  			}
  		}
  	}

  	public static function ctrListarGrado() {
     
     $degree = Degree::listarDegree();

     return $degree;

  	}

      public static function editDegree() {

            if (isset($_POST["ideditar"])) {

              $id_grado = $_POST["ideditar"];
              $nombre = $_POST["editarnombre"];



              $degree = Degree::editDegree($id_grado ,$nombre);


              if ($degree == "true") {
                
                echo'<script>

            window.location = "grado"; 

                </script>';

          }else {
                 
            echo'<script>

                 window.location = "grado"; 

                </script>';
              }
            }
    }



  }