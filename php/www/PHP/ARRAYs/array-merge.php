4<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array-merge</title>
</head>
<body>
	<h2>Array-merge(concatenación de Array): <?php echo date("d-m-Y"); ?></h2>

	<?php 
	//Rellenamos los valores al array	
		$moneda1 = array("euro", "dolar", "libra", "yen","yuan", "rupia");
		$moneda2 = array("peso", "bath","dirharo");
		$moneda3 = array("moneda10", "moneda11", "moneda12");


		echo $numMonedas = count($moneda1)."<br>";


		 //Recorre el array y en valor lo asigna a la variable $value 
		 echo "<br><br>Array 1<br>";
		 foreach ($moneda1 as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		 echo "<br><br>Array 2<br>";
		 foreach ($moneda2 as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		 echo "<br><br>Array 3<br>";
		 foreach ($moneda3 as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		 echo "<br><br>Concatenamos<br>";
		$moneda4 = array_merge($moneda1,$moneda2, $moneda3); 

		  echo "<br><br>Array 4<br>";
		 foreach ($moneda4 as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }


		 $arrayEnteros = array("1","2","3","4","5","-1","-2","-3","-4","-5");

		 $arrayOrdenados = sort($arrayEnteros,1);

		 echo "<br><br>Ordenamos<br>";
		 foreach ($arrayOrdenados as $key =>$value) {
		 	echo "$key = $value.<br>";
		 }

		 
		 






	 ?>

</body>
</html>