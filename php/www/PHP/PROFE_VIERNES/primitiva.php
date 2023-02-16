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

		$numeros = array(rand(1,49));
		$reintegro = rand(0,9);
		$complementario = "";


		while (count($numeros) < 6) {
			$nuevonum = rand(1,49);
			if(!in_array($nuevonum, $numeros)){// Me verifica si $nuevonum está dentro del array
				array_push($numeros, $nuevonum);
			}
		}

		sort($numeros);

		while (count($numeros)<7){// Es menor que 7, para que no introduzca más de 7 números
			$complementario = rand(1,49);
			if(!in_array($complementario, $numeros)){
				array_push($numeros, $nuevonum);
			}
		}

		

		for ($i=0; $i <count($numeros) ; $i++) { 
			echo "$numeros[$i]";
			echo " - ";
		}

		echo "<span>$reintegro</span>";

	 ?>

</body>
</html>