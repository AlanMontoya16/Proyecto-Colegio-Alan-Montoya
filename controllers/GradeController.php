<?php
class GradeController {

    public static function newGrade (){
       
    if(isset($_POST["n_curso"])){

        $n_curso = $_POST["n_curso"];


        $grade = Grade::newGrade($n_curso);

        if($grade == "true"){
            echo "<div class='alert-succes'> Curso 
            Registrado correctamente </div>";

        } else {
            echo "<div class='alert-danger'> Curso no
            registrado";
        }
    }
    }

    public static function ctrListarCurso() {

        $grade = Grade::listarGrade();

        return $grade;
    }
    public static function editGrade() {

        if (isset($_POST["editarcurso"])) {

          $id_curso = $_POST["ideditar"];
          $n_curso = $_POST["editarcurso"];



          $grade = Grade::editGrade($id_curso, $n_curso);


          if ($grade == "true") {
                
            echo'<script>

            window.location = "curso"; 

                </script>';

          }else {
                 
            echo'<script>

                 window.location = "curso"; 

                </script>';

          }
        }
}



}
