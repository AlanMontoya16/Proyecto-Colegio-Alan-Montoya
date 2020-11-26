<?php

  class RoleController {



  	public static function newRole() {

  		if (isset($_POST["nombre"])) {
  			
  			$nombre = $_POST["nombre"];

  			$estado = $_POST["estado"];




  			$role = Role::newRole($nombre, $estado);


  			if ($role == "true") {
  				
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

  	public static function ctrListarRol() {
     
     $role = Role::listarRole();

     return $role;

  	}

      public static function editRole() {

            if (isset($_POST["editarnombre"])) {
              
              $nombre = $_POST["editarnombre"];

              $estado = $_POST["editarestado"];


              $role = Role::editRole($nombre, $estado);


              if ($role == "true") {
                
                echo "<div class='alert-success'>
                  Usuario actualizado correctamente
                </div>";

              }else {
                     
                      echo "<div class='alert-danger'>
                        Usuario no actualizado
                      </div>";

              }
            }
    }



  }