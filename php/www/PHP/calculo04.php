<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 3</title>
	<style type="text/css">
		*{
			font-size: 30px;
		}

		input[type="text"]{
			width: 150px;
		}

		.caja{
			background-color: lightblue;
			width: 400px;
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
	//strtolower= Cambia a minúscula
	//ucfirst = Cambia la primera letra del string a mayúscula 
		$nomb = ucfirst(strtolower($_GET['nombre']));
		$apell1 = ucfirst(strtolower($_GET['apellido1']));
		$apell2 = ucfirst(strtolower($_GET['apellido2']));
		$import = (float)$_GET['importe'];
		$cantidad = (float)$_GET['cantidad'];
		$subtotal = 0;
		$total = 0;
		$IVAc = 0;
		$iva = 0.21;

		$subtotal = $import * $cantidad;
		$IVAc = $subtotal*$iva;
		$total = $subtotal + $IVAc;		
	?>

	<div class="caja">
		
		<?php
			 echo "<p> Nombre: ".$nomb." ".$apell1." ".$apell2."</p>";			 
			 echo "<p> Importe:".$import."</p>";
			 echo "<p> Cantidad:".$cantidad."</p>";
			 echo "<p> Subtotal:".$subtotal."</p>";
			 echo "<p> IVA:".$IVAc."</p>";
			 echo "<p> Total:".$total."</p>";
		 ?>
		
	</div>

	 
</body>


</html>