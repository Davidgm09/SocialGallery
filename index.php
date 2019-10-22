<!DOCTYPE html>
<html>
<head>
	<title>Galeria de Imagenes</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

	<h1>Galeria de Imagenes</h1>
	<hr style="color: white;">
	<br>


	<!--Formulario -->

	<form method="post" enctype="multipart/form-data" action="./servicios/procesa.php" >
		<input type="text" name="titulo" placeholder="Titulo..." required>
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
		<input type="file" name="imagen" placeholder="Imagen..." required>
		<!-- Con el accept validamos que los archivos sean de la extension que queremos -->
		<input type="submit" value="Enviar" accept="image/jpeg,image/png,image/jpg,image/gif">
	</form>
	<br>
	<hr style="color: white;">
	<br>
	<br>



	<?php
	// Conexion base de datos
	include "./servicios/conexion.php";
	include "./servicios/conexion.php";
	
	//VALIDACIONES

	



	
		


	// Seleccion y muestra de datos de la base de datos
	$result = mysqli_query($conn,"SELECT imagen.titulo_imagen,imagen.link_imagen FROM imagen");

		if(!empty($result) && mysqli_num_rows($result)>0){
			echo "<div class='gallery'>";
			echo "<div class='centrar'>";
			// Pintame el resultado (row es fila)
			while($row = mysqli_fetch_array($result)){
				// Añadimos la imagen a la pagina web con la etiqueta img html
				echo "<img src=./".$row['link_imagen'].">";
				echo "<br>";
				// Añadimos la imagen a la pagina web conla etiqueta h2 html
				// echo "<h2>".$row['titulo_imagen']."</h2>";
			}
		}else{
			echo "0 resultados";
		}
			echo "</div>";
			echo "</div>";

?>
</body>
</html>