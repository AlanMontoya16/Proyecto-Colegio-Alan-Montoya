<?php 


 require_once "Connection.php";

 class Plan extends Connection {


 	public static function newPlan($nombre_actividad, $fecha_inicio, $fecha_cierre, $id_programacion, $id_dimension) {


 		$stmt = Connection::connect()->prepare("INSERT INTO plan_accion (nombre_actividad, fecha_inicio, fecha_cierre, id_programacion, id_dimension) 
         VALUES(:nombre_actividad, :fecha_inicio, fecha_cierre, :id_programacion, :id_dimension)");

 		$stmt->bindParam(":nombre_actividad", $nombre_actividad, PDO::PARAM_STR);
 		$stmt->bindParam(":fecha_inicio", $fecha_inicio, PDO::PARAM_STR);
 		$stmt->bindParam(":fecha_cierre", $id_usuario, PDO::PARAM_STR);
 		$stmt->bindParam(":id_programacion", $id_programacion, PDO::PARAM_STR);
        $stmt->bindParam(":id_dimension", $id_dimension, PDO::PARAM_STR);



        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editPlan($id_plan, $nombre_actividad, $fecha_inicio, $fecha_cierre, $id_programacion, $id_dimension) {


 			$stmt = Connection::connect()->prepare("UPDATE plan SET nombre_actividad = :nombre_actividad, fecha_inicio = :fecha_inicio,
			fecha_cierre = :fecha_cierre, id_programacion = :id_programacion, id_dimension = :id_dimension WHERE id_plan = :id_plan ");

             $stmt->bindParam(":id_dimension", $id_plan, PDO::PARAM_STR);
             $stmt->bindParam(":nombre_actividad", $nombre_actividad, PDO::PARAM_STR);
             $stmt->bindParam(":fecha_inicio", $fecha_inicio, PDO::PARAM_STR);
             $stmt->bindParam(":fecha_cierre", $id_usuario, PDO::PARAM_STR);
             $stmt->bindParam(":id_programacion", $id_programacion, PDO::PARAM_STR);
             $stmt->bindParam(":id_dimension", $id_dimension, PDO::PARAM_STR);


 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarPlan() {

		 $stmt = Connection::connect()->prepare("Select plan_accion.id_plan, plan_accion.nombre_actividad, plan_accion.fecha_inicio, plan_accion.fecha_cierre, programacion.nombre as nombre_programacion, dimension.nombre from plan_accion inner join programacion on plan_accion.id_programacion = programacion.id_programacion inner join dimension on plan_accion.id_dimension = dimension.id_dimension");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }