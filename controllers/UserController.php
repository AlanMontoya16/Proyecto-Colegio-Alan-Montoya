
<?php

  class UserController {


  	public static function login() {
       
       if(isset($_POST["email"])){

       	

	        
	        $email = $_POST["email"];

	       	$password = $_POST["password"];

	       	$user = User::login($email, $password);


	       	if (@$user["EMAIL"] == $_POST["email"] && @$user["PASSWORD"] == $_POST["password"]) {

         
	       			       		
            $_SESSION["signIn"] = "true";

            echo'<script>
 
                window.location = "home"; 

            </script>';



          }else {

	       		echo '<div class="alert-danger" role="alert">
	       			Credenciales incorrectas
	       		</div>';
	       	}


       }
  	}


  	public static function new() {

  		if (isset($_POST["name"])) {
  			

  			$name = $_POST["name"];

  			$surname = $_POST["surname"];

  			$gender = $_POST["gender"];

  			$birthdate = $_POST["birthdate"];

  			$email = $_POST["email"];

  			$cellphone = $_POST["cellphone"];


  			$user = User::new($name, $surname, $gender, $birthdate, $email, $cellphone);

  			if ($user == "true") {
  				
  				echo "<div class='alert-success'>

  					Usuario registrado correctamente

  				  </div>";

  			}else {

  				echo "<div>
  					error 
  				</div> ";
  			}
  	}

  }

 }