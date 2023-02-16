<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			font-size: 30px;
		}

		input[type="text"]{
			width: 150px;
		}

		.caja{
			background-color: lightblue;
			width: 200px;
			**height: 90px;
			color: tomato;
			text-align: center;
		}
		p{
			background: blue;
		}
	</style>
</head>

<body>
	<h1>Cálculo de operaciones</h1>
	<?php 
		$num1 = $_GET['fnum1'];
		$num2 = $_GET['fnum2'];
		$suma = 0;
		$suma = $num1 + $num2;
		$resta = $num1 - $num2;
	?>

<div class="caja">
	<p>Suma:</p>
	<?php  echo "<p>".$num1. " + ". $num2 . " = ". $suma."</p>"; ?>
	<p>Resta:</p>
	<?php echo "<p>".$num1. " - ". $num2 . " = ". $resta."</p>"; ?>
</div>	 
</body>


</html>