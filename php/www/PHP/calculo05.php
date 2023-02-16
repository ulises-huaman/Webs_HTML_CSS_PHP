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


	table, th, td {
  			border: 1px solid black;
		}
	</style>
</head>

<body>
	<h1>Cálculo de operaciones</h1>
	<?php
	//strtolower= Cambia a minúscula
	//ucfirst = Cambia la primera letra del string a mayúscula 
		$nomb = ucfirst(mb_convert_case($_GET['nombre'],MB_CASE_LOWER, "UTF-8"));
		$apell1 = ucfirst(mb_convert_case($_GET['apellido1'], MB_CASE_LOWER,"UTF-8"));
		$apell2 = ucfirst(mb_convert_case($_GET['apellido2'],MB_CASE_LOWER,"UTF-8"));
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
		<table>
			<tr>
				<th>DATOS</th>
				<th>VALORES</th>
			</tr>
			<tr>
				<td><?php echo " Nombre: "; ?></td>
				<td><?php echo $nomb." ".$apell1." ".$apell2;  ?></td>
			</tr>
			<tr>
				<td><?php echo "Importe:";  ?></td>
				<td><?php echo number_format($import,2,",",".");  ?></td>
			</tr>
			<tr>
				<td><?php echo "Cantidad:"; ?></td>
				<td><?php echo number_format($cantidad, 2, ",", "."); ?></td>
			</tr>
			<tr>
				<td><?php echo "Subtotal:"; ?></td>
				<td><?php echo number_format($subtotal, 2, ",", "."); ?></td>
			</tr>
			<tr>
				<td><?php echo "IVA:"; ?></td>
				<td><?php echo number_format($IVAc ,2 ,",",".");  ?></td>
			</tr>
			<tr>
				<td><?php echo "Total:"; ?></td>
				<td><?php echo number_format($total,2, ",", "."); ?></td>
			</tr>


		</table>
	</div>

	 
</body>


</html>