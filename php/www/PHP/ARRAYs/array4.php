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

		 unset($moneda[3]);

		 echo "<br><br>";
		 foreach($moneda as $key => $value){
		 	echo "$key = $value.<br>";

		 }

		echo "Elementos = ".count($moneda);
	 ?>

</body>
</html>