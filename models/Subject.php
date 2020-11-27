<?php 
require_once "Connection.php";

class Subject extends Connection {

    public static function newSubject($nombre, $id_grado) {

        $stmt = Connection::connect()->prepare("INSERT INTO asignatura(nombre,id_grado) VALUES (:nombre,:id_grado)" );
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":id_grado", $id_grado, PDO::PARAM_STR);
        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
     }
     public static function editSubject($id_asignatura, $nombre, $id_grado) {
        $stmt = Connection::connect()->prepare("UPDATE asignatura SET nombre = :nombre, id_grado = :id_grado WHERE id_asignatura = :id_asignatura" );
        $stmt->bindParam(":id_asignatura", $id_asignatura, PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":id_grado", $id_grado, PDO::PARAM_STR);
        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;

     }
     public static function listarAsignatura(){
        $stmt = Connection::connect()->prepare("SELECT * FROM asignatura");

        $stmt->execute();
  
        return $stmt-> fetchAll();
  
        $stmt-> close();
        
        $stmt = null;
  
     }
    }

