<?php  

  require_once "controllers/TempleteController.php";

  // user

  require_once "controllers/UserController.php";
  require_once "models/User.php";


  $templete = new TempleteController();

  $templete -> callView();