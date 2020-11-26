<?php 


 require_once "Connection.php";

 class Grade extends Connection {


 	public static function newGrade($n_curso) {


 		$stmt = Connection::connect()->prepare("INSERT INTO curso(n_curso) VALUES(:n_curso)");

 		$stmt->bindParam(":n_curso", $n_curso, PDO::PARAM_STR);



        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editGrade($n_curso) {


 			$stmt = Connection::connect()->prepare("UPDATE curso SET n_curso = :n_curso WHERE id_curso = :id_curso");

 			$stmt->bindParam(":n_curso", $n_curso, PDO::PARAM_STR);



 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarGrade() {

 		$stmt = Connection::connect()->prepare("SELECT * FROM curso");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }