<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reservas de viaje</title>

<!--Número máximo de personas por habitación 3
    Niños gratis = habitación
    Al menos 1 adulto
    habitación doble = 50€
    habitación lujo = 80
    habitación suite = 120
    Regimen 10 eu media pensión, por persona/noche
    Regimen 20 eu pensión completa/persona/noche
    Cancelación 2.5€/habitación/noche
    fecha de reserva debe ser suerior a la fecha de hoy -->

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

</style>

</head>

<body>
	<h2>Reserva de Viaje</h2>

	<?php 
		$adultos1 = $_GET['adultos'];
		$ninos1 = $_GET['ninos'];
		$entrada1 = $_GET['entrada'];
		$salida1 = $_GET['salida'];
		$habitacion1 = $_GET['habitacion'];
		$regimen1 = $_GET['regimen'];


//Esto se hace para el checkbox
		$cancelacion1 = "n";
		if (isset($_GET['cancelacion'])) {
			$cancelacion1 = "s";
		}



		$hdoble = 25;
		$hespecial = 40;
		$hsuit = 60;

		$sub = 0;
		$subTotal = 0;
		$ivac = 0;
		$iva = 0.21;
		$total = 0;
		$subTRegimen = 0;

		$desa = 0;
		$com = 10;
		$cen = 20;
		$tipo = 0;

		$cancelacion = 2.5;

		$precioHabitacion = 0;

		$numHabitaciones = 0;

		$fechainicio = strtotime($entrada1);
		$fechafin = strtotime($salida1);
		$hoy = strtotime(date('Y-m-d'));
		$fechaEntrEs = date("d-m-Y", $fechainicio);//Formato en español
		$fechaSalEs = date("d-m-Y", $fechafin);

		$ninosGratis = 0;

		$mensajeError1 = "";
		$mensajeError2 = "";

		$dias = 0;
		

		if ($adultos1 < 1) {
			$mensajeError1 = "Tiene que selecticionar el número de adultos";
			echo $mensajeError1;
		}

		elseif ($fechainicio <= $hoy) {
			echo "La fecha de entrada debe ser posterior al día de hoy";
		}
		elseif ($fechafin < $fechainicio){
			echo "La fecha de salida debe ser posteior a la fecha de entrada";
			}

		else{
			$numHabitaciones =ceil(($adultos1 + $ninos1)/3);

				if ($numHabitaciones >= $ninos1) {
					$ninosGratis = $ninos1;
				}
				else{
					$ninosGratis = $numHabitaciones;
				}

			$dias = ceil(($fechafin - $fechainicio)/86400); // donde  86400 son los segundos que tiene el día.	


			if ($habitacion1 == "1") {
					$precioHabitacion = $hdoble;
				}
			elseif ($habitacion1 == "2") {
					$precioHabitacion = $hespecial;
				}	
			else{
					$precioHabitacion = $hsuit;
			}

				$subTotal = ($adultos1 + $ninos1)*$precioHabitacion*$dias;
				$descuento = ($ninosGratis)*$precioHabitacion*$dias;


			if ($regimen1 == "1") {

				$subTRegimen = ($adultos1 + $ninos1)*$desa*$dias;
				$descuento += $ninosGratis*$desa*$dias;
				$tipo = $desa;
			}
			elseif ($regimen1 == "2") {
				$subTRegimen = ($adultos1 + $ninos1)*$com*$dias;
				$descuento += $ninosGratis*$com*$dias;
				$tipo = $com;
			}
			else{
				$subTRegimen = ($adultos1 + $ninos1)*$cen*$dias;
				$descuento += $ninosGratis*$desa*$dias;
				$tipo = $cen;
			}

			$subTotal = $subTotal + $subTRegimen;
			


			if ($cancelacion1 == "s") {
				$subTotal = $subTotal + ($adultos1 + $ninos1)*$cancelacion*$dias;
				$descuento += $ninosGratis*$cancelacion*$dias;
				
			}

			$subTotal = $subTotal - $descuento;
			$ivac = $subTotal*$iva;
			$total = $subTotal + $ivac;


	 ?>

		<table border="1">
			<tr>
				<td>Adultos:</td>
				<td><?php echo $adultos1; ?></td>

				<td>Niños:</td>
				<td><?php echo $ninos1; ?></td>

				<td>Niños gratis:</td>
				<td><?php echo $ninosGratis; ?></td>
			</tr>
			<tr>
				<td>Tipo de Hab:</td>
				<td><?php 
						if ($habitacion1 == "1") {
							echo "Habitación doble";
						}
						elseif($habitacion1 == "2"){
							echo "Habitación de Lujo ";
						}
						else{
							echo "Suits"; 
							}
							?>
				</td>
				<td>Cantidad:</td>
				<td><?php echo $numHabitaciones; ?></td>

				<td>Régimen:</td>
				<td><?php
						if ($regimen1 == "1") {
							echo "Desayuno";
						}
						elseif ($regimen1 == "2") {
							echo "Comida";
						}
						else{
							echo "Cena";
						}
				 ?></td>
			</tr>
			<tr>
				<td>Entrada:</td>
				<td><?php echo $fechaEntrEs; ?></td>

				<td>Salida:</td>
				<td><?php echo $fechaSalEs; ?></td>

				<td>Noches:</td>
				<td><?php echo $dias; ?></td>
			</tr>
			<tr >
				<td colspan="6">Importes</td>
			</tr>
			<tr>
				<td>Habitaciones</td>
				<td colspan="4"><?php echo ($adultos1 + $ninos1). " h x ".number_format($precioHabitacion,2,",",".")."€ = ".number_format(($subTotal/$dias), 2,",",".")."€ x".$dias."Dias"; ?></td>
				<td><?php echo number_format($subTotal,2,",",".")."€"; ?></td>
			</tr>
			<tr>
				<td>Régimen:</td>
				<td colspan="4"><?php
					echo ($adultos1 + $ninos1). " Re x ".number_format($tipo,2,",",".")."€ = ".number_format(($subTRegimen/$dias),2,",","."). "€ x".$dias."dias";
				  ?></td>
				<td><?php echo number_format(($subTRegimen),2,",",".")."€"; ?></td>
			</tr>
			<tr>
				<td>Descueto:</td>
				<td colspan="4"><?php 
					echo $ninosGratis;;
				 ?></td>
				<td><?php echo "-".number_format($descuento,2,",","."); ?></td>
			</tr>
			<tr>
				<td colspan="5">SUBTOTAL</td>				
				<td><?php echo number_format($subTotal,2,",",".");  ?></td>
			</tr>
			<tr>
				<td colspan="5">IVA</td>				
				<td><?php echo number_format($ivac,2,",",".");  ?></td>
			</tr>
			<tr>
				<td colspan="5">TOTAL</td>				
				<td><?php echo number_format($total,2,",",".");  ?></td>
			</tr>

		</table>

	<?php 
		}
	?>
</body>
</html>