<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Subida de archivo al servidor</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<h2>Proceso de subida de archivos</h2>
	<?php 

		$carpeta = "subidos/";// carpeta dónde se subirá
		$archivo = $_FILES['archivo01']['name']; //Nombre de archivo subido

		$direccionCompleta = $carpeta.basename($_FILES["archivo01"]["name"]);
		$tipoArchivo = $_FILES['archivo01']['type'];
		$tamanoArchivo = $_FILES['archivo01']['size'];

		echo "Archivo subido es: $direccionCompleta<br>";
		echo "Tipo de archivo: $tipoArchivo <br>";
		echo "Tamaño de archivo: $tamanoArchivo <br>";

		$subidoOk = true;

		if ($_FILES['archivo01']['error'] != 0) {
			$subidoOk = false;
			echo "Ha ocurrido un error al subir el archivo";
		}

		else{
			//dónde queremos subirdo 
			move_uploaded_file($_FILES['archivo01']['tmp_name'], $direccionCompleta);
			echo "Archivo subido con éxito";
		}


		// $imageFileType = strtolower(pathinfo($direccionCompleta,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image


	 ?>

</body>
</html>