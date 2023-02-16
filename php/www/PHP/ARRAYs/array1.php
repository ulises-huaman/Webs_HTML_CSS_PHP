<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array 01</title>
</head>
<body>
	<h2>Array01 Fecha: <?php echo date("d-m-Y"); ?></h2>

	<?php 
	//Rellenamos los valores al array	
		$moneda = array("euro", "dolar", "libra", "yen","yuan", "rupia");

		echo $numMonedas = count($moneda)."<br>";

		echo "<br><br>for normal<br>";
		 
		 for($i=0; $i < $numMonedas; $i++){
		 	echo $moneda[$i]."<br>";
		 }

		 //Recorre el array y en valor lo asigna a la variable $value 
		 echo "<br><br>FOREACH<br>";
		 foreach ($moneda as $value) {
		 	echo $value."<br>";
		 }

		echo $numMonedas = count($moneda);
		echo "<br><br>";

		foreach ($moneda as $key => $value) {
			echo "$key ::  $value";
		}
	 ?>

</body>
</html>