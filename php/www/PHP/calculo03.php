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

		if (($num1 < 0) or ($num2 < 0)) {//inicio if 1
			echo "ERROR EN LOS DATOS INTRODUCIDOS";
		}//Fin if 1

		else{
				if ($oper=="1") {
					$total= $num1 + $num2;
					$opMate = " + ";
					  echo "<div class='caja'>";
					  echo "<p>Operación ".$opMate. " es :</p>";
					  echo "<p>".$num1." ".$opMate." ". $num2 . " = ". $total."</p>"; 
					  echo "</div>";
				}
				elseif (($oper=="2") and ($num1 > $num2)) {
					$total= $num1 - $num2;
					$opMate = " - ";
					  echo "<div class='caja'>";
					  echo "<p>Operación ".$opMate. " es :</p>";
					  echo "<p>".$num1." ".$opMate." ". $num2 . " = ". $total."</p>"; 
					  echo "</div>";
				}

				elseif ($oper=="3") {
					$total= $num1 * $num2;
					$opMate = " * ";
					  echo "<div class='caja'>";
					  echo "<p>Operación ".$opMate. " es :</p>";
					  echo "<p>".$num1." ".$opMate." ". $num2 . " = ". $total."</p>"; 
					  echo "</div>";
				}

				elseif(($oper == "4") and ($num2 > 0)){
					$total= $num1 / $num2;
					$opMate = " / ";

					  echo "<div class='caja'>";
					  echo "<p>Operación ".$opMate. " es :</p>";
					  echo "<p>".$num1." ".$opMate." ". $num2 . " = ". $total."</p>"; 
					  echo "</div>";
				}
				else{
					echo "<p>El primer operando: $num2  tiene que ser mayor que cero y menor que el $num1</p>";
				}

		}
		
	?>

	 
</body>


</html>