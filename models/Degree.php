<?php 


 require_once "Connection.php";

 class Degree extends Connection {


 	public static function newDegree($nombre) {


 		$stmt = Connection::connect()->prepare("INSERT INTO grado(nombre) VALUES(:nombre)");

 		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);



        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editDegree($nombre) {


 			$stmt = Connection::connect()->prepare("UPDATE grado SET nombre = :nombre WHERE id_grado = :id_grado");

 			$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);



 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarDegree() {

 		$stmt = Connection::connect()->prepare("SELECT * FROM grado");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }