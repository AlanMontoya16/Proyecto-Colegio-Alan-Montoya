<?php 

class SubjectController {



    public static function newSubject(){

   if (isset($_POST["nombre"])) {

   $nombre = $_POST["nombre"];

   $id_grado = $_POST["id_grado"];
   
   $subject = Subject::newSubject($nombre, $id_grado);
   
    if ($subject == "true") {
        echo "<div class='alert-success'>
        Asignatura Registrada correctamente
        </div>";
    }else {
        echo "<div class='alert-success'>
        Asignatura no registrada 
        </div>"; 
    }
    }
}

    public static function ctrListarAsignatura(){
        $subject = Subject::listarAsignatura();
        return $subject;
    }

    public static function editSubject(){
        if(isset($_POST["editarnombre"]))
        $id_asignatura = $_POST["editarid"];
        $nombre = $_POST["editarnombre"];
        $id_grado = $_POST["editargrado"];
        
        echo $nombre;
        echo $id_grado;

        $subject = Subject::editSubject($nombre,$id_grado,$id_asignatura);

        if ($subject == "true") {

            echo"<div classs='alert-success'>
            Usuario actualizado correctamente
            </div>";
            
        } else {

            echo "<div class='alert-success'> Usuario no actualizado
            </div>";
        }
        }
    }

