<?php
class DimensionController {

    public static function newDimension (){
       
    if(isset($_POST["nombre"])){

        $nombre = $_POST["nombre"];
        $estado = $_POST["estado"];


        $dimension = Dimension::newDimension($nombre, $estado);

        if($dimension == "true"){
            echo "<div class='alert-succes'> Dimensión 
            Registrada correctamente </div>";

        } else {
            echo "<div class='alert-danger'> Dimensión no
            registrada";
        }
    }
    }

    public static function ctrListarDimension() {

        $dimension = Dimension::listarDimension();

        return $dimension;
    }
  
    public static function editDimension() {

        if (isset($_POST["ideditar"])) {
          $id_dimension = $_POST["ideditar"];
          $nombre = $_POST["editarnombre"];

          $dimension= Dimension::editDimension($id_dimension, $nombre);


          if ($dimension == "true") {
                
            echo'<script>

            window.location = "dimension"; 

                </script>';

          }else {
                 
            echo'<script>

                 window.location = "dimension"; 

                </script>';
          }
        }
}
public static function inactivarDimension() {

  if(isset($_POST["idinactivar"])){

    $id_dimension = $_POST["idinactivar"];

    $dimension = Dimension::inactivarDimension($id_dimension);

    if($dimension == "ok") {

      echo'<script>

            window.location = "dimension"; 

        </script>';

    }

  }
}


public static function activarDimension() {

  if(isset($_POST["idactivar"])){

    $id_dimension = $_POST["idactivar"];

    $dimension = Dimension::activarDimension($id_dimension);

    if($dimension == "ok") {

      echo'<script>

            window.location = "dimension"; 

        </script>';

    }

  }
}
}
