<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sutidor de café</title>
</head>
<body>
	<?php
		$unidades = $_GET['cantidad'];
		$tipoCafe = $_GET['tipo'];
		$tamanoCafe = $_GET['tamano'];
		$conLeche = $_GET['leche'];


		$subTotal = 0;
		$iva = 0.21;
		$ivac = 0;
		$total = 0;

		$mensaje1 = "";
		$mensaje2 = "";
		$mensaje3 = "";
		$mensaje4 = "";
		$precioBase = "";

		$recargoLeche = 0;
		$mensajeRecargo = "";
		$precioLlevar = 0;



		$paraLlevar = 'n';		
		if (isset($_GET['llevar'])) {
			$paraLlevar = "s";
		}

		if ($unidades < 1) {
			echo "Debe elegir la cantidad de cafe(s)";
		}

		else{



			if ($tipoCafe == "1") {
					$mensaje1 = "Descafeinado";
					if ($tipoCafe == "1") {
						$subTotal = $unidades*1.2;
						$mensaje2 = "Pequeño";
						$precioBase = "($unidades * 1.2)";
					}

					elseif($tamanoCafe == "2"){
						$subTotal = $unidades*1.5;
						$mensaje2 = "Mediano";
						$precioBase = "($unidades * 1.5)";
					}

					else{
						$subTotal = $unidades*2.0;
						$mensaje2 = "Gande";
						$precioBase = "($unidades * 2.0)";
					}

			}

			elseif ($tipoCafe == "2") {
					$mensaje1 = "Suave";
					if ($tipoCafe == "1") {
						$subTotal = $unidades*1.2;
						$mensaje2 = "Pequeño";
						$precioBase = "($unidades * 1.2)";
					}

					elseif($tamanoCafe == "2"){
						$subTotal = $unidades*1.5;
						$mensaje2 = "Mediano";
						$precioBase = "($unidades * 1.5)";
					}

					else{
						$subTotal = $unidades*2.0;
						$mensaje2 = "Gande";
						$precioBase = "($unidades * 2.0)";
					}
			}

			else{

					$mensaje1 = "Intenso";
					if ($tipoCafe == "1") {
						$subTotal = $unidades*1.2;
						$mensaje2 = "Pequeño";
						$precioBase = "($unidades * 1.2)";
					}

					elseif($tamanoCafe == "2"){
						$subTotal = $unidades*1.5;
						$mensaje2 = "Mediano";
						$precioBase = "($unidades * 1.5)";
					}

					else{
						$subTotal = $unidades*2.0;
						$mensaje2 = "Gande";
						$precioBase = "($unidades * 2.0)";
					}

			
				}

//-----------------------------------------------------------------
				
				if ($conLeche == "1") {
					$mensaje3 = "Entera";
					$mensajeRecargo = "0.0€ x".$unidades;
					
				}
				elseif ($conLeche == "2") {
					$mensaje3 = "Semidesnatada";
					$mensajeRecargo = "0.0€ x".$unidades;
					
				}
				elseif ($conLeche == "3") {
					$mensaje3 = "Desnatada";
					$mensajeRecargo = "0.0€ x".$unidades;
					
				}
				else{
					$subTotal += $unidades*0.1;
					$mensaje3 = "Vegetal";
					$recargoLeche =$unidades*0.1;					
					$mensajeRecargo = "0.1€ x".$unidades; 
				}



				if ($paraLlevar == "s") {
					$subTotal += 0.2*$unidades;
					$precioLlevar =  0.2*$unidades;
					$mensaje4 = "0.2 x $unidades = $precioLlevar";
				}

				$ivac = $subTotal*$iva;
				$total = $subTotal + $ivac;

?>

		<table border="1">
			<tr>
				<th>Cantidad</th>
				<th>Producto</th>
				<th>Tamaño</th>
				<th>Con leche</th>
				<th>Recargo</th>
				<th>Para llevar</th>
				<th>Precio</th>
			</tr>
			<tr>
				<td><?php echo $unidades; ?></td>
				<td><?php echo $mensaje1;  ?></td>
				<td><?php echo $mensaje2; ?></td>
				<td><?php echo $mensaje3 ;?></td>
				<td><?php echo "$mensajeRecargo  = $recargoLeche"; ?></td>
				<td><?php echo $mensaje4; ?></td>
				<td><?php echo "($mensajeRecargo  = $recargoLeche) + ($mensaje4) + $precioBase = $subTotal"; ?></td>
			</tr>
		</table>




	<?php
		}//fin else

	 ?>

</body>
</html>