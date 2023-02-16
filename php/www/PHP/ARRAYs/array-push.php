<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array 04</title>
</head>
<body>
	<h2>Array03 Fecha: <?php echo date("d-m-Y"); ?></h2>

	<?php 
	//Rellenamos los valores al array	
		$moneda = array("euro", "dolar", "libra", "yen","yuan", "rupia");

		echo $numMonedas = count($moneda)."<br>";


		 //Recorre el array y en valor lo asigna a la variable $value 
		 echo "<br><br>FOREACH<br>";
		 foreach ($moneda as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }
//Añadir al final del array
		array_push($moneda, "Soles", "Bolivares","Peso");

		 echo "<br><br>FOREACH<br>";
		 foreach ($moneda as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

//Añadir al principio del array
		 array_unshift($moneda, "frenco_Suizo","Inti","bit-coin");
		 echo "<br><br>FOREACH<br>";
		 foreach ($moneda as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		 sort($moneda,2);
		 echo "<br><br>Ordenar como string<br>";
		 foreach ($moneda as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		 sort($moneda,3);
		 echo "<br><br>Ordenar como string de acuerdo a la región<br>";
		 foreach ($moneda as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		asort($moneda,3);
		 echo "<br><br>Orden desendente<br>";
		 foreach ($moneda as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }


	 ?>

</body>
</html>