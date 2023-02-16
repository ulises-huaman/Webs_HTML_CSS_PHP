<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manipulación de Base de Datos</title>
	<style type="text/css">

		body{
			background-color:#D4E6F1;
		}
		h3{
			font-size: 3em;
			text-align: center;
			color: #FF5733;
		}
	</style>
</head>
<body>

	<?php 

		// Recojemos los datos del formulario en las siguientes variables
		$dni_cli = $_POST['dni'];
		$nombre_cli = $_POST['nombre'];
		$apellido_cli = $_POST['apellido'];
		$tel_cli = intval($_POST['telefono']);
		$fecha_cli = date('m/d/Y h:i:s a', time());
		$tipo = gettype($tel_cli); 
		$hora = date("his");
		$id_cli = $dni_cli.$hora;


/* *****************************************Inicio de Código para subir archivos**********************/

		//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach($_FILES["myfile"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["myfile"]["name"][$key]) {
			$filename = $_FILES["myfile"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["myfile"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			$directorio = 'subidos'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino

			$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
	}
/* *****************************************Fin de Código para subir archivos**********************/        

		/*Prueba de recogida de datos a través del formulario */

		// echo "dni = $dni_cli, nombre = $nombre_cli, apellido = $apellido_cli, telefono = $tel_cli y fecha = $fecha_cli tipo = $tipo, Hora actual= $hora, ID = $id_cli";

		//Establecemos la conexión, para ello la conexión lo guardamos en una variable
			$conexion = mysqli_connect('localhost', 'root','','business') or die('Error en la conexión, revise los datos de acceso');
			mysqli_set_charset($conexion, "utf8");

			//guardamos la sentencia SQL en una variable
			//Ojo. La consulta se hace a la tabla
			// $consulta1 = "SELECT * FROM customers";
			$insertar_cli = "INSERT INTO customers (id, dni, nombre, apellido, telefono, fecha) VALUES('$id_cli','$dni_cli','$nombre_cli', '$apellido_cli', $tel_cli, '$fecha_cli')";

			//El resultado es un array
			$insertar = mysqli_query($conexion,$insertar_cli) or die(' Error en guardar dato');

			echo "<h3>Gracias por su elección, en breve nos pondremos en contacto contigo.</h3>";
			

			// $resultado1 = mysqli_query($conexion,$consulta1) or die('Error en la consulta');


			// $row_resultado = mysqli_fetch_assoc($resultado1);//mysqli_fetch_assoc recorre la pila de objetos
			// //var_dump($row_resultado);			
		?>

		<!-- <table border="1">
			<tr>
				<th colspan="6">Resultado de la búsqueda</th>
			</tr>
			<tr>
				<th>Id</th>
				<th>DNI</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Teléfono</th>
				<th>Fecha</th>
			</tr> -->
			
		
		<!-- <?php 

			// do{
			// 	echo "<tr>";
			// 	echo "<td>".strtoupper($row_resultado['id'])."</td>";
			// 	echo "<td>".strtoupper($row_resultado['dni'])."</td>";
			// 	echo "<td>".strtoupper($row_resultado['nombre'])."</td>";
			// 	echo "<td>".strtoupper($row_resultado['apellido'])."</td>";
			// 	echo "<td>".strtoupper($row_resultado['telefono'])."</td>";
			// 	echo "<td>".strtoupper($row_resultado['fecha'])."</td>";
			// 	echo "</tr>";

			// } while ($row_resultado = mysqli_fetch_assoc($resultado1));
		 ?> -->
	</table>
</body>
</html>