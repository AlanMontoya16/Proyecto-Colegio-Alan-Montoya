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

    public static function new($name, $surname, $gender, $birthdate, $email, $cellphone) {

      $stmt = Connection::connect()->prepare("INSERT INTO USER (NAME, SURNAME, GENDER, BIRTHDATE, EMAIL, CELLPHONE) VALUES (:name, :surname, :gender, :birthdate, :email, :cellphone);");

      $stmt->bindParam(":name", $name, PDO::PARAM_STR);
      $stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
      $stmt->bindParam(":gender", $gender, PDO::PARAM_STR);
      $stmt->bindParam(":birthdate", $birthdate, PDO::PARAM_STR);
      $stmt->bindParam(":email", $email, PDO::PARAM_STR);
      $stmt->bindParam(":cellphone", $cellphone, PDO::PARAM_STR);

      if ($stmt->execute()) {
         
         return "true";

      }else {
         
         return "false";

      }

    }


  }