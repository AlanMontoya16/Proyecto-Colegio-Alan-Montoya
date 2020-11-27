<?php 

class SubjectController {



    public static function newSubject() {

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
        if(isset($_POST["ideditar"]))
        $id_asignatura = $_POST["ideditar"];
        $nombre = $_POST["editarnombre"];
        $id_grado = $_POST["editargrado"];
        
        $subject = Subject::editSubject($id_asignatura, $nombre, $id_grado);

        if ($subject == "true"){ 

            echo'<script>
 
                     window.location = "asignatura"; 

                    </script>';


        }else 
        echo'<script>
        
        window.location = "asignatura";
        
        </script>';



        } 
    
    }

