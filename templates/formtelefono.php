<!DOCTYPE html>
<html>
<head>
	<title>Este está en construcción</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			
			font-family:Courier New;
			background-color: #D4E6F1;
		}

		h3{
			color: red;
			font-size: 3em;
			text-align: center;
		}

		a{
			text-decoration: none;
			**width: 50%;			
			border-radius: 10px;
			padding: 10px 60px;
			background-color: #F5B7B1;
			color: #5D6D7E ;
			margin: auto;
		}
		.contratar{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
	$tipoContratante = $_POST['tcontratante'];
	$velocidadDatos = $_POST['fibraMegas'];
	$lineaFijaSN = $_POST['lineafija'];
	$lineaMovilSN= $_POST['lineamovil'];
	$cantidadLineasM = $_POST['lineasMoviles'];
	$datosMoviles = $_POST['movilDatos'];
	$operadorasM = $_POST['operadoras'];

	$precioFinalDatos = 0;
	$precioFinalMoviles = 0;	
	$precioFinal = 0;

	// echo "<h2>$tipoContratante</h2>";
	// echo "<h2>$velocidadDatos</h2>";
	// echo "<h2>$lineaFijaSN</h2>";
	// echo "<h2>$lineaMovilSN</h2>";
	// echo "<h2>$cantidadLineasM</h2>";
	// echo "<h2>$datosMoviles</h2>";
	// echo "<h2>$operadorasM</h2>";

	switch ($operadorasM) {// Inicio de SWITCH exterior
		  case "1":
		  		if ($tipoContratante == 0) {
		  			switch ($velocidadDatos) { // Inicio de SWITCH interior
		  				case '100':
		  					echo "Este operador no ofrece datos de 100 MB, elija otra opción";
		  					break;
		  				case '200':
		  					echo "Este operador no ofrece datos de 200 MB, elija otra opción";
		  					break;
		  				case '300':
		  					$precioFinal = $precioFinal + 33;
		  					break;
		  				case '600':
		  					$precioFinal = $precioFinal + 39;
		  					break;
		  				case '1024':
		  					$precioFinal = $precioFinal + 43;
		  					break;
		  				
		  				default:
		  					echo "Elija una cantidad válida";
		  					break;
		  			} //Fin de SWITCH interior

		  			if ($lineaFijaSN == 1) {
		  				
		  				$precioFinal += 6;
		  			}

		  			if ($lineaMovilSN == 1) {

		  				switch ($datosMoviles) {
		  					case '5':
		  						echo "Esta operadora unicamente proporciona Datos mayores de 25 GB";
		  						break;
		  					case '9':
		  						echo "Esta operadora unicamente proporciona Datos mayores de 25 GB";
		  						break;
		  					case '12':
		  						echo "Esta operadora unicamente proporciona Datos mayores de 25 GB";
		  						break;
		  					case '15':
		  						echo "Esta operadora unicamente proporciona Datos mayores de 25 GB";
		  						break;

		  					case '25':
		  						$precioFinal = $precioFinal + 6*$cantidadLineasM;
		  						break;

		  					case '30':
		  						echo "Elija la opción de 25, 50, 100 o datos ilimitados";
		  						break;

		  					case '40':
		  						echo "Elija la opción de 25, 50, 100 o datos ilimitados";
		  						break;

		  					case '50':
		  						$precioFinal = $precioFinal + 12*$cantidadLineasM;
		  						break;

		  					case '100':
		  						$precioFinal = $precioFinal + 14*$cantidadLineasM;
		  						break;

		  					case '0':
		  						$precioFinal = $precioFinal + 22*$cantidadLineasM;
		  						break;

		  					
		  					default:
		  						echo "Elija una opción válida";
		  						break;
		  				} //Fin de case datosMoviles

		  			}//Fin del IF lineasMovilSN
		  			
		  		} //Fin de IF de tipo de contratante		  		
		  		else{
		  			echo "Estoy aquí";
		  			
		  		} //Fin del ELSE tipo de contratante	
		  		echo "<h3>Usted pagaría: $precioFinal €</h3>";
		  		echo "<div class='contratar'>";
		  		echo "<a href='contratartelefono.html'>Contratar</a>";
		  		echo "</div>";
		  			    
		    break;

		  case "2":
		    echo "Ha elegido AMENA";
		    break;
		  case "3":
		    echo "Ha elegido LOWI";
		    break;
		   case '4':
		   	echo "Ha elegido ORANGE";
		   	break;
		   	case '5':
		   	echo "Ha elegido YOIGO";
		   	break;
		   	case '6':
		   	echo "Ha elegido JAZZTEL";
		   	break;
		   	case '7':
		   	echo "Ha elegido VODAFONE";
		   	break;
		   	case '8':
		   	echo "Ha elegido MASMOVIL";
		   	break;
		   	case '9':
		   	echo "Ha elegido MOVISTAR";
		   	break;
		   	case '10':
		   	echo "Ha elegido SIMYO";
		   	break;
		   	case '11':
		   	echo "Ha elegido DIGI MOVIL";
		   	break;

		  default:
		    echo "Tiene que elegir un operador válido";
		} // Fin del SWITCH exterior
	

	 ?>

</body>
</html>