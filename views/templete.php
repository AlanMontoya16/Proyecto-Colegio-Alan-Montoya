<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

	<!-- DataTables -->
	<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

	<!-- Toastr -->
	<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">

	<!-- fullCalendar -->
	<link rel="stylesheet" href="assets/plugins/fullcalendar/main.min.css">

	<title>LA FUENTE</title>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed ">


	<div class="wrapper">



		<?php  if (isset($_SESSION["signIn"]) && $_SESSION["signIn"] == "true") {


			if (isset($_GET["route"])) {

				

				if ($_GET["route"] == "usuarios" || $_GET["route"] == "inicio" || $_GET["route"] == "salir" || $_GET["route"] == "acudientes" || $_GET["route"] == "asignatura" || $_GET["route"] == "curso" || $_GET["route"] == "dimension" || $_GET["route"] == "periodo" || $_GET["route"] == "nota" || $_GET ["route"] == "grado" || $_GET ["route"] == "programacion" || $_GET ["route"] == "plan") {
					

					include "views/layout/layout.php";

					echo '<div class="content-wrapper">'; 

						 include "views/".$_GET["route"].".php";

					echo '</div>';

		           include "views/layout/footer.php"; 



	            }else {  

                   
                   include "views/layout/layout.php"; 

                   echo '<div class="content-wrapper">'; 

                   	   include "views/error_404.php";

                    echo '</div>';

                   include "views/layout/footer.php"; 


	           }

				
	       }else {


	       	   include "views/layout/layout.php"; 

	       	   echo '<div class="content-wrapper">'; 

	       	   	   include "views/others/error_404.php";

	       	    echo '</div>';

	       	   include "views/layout/footer.php"; 

			}
			

		}else if(isset($_GET["route"])) {

			if($_GET["route"] == "registrarme" || $_GET["route"] == "login"){

				include "views/".$_GET["route"].".php";

			}else {
                
                include "views/error_404.php";

			}

		}else {
                

                include "views/login.php";

		}?>


		

		



	</div>

  
	
</body>
</html>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="assets/plugins/datatables/call-datatable.js"></script>

<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Toastr -->
<script src="assets/plugins/toastr/toastr.min.js"></script>


<!-- validaciones con jQuery -->
<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- validacion -->
<script src="assets/plugins/jquery-validation/validation.js"></script>

<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>

<!-- fullCalendar -->
<script src="assets/plugins/fullcalendar/main.min.js"></script>


<!-- graficas chart -->

<script src="assets/graphs/graphs.js"></script>


<!-- sweetAlert -->

<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>