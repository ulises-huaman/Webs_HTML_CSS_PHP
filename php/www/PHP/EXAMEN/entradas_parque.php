<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reserva de entradas</title>
	<style type="text/css">
		*{
			font-size: 1.1em;
		}
		table{
			width: 80%;
			margin: auto;
		}
		th{
			text-align: center;			
			
		}
		td{
			text-align: right;
		}

		h2{
			text-align: center;
		}
		
	</style>
</head>
<body>
	<h2>Resumen de precios</h2>
	<?php 
	//Definición de variables
		$standar = $_GET['estandar'];
		$mayores = $_GET['mas65'];
		$ninos = $_GET['infantil'];
		$diaSemana = $_GET['semana'];

		$precioEstandar = 12;
		$precioSenior = 10;
		$precioInfantil = 6;
		$IVA = 0.21;
		$IVA_imprimir = 0;


		$cantidad_standar = $standar;
		$cantidad_mayores = $mayores;
		$cantidad_ninos = $ninos;

		$subTotal = 0;
		$total = 0;
		$suma_standar_mas65 = 0;
		$nino_gratis = 0;
		$descuento = 0;
	//Fin de definición de variables

		if (($standar < 1) and ($mayores < 1) and ($ninos > 0)) {
			echo "Tiene que comprar alguna entrada Estándar o Mayores de 65 para que pueda comprar entrada infantil";
		}
		else{
			//Para verificar, si $suma_standar_mas65 suman un múltiplo de dos tendrá que haber niños gratis
			$suma_standar_mas65 = $standar + $mayores;
			$standar = $standar*$precioEstandar;
			$mayores = $mayores*$precioSenior;

			if ($suma_standar_mas65 < 2) {//Aquí la suma de los mayores es menor que dos,$suma_standar_mas65 = 0
				$nino_gratis = $nino_gratis;								
			}

			else{
				//Niños gratis será la división de $suma_standar_mas65 entre dos y truncando al valor inmediato menor
				$nino_gratis = round(($suma_standar_mas65/2), 0, PHP_ROUND_HALF_DOWN);
			}
		}


		if ($ninos < 1) {// Si el número de niños es menor que uno, niños gratis será 0
			$nino_gratis = 0;
			$ninos = $ninos; // Los niños no se alteran
		}

		else{
			if ($ninos > $nino_gratis) {
				$ninos = $ninos - $nino_gratis;//Las entradas a cobrar a los niños será la diferencia
			
			}
			else{//Todo los niños son gratis si son menores o iguales a nino_gratis
				$ninos = 0;
				$ninos = $ninos;
			}
		}

		$ninos = $ninos * $precioInfantil;//Calculamos el precio que pagan los niños

		if ($diaSemana == "1") {//Lunes a miércoles se paga con descuento
			$subTotal = $standar + $mayores + $ninos;
			$descuento = $subTotal*0.2;
			$subTotal = $subTotal - $descuento;
		}

		else{
			$subTotal = $standar + $mayores + $ninos;
		}
		
		$IVA_imprimir = $subTotal*$IVA;	
		$total = $IVA_imprimir + $subTotal;

	 ?>

	 <table border="1">
	 	<tr>
	 		<th>Cantidad</th>
	 		<th>Descripción</th>
	 		<th>Precio por unidad</th>	 		
	 		<th>Precio Total</th>
	 	</tr>
	 	<tr>
	 		<td><?php echo $cantidad_standar; ?></td>
	 		<td><?php echo "Entrada estándar"; ?></td>
	 		<td><?php echo $precioEstandar." €"; ?></td>
	 		<td><?php echo $standar." €"; ?></td>
	 	</tr>
	 	<tr>
	 		<td><?php echo $cantidad_mayores; ?></td>
	 		<td><?php echo "Entradas senior"; ?></td>
	 		<td><?php echo $precioSenior." €"; ?></td>
	 		<td><?php echo $mayores." €"; ?></td>
	 	</tr>
	 	<tr>
	 		<td><?php echo $cantidad_ninos; ?></td>
	 		<td><?php echo "Entradas infantiles"; ?></td>
	 		<td><?php echo $precioInfantil." €"; ?></td>
	 		<td><?php echo $ninos." €"; ?></td>
	 	</tr>
	 	<tr>	 		
	 		<td colspan="3"><?php echo "Descuento"; ?></td>
	 		<td><?php echo $descuento." €"; ?></td>
	 	</tr>
	 	<tr>
	 		<td colspan="3"><?php echo "Subtotal"; ?></td>
	 		<td><?php echo $subTotal." €"; ?></td>
	 	</tr>
	 	<tr>
	 		<td colspan="3"><?php echo "IVA"; ?></td>
	 		<td><?php echo $IVA_imprimir." €"; ?></td>
	 	</tr>
	 	<tr>
	 		<td colspan="3"><?php echo "Total"; ?></td>
	 		<td><?php echo $total." €" ?></td>
	 	</tr>

	 </table>

</body>
</html>