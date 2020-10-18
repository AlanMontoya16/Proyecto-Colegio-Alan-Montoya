<?php

  require_once "Connection.php";

  class User extends Connection {

  	
  	public static function login($email, $password){
		
  		$stmt = Connection::connect()->prepare("SELECT * FROM USER WHERE email = :email AND password = :password;");

  		$stmt-> bindParam(":email", $email, PDO::PARAM_STR);

  		$stmt-> bindParam(":password", $password, PDO::PARAM_STR);

  		$stmt->execute();

  		return $stmt-> fetch();

  		$stmt-> close();

  		$stmt = null;

  	}


  }