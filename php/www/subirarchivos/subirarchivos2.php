<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Subir archivos</title>
	<style type="text/css">
	* {
		margin:0;
		padding:0;
	}
	body {
		font-size: 22px;
		font-family: Arial;
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
	table {
		width: 90%;
		text-align: center;
		margin: 0 auto;
		font-size: 1.2em;
	}
	td {
		padding: 4px;
	}
	</style>

</head>

<body>
<h2>Proceso de subida de archivos</h2>
<?php
$correcto = false;
//comprobanmos que existe la variable del archivo01
if (isset($_FILES['archivo01']['name'])) {//1
//si existe continuamos...

	$carpeta = "uploads/";
	$archivo = $_FILES['archivo01']['name'];
	$rutadestino = $carpeta . $archivo;

	$imagentemp = $_FILES['archivo01']['tmp_name'];
	$dimimagen = getimagesize($imagentemp);
	$tipoarchivo = $_FILES['archivo01']['type'];
	$tipopermitido = array('image/jpeg', 'image/png', 'image/gif');

	echo "Archivo: $rutadestino <br>";
	echo "Tipo de archivo: $tipoarchivo <br>";
	echo "tamaño:". number_format(($_FILES['archivo01']['size']/1000),1, ',','.') . "Kb <br>";
	echo "carpeta temp:" . $_FILES['archivo01']['tmp_name'] . "<br>";
	echo var_dump($dimimagen);
	//comprobamos los errores del servidor
	if ($_FILES['archivo01']['error'] != 0) { //2
		if ($_FILES['archivo01']['error'] == 4) {//5
			echo "Debe seleccionar un archivo <br>";		
		}elseif ($_FILES['archivo01']['error'] == 1) {//5
			echo "el archivo excede lo permitido por el servidor <br>";		
		}elseif ($_FILES['archivo01']['error'] == 2) {//5
			echo "El máximo tamaño permitido 100kb <br>";
		}else {//5
			echo "Error 1549 <br>";		
		}//5
		//comprobamos las limitaciones nuestras
	} else {//2
		if ($_FILES['archivo01']['size'] > 100000) {//3
			echo "El máximo tamaño permitido 100kb <br>";
		} elseif (!in_array($tipoarchivo, $tipopermitido)) {//3
			echo "El tipo de archivo debe ser jpg, gif o png <br>";
		} else {//3
			$correcto=true; 
			if (file_exists($rutadestino)) {//4
				$nomexp = explode('.', $archivo);
				// echo var_dump($nomexp);
				$nomok=false;
				$nomind = 0;
				while (!$nomok) {//6
					$nomind = $nomind + 1;
					$nomnuevo = $nomexp[0] . "(" . $nomind . ")";
					if (!file_exists($carpeta . $nomnuevo . "." . $nomexp[1])) {
						$archivo = $nomnuevo . "." . $nomexp[1];
						$nomok = true;
					}
				}//6
				echo "El archivo ya existe en destino, se ha realizado una copia en $archivo<br>";
			}//4
		}//3
	}//2

}//1

if (!$correcto) {
	echo "Ha ocurrido un error, archivo no subido";	
} else {
	move_uploaded_file($_FILES['archivo01']['tmp_name'], $carpeta . $archivo);
	echo "Archivo subido con éxito";
}

?>


</body>
</html>