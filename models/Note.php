<?php 


 require_once "Connection.php";

 class Note extends Connection {


 	public static function newNote($nota, $id_plan) {


 		$stmt = Connection::connect()->prepare("INSERT INTO nota(nota, id_plan) VALUES(:nota, :id_plan)");

 		$stmt->bindParam(":nota", $nota, PDO::PARAM_STR);
 		$stmt->bindParam(":id_plan", $id_plan, PDO::PARAM_STR);

        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editNote($nota, $id_plan) {


 			$stmt = Connection::connect()->prepare("UPDATE nota SET nota = :nota, id_plan = :id_plan WHERE id_nota = :id_nota");

 			$stmt->bindParam(":nota", $nota, PDO::PARAM_STR);
 			$stmt->bindParam(":id_plan", $id_plan, PDO::PARAM_STR);



 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarNote() {

 		$stmt = Connection::connect()->prepare("Select * from nota inner join plan_accion on nota.id_plan = plan_accion.id_plan");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }