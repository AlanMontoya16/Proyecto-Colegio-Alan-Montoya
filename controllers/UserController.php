
<?php

  class UserController {


  	public static function login() {
       
       if(isset($_POST["email"])){

	        
	        $email = $_POST["email"];

	       	$password = $_POST["password"];

	       	$user = User::login($email, $password);


	       	if (@$user["EMAIL"] == $_POST["email"] && @$user["PASSWORD"] == $_POST["password"]) {
	       		
	       		echo '<div class="alert-success" role="alert" >
	       			Bienvenido
	       		</div>';

	       	}else {

	       		echo '<div class="alert-danger" role="alert">
	       			Credenciales incorrectas
	       		</div>';
	       	}


       }
  	}

  }