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
		$oper = $_GET['operacion'];
		$opMate = "";
		$total = 0;
		if ($oper=="1") {
			$total= $num1 + $num2;
			$opMate = " + ";
		}
		elseif ($oper=="2") {
			$total= $num1 - $num2;
			$opMate = " - ";
		}

		elseif ($oper=="3") {
			$total= $num1 * $num2;
			$opMate = " * ";
		}

		else{
			$total= $num1 / $num2;
			$opMate = " / ";
		}
		
	?>

<div class="caja">
	<?php  echo "<p>Operación ".$opMate. " es :</p>";?>
	<?php  echo "<p>".$num1." ".$opMate." ". $num2 . " = ". $total."</p>"; ?>

</div>	 
</body>


</html>