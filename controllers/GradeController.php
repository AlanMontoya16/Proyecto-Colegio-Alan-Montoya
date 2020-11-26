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
          
          $n_curso = $_POST["editarcurso"];



          $grade = Grade::editGrade($n_curso);


          if ($grade == "true") {
            
            echo "<div class='alert-success'>
              Curso actualizado correctamente
            </div>";

          }else {
                 
                  echo "<div class='alert-danger'>
                    Curso no actualizado
                  </div>";

          }
        }
}



}
