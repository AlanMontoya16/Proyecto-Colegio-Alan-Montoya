<?php 


 require_once "Connection.php";

 class Dimension extends Connection {


 	public static function newDimension($nombre, $estado) {


 		$stmt = Connection::connect()->prepare("INSERT INTO dimension(nombre, estado) VALUES(:nombre, :estado)");

 		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
 		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);



        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editDimension($nombre, $estado) {


 			$stmt = Connection::connect()->prepare("UPDATE dimension SET nombre = :nombre, estado = :estado WHERE id_dimension = :id_dimension");

 			$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
 			$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);



 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarDimension() {

 		$stmt = Connection::connect()->prepare("SELECT * FROM dimension");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }