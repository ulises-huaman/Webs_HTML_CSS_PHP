<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Galería de fotos</title>
	<style type="text/css">
		td{
			padding: 4px;
		}

		 img{

			width: 600px;
			height: 500px;

			}

		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<h2>Galeria de fotos</h2><hr>
	<table border="1">
		<?php 	
			$vehic = $_GET['vehiculos'];
			$imagenes = glob("img/$vehic*.jpg");
			$texto = glob("img/$vehic*.txt");



			for ($i=0; $i < count($imagenes) ; $i++) { //Inicio de for
				$fotoActual = $imagenes[$i];				
				$descripcion = $texto[$i];

				echo "<tr>";
				echo "<td> <img src=$fotoActual>$fotoActual </td>";	
				echo "<td>";

				$file = fopen("$descripcion", "r");
				
				//Inicio de la lectura de las lineas del archivo
				while(! feof($file)) {
				  $line = fgets($file);
				  echo $line."<br>";
				}

				fclose($file);

				echo "</td>";				
							
				echo "</tr>";
			}//Fin de for


		 ?>
		
	</table>

</body>
</html>