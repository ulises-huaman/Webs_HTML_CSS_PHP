<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Primitiva</title>
	<style type="text/css">

		span{
			color: red;
		}
	</style>
</head>
<body>
	<h2>Números de la primitiva</h2>
	<?php 

		$numeros = array();
		$reintegro = rand(0,9);

		$complementario = "";
	

		for ($i=1; $i <50 ; $i++) { 
			array_push($numeros, $i);
		}
		shuffle($numeros);

		$numerosElegidos = array_slice($numeros,0,7);
		sort($numerosElegidos);

		foreach ($numerosElegidos as  $value) {
			echo "$value <br>";
		}

		echo "<br><br>";

		array_push($numerosElegidos,$reintegro);

		foreach ($numerosElegidos as $key => $value) {
			echo "$value <br>";
		}
		
		for ($i=0; $i < 8 ; $i++) { 
			echo "$numerosElegidos[$i] - ";
		}

		echo "<br>";
		$contador = 0;

		echo "<table>";

		sort($numeros);

		for ($i=0; $i < 49 ; $i++) { 
			echo "<tr>";
			$contador = $contador + 1;
		 	if (in_array($numeros[$i], $numerosElegidos)) {
				echo "<span>$numeros[$i]</span> - ";
			 } 				
		else{
				echo "$numeros[$i] - ";
			}
			echo "</tr>";
		}

		
	 ?>

</body>
</html>