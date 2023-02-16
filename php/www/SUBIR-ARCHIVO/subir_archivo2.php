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
		$correcto = false;

	if (isset($_FILES['archivo01']['name'])) {
		//Si el archivo existe se continúa
	

		$carpeta = "subidos/";// carpeta dónde se subirá
		$archivo = $_FILES['archivo01']['name']; //Nombre de archivo subido



		$direccionCompleta = $carpeta.$archivo;
		$tipoArchivo = $_FILES['archivo01']['type'];
		$tamanoArchivo = $_FILES['archivo01']['size'];
		$tipoPermitido = array('image/jpeg', 'image/png', 'image/gif','text/plain','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/pdf');

		echo "Archivo subido es: $direccionCompleta<br>";
		echo "Tipo de archivo: $tipoArchivo <br>";
		echo "Tamaño de archivo: $tamanoArchivo <br>";

		


		if ($_FILES['archivo01']['error'] != 0){// Puesto que 0 implica que todo a salido bien

			$correcto = false;

			if ($_FILES['archivo01']['error'] == 1) {
				echo "El archivo es muy grande";
			}
			elseif ($_FILES['archivo01']['error'] == 4) {
				echo "Debe seleccionar un archivo <br>";
			}

			elseif ($_FILES['archivo01']['error'] == 2) {
				echo "El máximo tamaño permitido 100kb <br>";
				
			}

			else {			
				echo "Error desconocido <br>";
				}			
		}

		else{
			if ($tamanoArchivo > 80000) {
				echo "el archivo excede los 100kb 02<br>";
			
			}

			elseif (!in_array($tipoArchivo, $tipoPermitido)) {
				echo "Tipo de archivo debe ser jpg, gif,text, png, docx y pdf <br>";
				
			}
			else{
				$correcto = true;
			}


		}

	}


		if (!$correcto){
			echo "Ha ocurrido un error al subir el archivo";
		}

		else{
			//dónde queremos subirdo 
			if (file_exists($direccionCompleta)) {
				echo "¡el archivo ya existe!";
			}
			else{
			move_uploaded_file($_FILES['archivo01']['tmp_name'], $direccionCompleta);
			echo "Archivo subido con éxito";
		 }
		}


		// $imageFileType = strtolower(pathinfo($direccionCompleta,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image


	 ?>

</body>
</html>