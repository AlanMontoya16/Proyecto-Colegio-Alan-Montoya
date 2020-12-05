<?php 


 require_once "Connection.php";

 class Programming extends Connection {


 	public static function newProgramming($nombre, $estado, $id_usuario, $id_curso, $id_periodo,
     $id_asignatura, $fecha_programacion, $hora_programacion) {


 		$stmt = Connection::connect()->prepare("INSERT INTO programacion(nombre, estado, id_usuario, id_curso, id_periodo,
          id_asignatura, fecha_programacion, hora_programacion) VALUES(:nombre, :estado, :id_usuario, :id_curso, :id_periodo,
           :id_asignatura, :fecha_programacion, :hora_programacion)");

 		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
 		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
 		$stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
 		$stmt->bindParam(":id_curso", $id_curso, PDO::PARAM_STR);
        $stmt->bindParam(":id_periodo", $id_periodo, PDO::PARAM_STR);
        $stmt->bindParam(":id_asignatura", $id_asignatura, PDO::PARAM_STR);
 		$stmt->bindParam(":fecha_programacion", $fecha_programacion, PDO::PARAM_STR);
 		$stmt->bindParam(":hora_programacion", $hora_programacion, PDO::PARAM_STR);


        if ($stmt->execute()) {

        	return "true";
        	
        }else {

        	return "false";
        }


        $stmt->close();

        $stmt = null;
 		
 	}



 		public static function editProgramming($id_programacion,$nombre, $id_usuario, $id_curso, $id_periodo,
         $id_asignatura, $fecha_programacion, $hora_programacion) {


 			$stmt = Connection::connect()->prepare("UPDATE programacion SET nombre = :nombre, id_usuario = :id_usuario, id_curso = :id_curso, id_periodo = :id_periodo,
			id_asignatura = :id_asignatura, fecha_programacion = :fecha_programacion, hora_programacion = :hora_programacion  WHERE id_programacion = :id_programacion ");

			 $stmt->bindParam(":id_programacion", $id_programacion, PDO::PARAM_STR);
             $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
             $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
             $stmt->bindParam(":id_curso", $id_curso, PDO::PARAM_STR);
             $stmt->bindParam(":id_periodo", $id_periodo, PDO::PARAM_STR);
             $stmt->bindParam(":id_asignatura", $id_asignatura, PDO::PARAM_STR);
             $stmt->bindParam(":fecha_programacion", $fecha_programacion, PDO::PARAM_STR);
             $stmt->bindParam(":hora_programacion", $hora_programacion, PDO::PARAM_STR);


 	       if ($stmt->execute()) {

 	       	return "true";
 	       	
 	       }else {

 	       	return "false";
 	       }


 	       $stmt->close();

 	       $stmt = null;
 			
 		}



 	public static function listarProgramming() {

 		$stmt = Connection::connect()->prepare("SELECT programacion.id_programacion, programacion.nombre AS nombreP, programacion.estado, usuario.nombre AS nombreU, curso.n_curso, periodo.nombre AS nombrePe, asignatura.nombre as nombreS, fecha_programacion, hora_programacion FROM programacion INNER JOIN usuario ON programacion.id_usuario = usuario.id_usuario INNER JOIN asignatura ON asignatura.id_asignatura = programacion.id_programacion INNER JOIN periodo ON programacion.id_periodo = periodo.id_periodo INNER JOIN curso ON programacion.id_curso = curso.id_curso");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}

	 public static function inactivarProgramacion($id_programacion) {

		$stmt = Connection::connect()->prepare("UPDATE programacion SET estado = 'Inactivo' where id_Programacion = :id_programacion");

		$stmt-> bindParam(":id_programacion", $id_programacion, PDO::PARAM_STR);

		if($stmt-> execute()){

			return "ok";

		}else {

			return "false";
		}

		$stmt = close();

		$stmt = null;
	 }
	 

	 public static function activarProgramacion($id_programacion) {

		$stmt = Connection::connect()->prepare("UPDATE programacion SET estado = 'Activo' where id_Programacion = :id_programacion");

		$stmt-> bindParam(":id_programacion", $id_programacion, PDO::PARAM_STR);

		if($stmt-> execute()){

			return "ok";

		}else {

			return "false";
		}

		$stmt = close();

		$stmt = null;
	}
 }