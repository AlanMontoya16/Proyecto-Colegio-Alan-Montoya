<?php 


 require_once "Connection.php";

 class Role extends Connection {


 	public static function newRole($nombre, $estado) {


 		$stmt = Connection::connect()->prepare("INSERT INTO rol(nombre, estado) 
         VALUES(:nombre, :estado)");

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



 		public static function editRole($nombre, $estado) {


 			$stmt = Connection::connect()->prepare("UPDATE rol SET nombre = :nombre
               WHERE estado = :estado");

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



 	public static function listarRole() {

 		$stmt = Connection::connect()->prepare("SELECT * FROM rol");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }