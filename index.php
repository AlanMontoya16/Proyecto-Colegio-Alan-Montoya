<?php  

  require_once "controllers/TempleteController.php";

  // user

  require_once "controllers/UserController.php";
  require_once "models/User.php";

  //guardian

  require_once "controllers/GuardianController.php";
  require_once "models/Guardian.php";

  //subject 

  require_once "controllers/SubjectController.php";
  require_once "models/Subject.php";

  //grade

  require_once "controllers/GradeController.php";
  require_once "models/Grade.php";

  //dimension

  require_once "controllers/DimensionController.php";
  require_once "models/Dimension.php";

  //periodo

  require_once "controllers/PeriodController.php";
  require_once "models/Period.php";

  //Nota

  require_once "controllers/NoteController.php";
  require_once "models/Note.php";


  //Grado
  
  require_once "controllers/DegreeController.php";
  require_once "models/Degree.php";

  //Programming

  require_once "controllers/ProgrammingController.php";
  require_once "models/Programming.php";

  //Plan_acción

  require_once "controllers/PlanController.php";
  require_once "models/Plan.php";



  $templete = new TempleteController();

  $templete -> callView();