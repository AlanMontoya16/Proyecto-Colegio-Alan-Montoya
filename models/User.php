<?php

  require_once "Connection.php";

  class User extends Connection {

  	
  	public static function login($email, $password){
		
  		$stmt = Connection::connect()->prepare("select usuario.id_usuario, usuario.nombre, usuario.apellido, usuario.correo, usuario.clave, rol.nombre as rol from usuario inner join rol on usuario.id_rol = rol.id_rol WHERE correo = :email AND clave = :password;");

  		$stmt-> bindParam(":email", $email, PDO::PARAM_STR);
  		$stmt-> bindParam(":password", $password, PDO::PARAM_STR);

  		$stmt->execute();

  		return $stmt-> fetch();

  		$stmt-> close();

  		$stmt = null;

  	}

    public static function new($name, $surname, $encriptar, $address, $typeDoc, $document, $role, $email, $cellphonee) {

      $stmt = Connection::connect()->prepare("INSERT INTO USUARIO (NOMBRE, APELLIDO, CLAVE, CELULAR, ID_TIPO, N_DOCUMENTO, ID_ROL, CORREO, DIRECCION) VALUES (:name, :surname, :password, :cellphone, :typeDoc, :document, :role, :email, :address)");

      
      $stmt->bindParam(":name", $name, PDO::PARAM_STR);
      $stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
      $stmt->bindParam(":address", $address, PDO::PARAM_STR);
      $stmt->bindParam(":typeDoc", $typeDoc, PDO::PARAM_STR);
      $stmt->bindParam(":document", $document, PDO::PARAM_STR);
      $stmt->bindParam(":role", $role, PDO::PARAM_STR);
      $stmt->bindParam(":email", $email, PDO::PARAM_STR);
      $stmt->bindParam(":cellphone", $cellphone, PDO::PARAM_STR);
      $stmt->bindParam(":password", $encriptar, PDO::PARAM_STR);

      if ($stmt->execute()) {
         
         return "true";

      }else {
         
         return "false";

      }

      $stmt->close();

      $stmt = null;
      

    }




    public static function editUser($id, $nombre, $apellido, $documento, $Numdocumento, $celular, $rol, $correo, $direccion) {


      $stmt = Connection::connect()->prepare("UPDATE usuario SET nombre = :name, apellido = :surname, direccion = :address, id_tipo = :typeDoc, n_documento = :document, id_rol = :role, correo = :email, celular = :cellphone WHERE id_usuario = :id");

      $stmt->bindParam(":id", $id, PDO::PARAM_STR);
      $stmt->bindParam(":name", $nombre, PDO::PARAM_STR);
      $stmt->bindParam(":surname", $apellido, PDO::PARAM_STR);
      $stmt->bindParam(":address", $direccion, PDO::PARAM_STR);
      $stmt->bindParam(":typeDoc", $documento, PDO::PARAM_STR);
      $stmt->bindParam(":document", $Numdocumento, PDO::PARAM_STR);
      $stmt->bindParam(":role", $rol, PDO::PARAM_STR);
      $stmt->bindParam(":email", $correo, PDO::PARAM_STR);
      $stmt->bindParam(":cellphone", $celular, PDO::PARAM_STR);

         if ($stmt->execute()) {

           return "true";
           
         }else {

           return "false";

         }

         $stmt->close();

         $stmt = null;
      
    }


    public static function listarUsuario() {

      $stmt = Connection::connect()->prepare("SELECT usuario.id_usuario, usuario.nombre as nombreUsuario, usuario.apellido, usuario.celular, usuario.n_documento, usuario.correo, usuario.direccion, rol.nombre as nombreRol, tipo_documento.nombre as nombreDoc FROM usuario inner join rol on usuario.id_rol = rol.id_rol inner join tipo_documento on usuario.id_tipo = tipo_documento.id_tipo");

      $stmt->execute();

      return $stmt-> fetchAll();

      $stmt-> close();
      
      $stmt = null;

    } 


  }