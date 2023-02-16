<?php
/*Cristian Bustamante*/

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="text-center">
		<h1 class="display-1">Ejercicio Autónomo - 3 parcial</h1>
		<h2 class="text-muted">Cristian Bustamante</h2>
	</div>
	<br><br>
	<?php
		include_once("include/class.figura.php");
		include_once("include/Interface.formulas.php");
		include_once("figuras/class.cuadrado.php");
		include_once("figuras/class.rectangulo.php");
		include_once("figuras/class.triangulo.php");
			
		$objCuadrado = new cuadrado();
		$objRectangulo = new rectangulo();
		$objTriangulo = new triangulo();
			
		echo figura::get_form();
		
		
	?>
	
</body>

</html>

