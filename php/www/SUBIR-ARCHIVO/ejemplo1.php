<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Subida de archivos</title>
	<style type="text/css">
        *{ 
            font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif
        }

        .main{ margin:auto;
             border:1px solid #7C7A7A; 
             width:50%; 
             text-align:left; 
             padding:30px; 
             background:#85c587;
         }

        input[type=submit]{ background:#6ca16e; width:100%;
            padding:5px 15px; 
            background:#ccc; 
            cursor:pointer;
        	font-size:16px;
           
        }
        table td{ padding:5px;}
</style>
</head>
<body>
	<body bgcolor="#bed7c0">
        <div class="main">
        <h1>Subir archivo con PHP:</h1>
        <?php 

        	  $directorio = "archivos/";
              $subir_archivo = $directorio.basename($_FILES['subir_archivo']['name']);
                  echo "<div>";
               if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
                  echo "El archivo es válido y se cargó correctamente.<br><br>";
                  echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
                } else {
                           echo "La subida ha fallado";
                        }
                        echo "</div>";

         ?>
         <br>
            <div style="border:1px solid #000000; text-transform:uppercase">  
            <h3 align="center"><div align="center"><a href="ejemplo.html">Volver </a></div></h3></div>

</body>
</html>