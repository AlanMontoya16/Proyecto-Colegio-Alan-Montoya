<?php 


 require_once "Connection.php";

 class Programming extends Connection {


 	public static function newProgramming($nombre, $estado, $id_usuario, $id_curso, $id_periodo,
     $id_asignatura, $fecha_programacion, $hora_programacion) {


 		$stmt = Connection::connect()->prepare("INSERT INTO programacion(nombre, estado, id_usuario, id_curso, id_periodo,
          id_asignatura, fecha_programación, hora_programacion) VALUES(:nombre, :estado, :id_usuario, :id_curso, :id_periodo,
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



 		public static function editProgramming($nombre, $estado, $id_usuario, $id_curso, $id_periodo,
         $id_asignatura, $fecha_programacion, $hora_programacion) {


 			$stmt = Connection::connect()->prepare("UPDATE programacion SET nombre = :nombre, estado = :estado, id_usuario = :id_usuario, id_curso = :id_curso, id_periodo = :id_periodo, id_asignatura = :id_asignatura, fecha_programacion = :fecha_programacion  WHERE hora_programacion = :hora_programacion");

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



 	public static function listarProgramming() {

 		$stmt = Connection::connect()->prepare("select programacion.id_programacion, programacion.nombre as nombreP, programacion.estado, usuario.nombre as nombreU, curso.n_curso, periodo.nombre as nombrePe, asignatura.nombre as nombreS, fecha_programación, hora_programacion from programacion inner join usuario on programacion.id_usuario = usuario.id_usuario inner join asignatura on asignatura.id_asignatura = programacion.id_programacion inner join periodo on programacion.id_periodo = periodo.id_periodo inner join curso on programacion.id_curso = curso.id_curso");

 		$stmt->execute();

 	    return $stmt-> fetchAll();

 		$stmt->close();

 		$stmt = null;
 	}


 }