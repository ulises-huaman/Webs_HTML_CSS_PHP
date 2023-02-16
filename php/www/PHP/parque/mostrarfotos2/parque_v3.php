<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php basico03</title>
<style type="text/css">
	* {
		margin:0;
		padding:0;
	}
	h2 {
		text-align: center;
	}
	p {
		font-family: arial;
		font-size: 1.3em;
	}
	.caja1 {
		width: 70%;
		height:300px;
		background-color: lightgreen;
	}

	table{
		width: 60%;
	}

</style>

</head>

<body>
	<h2>Reserva de Entradas</h2>

	<table border="1">
		<tr>

	<?php

	$estandar = $_GET['standar'];
	$emayor65 = $_GET['mayor65'];
	$einfantil = $_GET['infantil'];
	$ediaSema = $_GET['diaSema'];
	$precioAdultos = 0;

	$entradaEstandar = 12;
	$entradaSenior = 10;
	$entradaInfantil = 6;
	$descuento = 0.2;
	$subTotal = 0;
	$iva = 0.21;
	$ivac = 0;
	$total = 0;
		

	$adultos = 0;
	$mayores = 0;
	$ninos = 0;


	// echo $estandar;
	// echo $emayor65;
	// echo $einfantil;
	// echo $ediaSema;

	if ((($estandar > 0) or ($emayor65 > 0)) and (($estandar <= 10) and ($emayor65 <= 10))){

		echo "<td colspan = '3'> Resumen de entradas</td></tr>";

		$adultos = $estandar;
		$mayores = $emayor65;
		$ninos = $einfantil;

		$estandar = $estandar*$entradaEstandar;		
		$emayor65 = $emayor65*$entradaSenior;
		$einfantil = $einfantil*$entradaInfantil;
		$subTotal = $estandar+$emayor65+$einfantil;

		echo "<tr><th>Descripción</th><th>Cantidad</th><th>Precio</th></tr>";
		echo "<tr><td>Adultos</td><td>$adultos</td><td>".number_format($estandar,2,",", ".")."</td></tr>";
		echo "<tr><td>Mayores +65</td><td>$mayores</td><td>".number_format($emayor65,2, ",",".")."</td></tr>";
		echo "<tr><td>Infantil</td><td>$ninos</td><td>".number_format($einfantil,2,",",".")."</td></tr>";
	}
	else{
		echo "<td colspan = '3'>TIENE QUE COMPRAR UNA ENTRADA ESTÁNDAR O SENIOR PAR ACOMPRAR UN INFANTIL</td></tr>";
	}

	if ($ediaSema == "1") {
		$subTotal = $subTotal - $subTotal*$descuento;
	}

	$ivac = $iva*$subTotal;
	$total = $ivac + $subTotal;

	echo "<tr><td colspan = '2'>SUBTOTAL</td><td>".number_format($subTotal,2,",",".")."</td></tr>";
	echo "<tr><td colspan = '2'>IVA</td><td>".number_format($ivac, 2, ",", ".")."</td></tr>";
	echo "<tr><td colspan = '2'>TOTAL</td><td>".number_format($total, 2, ",",".")."</td></tr>";
	
	?>

</table>

</body>
</html>