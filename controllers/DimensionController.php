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

        if (isset($_POST["editardimension"])) {
          
          $nombre = $_POST["editarnombre"];
          $estado = $_POST["editarestado"];



          $dimension= Dimension::editDimension($nombre, $estado);


          if ($dimension == "true") {
            
            echo "<div class='alert-success'>
              Dimensión actualizada correctamente
            </div>";

          }else {
                 
                  echo "<div class='alert-danger'>
                    Dimensión no actualizada
                  </div>";

          }
        }
}



}
