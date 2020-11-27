
<?php

  class UserController {


  	public static function login() {
       
       if(isset($_POST["email"])){

       	

	        
	        $email = $_POST["email"];

			$password = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			

	       	$user = User::login($email, $password);

	       	if (@$user["correo"] == $_POST["email"] && @$user["clave"] == $password) {

         
	       			       		
            $_SESSION["signIn"] = "true";
            

            $_SESSION["nombre"] = $user["nombre"];

            $_SESSION["apellido"] = $user["apellido"];

            $_SESSION["rol"] = $user["rol"];



            echo'<script>
 
                window.location = "inicio"; 

            </script>';



          }else {

	       		echo '<div class="alert-danger" role="alert">
	       			Credenciales incorrectas
	       		</div>';
	       	}


       }
  	}


    public static function ctrListarUsuario() {

      $user = User::listarUsuario();
      
      return $user;

    }

	public static function editUser() {

		if (isset($_POST["ideditar"])) {
	
		  $id = $_POST["ideditar"];
		  
		  $nombre = $_POST["editarnombre"];
	
		  $apellido = $_POST["editarapellido"];
	
		  $documento = $_POST["editarDoc"];
	
		  $correo = $_POST["editarNDoc"];
	
		  $telefono = $_POST["editarcelular"];
	
		  $telefono = $_POST["editarrol"];
	
		  $telefono = $_POST["editarcorreo"];
	
		  $telefono = $_POST["editardireccion"];
	
	
		  $user = User::editUser($id, $name, $surname, $address, $typeDoc, $document, $role, $email, $cellphone);
	
	
		  if ($user == "true") {
			
			echo'<script>
	
			window.location = "usuarios"; 
	
				</script>';
	
		  }else {
				 
			echo'<script>
	
				 window.location = "usuarios"; 
	
				</script>';
	
		  }
		}
	}
  	public static function new() {

  		if (isset($_POST["name"])) {
  			

  			$name = $_POST["name"];

			$surname = $_POST["surname"];
			  
			$address = $_POST["address"];
			
			$typeDoc = $_POST["typeDoc"];

			$document = $_POST["document"];

			$role = $_POST["role"];

  			$email = $_POST["email"];

			$cellphone = $_POST["cellphone"];


			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $password1 = "";

            for($i=0; $i<=9; $i++) {
               
               //obtenemos un caracter aleatorio escogido de la cadena de caracteres
               $password1 .= substr($str,rand(0,62),1);     
            }

			$encriptar = crypt($password1, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			echo $password1;
		
			  
            


  			$user = User::new($name, $surname, $encriptar, $address, $typeDoc, $document, $role, $email, $cellphone);

  			if ($user == "true") {
  				
  				echo "<div class='alert-success'>

  					Usuario registrado correctamente

  				  </div>";

  			}else {

  				echo "<div class='alert-danger'>
  					error al registrar
  				</div> ";
  			}
  	}

  }
 }