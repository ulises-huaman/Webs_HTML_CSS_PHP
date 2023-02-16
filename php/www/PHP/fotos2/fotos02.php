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

		h2{
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>Galeria de fotos</h2><hr>
	<table border="1">
		<?php 	
			$vehic = $_GET['vehiculos'];			

			$imagenes = glob("img/$vehic*.jpg");

			
			//Apertura y lectura de archivo
			for ($i=0; $i < count($imagenes) ; $i++) { //Inicio de for
				//Seleccionamos los nombres de archivo actuales
				$fotoActual = $imagenes[$i];				
				$textoActual = "img/".$vehic."0".($i+1).".txt";
				//Comprobamos si existe el archivo de texto

				if (!file_exists($textoActual)) {
					$textores = "Información no disponible";
				}
				else{
					//Preparar el archivo(abrir) para su lectura
					$file = fopen($textoActual, "r");
					//leer el contenido y guardar para mostrarlos posteriarmente
					$textores = fread($file, filesize($textoActual));
					//Cerramos el archivo
					fclose($file);	
				}				

				echo "<tr>";
				echo "<td> <img src=$fotoActual> </td>";	
				echo "<td>$textores </td>";				
				echo "</tr>";
				
				
			}//Fin de for


		 ?>
		
	</table>

</body>
</html>