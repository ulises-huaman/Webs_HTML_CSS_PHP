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
			$textos = glob("img/$vehic*.txt");

			//Apertura y lectura de archivo
			



			for ($i=0; $i < count($imagenes) ; $i++) { //Inicio de for
				//Seleccionamos los nombres de archivo actuales
				$fotoActual = $imagenes[$i];				
				$textoActual = $texto[$i];
				//Preparar el archivo(abrir) para su lectura
				$file = fopen($textoActual, "r");
				//leer el contenido y guardar para mostrarlos posteriarmente
				$textores = fread($file, filesize($textoActual));
				//Cerramos el archivo
				fclose($file);

				echo "<tr>";
				echo "<td> <img src=$fotoActual>$fotoActual </td>";	
				echo "<td>$textores </td>"
				echo "</tr>";

				
			}//Fin de for


		 ?>
		
	</table>

</body>
</html>