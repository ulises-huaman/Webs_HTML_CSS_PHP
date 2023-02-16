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


		 //Recorre el array y en valor lo asigna a la variable $value 
		 echo "<br><br>FOREACH<br>";
		 foreach ($moneda as $value) {
		 	echo $value."<br>";
		 }
//Recortamos y conservamos los tres primeros valores
		 $salida = array_slice($moneda,0,3);

		 echo "<br><br>";
		 foreach($salida as $value){
		 	echo $value."<br>";
		 }

		 echo "<br><br>";
		 foreach($moneda as $value){
		 	echo "<br>$value";
		 }


	 ?>

</body>
</html>