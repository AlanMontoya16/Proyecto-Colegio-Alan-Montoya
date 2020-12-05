<?php 


 require_once "Connection.php";

 class Period extends Connection {


 	public static function newPeriod($id_periodo,$nombre, $fecha_inicio, $fecha_cierre, $fecha_entrega_notas) {


 		$stmt = Connection::connect()->prepare("INSERT INTO periodo(id_periodo, nombre, fecha_inicio, fecha_cierre, fecha_entrega_notas) VALUES(:id_periodo,:nombre, :fecha_inicio, :fecha_cierre, :fecha_entrega_notas)");

		$dtmt->bindParam(":id_periodo", $id_periodo, PDO::PARAM_STR);
 		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
 		$stmt->bindParam(":fecha_inicio", $fecha_inicio, PDO::PARAM_STR);
 		$stmt->bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
 		$stmt->bindParam(":fecha_entrega_notas", $fecha_entrega_notas, PDO::PARAM_STR);

        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editPeriod($nombre, $fecha_inicio, $fecha_cierre, $fecha_entrega_notas) {


 			$stmt = Connection::connect()->prepare("UPDATE periodo SET nombre = :nombre, fecha_inicio = :fecha_inicio, fecha_cierre = :fecha_cierre, fecha_entrega_notas = :fecha_entrega_notas WHERE id_periodo = :id_periodo");

             $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
             $stmt->bindParam(":fecha_inicio", $fecha_inicio, PDO::PARAM_STR);
             $stmt->bindParam(":fecha_cierre", $fecha_cierre, PDO::PARAM_STR);
             $stmt->bindParam(":fecha_entrega_notas", $fecha_entrega_notas, PDO::PARAM_STR);


 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarPeriod() {

 		$stmt = Connection::connect()->prepare("SELECT * FROM periodo");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }