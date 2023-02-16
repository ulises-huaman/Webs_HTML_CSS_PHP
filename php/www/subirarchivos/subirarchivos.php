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
$carpeta = "uploads/";
$archivo = $_FILES['archivo01']['name'];
$rutadestino = $carpeta . $archivo;

$tipoarchivo = $_FILES['archivo01']['type'];
$correcto = true;


echo "Archivo: $archivo <br>";
echo "Tipo de archivo: $tipoarchivo <br>";

if ($_FILES['archivo01']['error'] != 0) {
	$correcto = false;
	echo "Ha ocurrido un error, archivo no subido";	
} else {
	move_uploaded_file($_FILES['archivo01']['tmp_name'], $rutadestino);
	echo "Archivo subido con éxito";
}

?>


</body>
</html>