<?php

  class GuardianController {



  	public static function newGuardian() {

  		if (isset($_POST["nombre"])) {
  			
  			$nombre = $_POST["nombre"];

  			$apellido = $_POST["apellido"];

  			$documento = $_POST["documento"];

  			$correo = $_POST["correo"];

  			$telefono = $_POST["telefono"];


  			$guardian = Guardian::newGuardian($nombre, $apellido, $documento, $correo, $telefono);


  			if ($guardian == "true") {
  				
  				echo "<div class='alert-success'>
  					Usuario Registrado correctamente
  				</div>";

  			}else {
               
                echo "<div class='alert-danger'>
                	Usuario no registrado
                </div>";

  			}
  		}
  	}

  	public static function ctrListarAcudiente() {
     
     $guardian = Guardian::listarGuardian();

     return $guardian;

  	}

      public static function editGuardian() {

            if (isset($_POST["ideditar"])) {

              $id = $_POST["ideditar"];
              
              $nombre = $_POST["editarnombre"];

              $apellido = $_POST["editarapellido"];

              $documento = $_POST["editardocumento"];

              $correo = $_POST["editarcorreo"];

              $telefono = $_POST["editartelefono"];


              $guardian = Guardian::editGuardian($id, $nombre, $apellido, $documento, $correo, $telefono);


              if ($guardian == "true") {
                
                echo'<script>
 
                window.location = "acudientes"; 

                    </script>';

              }else {
                     
                echo'<script>
 
                     window.location = "acudientes"; 

                    </script>';

              }
            }
    }

    public static function inactivarAcudiente() {

      if(isset($_POST["idinactivar"])){

        $id = $_POST["idinactivar"];

        $acudiente = Guardian::inactivarAcudiente($id);

        if($acudiente == "ok") {

          echo'<script>
 
                window.location = "acudientes"; 

            </script>';

        }

      }
    }


    public static function activarAcudiente() {

      if(isset($_POST["idactivar"])){

        $id = $_POST["idactivar"];

        $acudiente = Guardian::activarAcudiente($id);

        if($acudiente == "ok") {

          echo'<script>
 
                window.location = "acudientes"; 

            </script>';

        }

      }
    }


  }