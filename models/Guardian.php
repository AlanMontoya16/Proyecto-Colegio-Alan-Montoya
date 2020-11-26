<?php 


 require_once "Connection.php";

 class Guardian extends Connection {


 	public static function newGuardian($nombre, $apellido, $documento, $correo, $telefono) {


 		$stmt = Connection::connect()->prepare("INSERT INTO acudiente(nombre, apellido, telefono, correo, n_documento) VALUES(:nombre, :apellido, :telefono, :correo, :documento)");

 		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
 		$stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
 		$stmt->bindParam(":documento", $documento, PDO::PARAM_STR);
 		$stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
 		$stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);


        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editGuardian($id, $nombre, $apellido, $documento, $correo, $telefono) {


 			$stmt = Connection::connect()->prepare("UPDATE acudiente SET nombre = :nombre, apellido = :apellido, correo = :correo, telefono = :telefono, n_documento = :documento WHERE id_acudiente = :id");

			$stmt->bindParam(":id", $id, PDO::PARAM_STR);
 			$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
 			$stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
 			$stmt->bindParam(":documento", $documento, PDO::PARAM_STR);
 			$stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
 			$stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);


 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarGuardian() {

 		$stmt = Connection::connect()->prepare("SELECT * FROM acudiente");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
	 }


	 public static function inactivarAcudiente($id) {

		$stmt = Connection::connect()->prepare("UPDATE acudiente SET estado = 'I' where id_Acudiente = :id");

		$stmt-> bindParam(":id", $id, PDO::PARAM_STR);

		if($stmt-> execute()){

			return "ok";

		}else {

			return "false";
		}

		$stmt = close();

		$stmt = null;
	 }
	 

	 public static function activarAcudiente($id) {

		$stmt = Connection::connect()->prepare("UPDATE acudiente SET estado = 'A' where id_Acudiente = :id");

		$stmt-> bindParam(":id", $id, PDO::PARAM_STR);

		if($stmt-> execute()){

			return "ok";

		}else {

			return "false";
		}

		$stmt = close();

		$stmt = null;
	 }
	 




 
	
	
	
	
	
	}