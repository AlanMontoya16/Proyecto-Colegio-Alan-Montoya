<?php

  class NoteController {



  	public static function newNote() {

  		if (isset($_POST["nota"])) {
  			
  			$nota = $_POST["nota"];

  			$id_plan = $_POST["id_plan"];


  			$note = Note::newNote($nota, $id_plan);


  			if ($note == "true") {
  				
  				echo "<div class='alert-success'>
  					Nota Registrada correctamente
  				</div>";

  			}else {
               
                echo "<div class='alert-danger'>
                	Nota no registrada
                </div>";

  			}
  		}
  	}

  	public static function ctrListarNota() {
     
     $note = Note::listarNote();

     return $note;

  	}

      public static function editNote() {

            if (isset($_POST["ideditar"])) {

              $id_nota  = $_POST["ideditar"];
              
              $nota = $_POST["editarnota"];

              $id_plan = $_POST["editarplan"];


              $note = Note::editNote($id_nota, $nota, $id_plan);


              if ($note == "true") {
                
                echo'<script>
    
                window.location = "nota"; 
    
                    </script>';
    
              }else {
                     
                echo'<script>
    
                     window.location = "nota"; 
    
                    </script>';

              }
            }
    }



  }