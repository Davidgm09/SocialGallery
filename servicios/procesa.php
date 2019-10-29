<?php
include "./conexion.php";
//..validaciones..



if($_FILES["imagen"]["size"]>200000){
 		echo "Solo se permiten archivos menores de 2MB";
 		echo "<a href='../misitio.php'>Volver</a>";
 		exit;
 	}

// Insertar en la base de datos y mover la imagen de sitio
$titulo =$_REQUEST['titulo'];
$destinacion ="./web/galeria/".basename($_FILES['imagen']['name']);
session_start();
$id_user=$_SESSION['id'];

if(move_uploaded_file($_FILES['imagen']['tmp_name'], "../".$destinacion)){ //movemos el archivo
	//insertamos en la base de datos
	mysqli_query($conn,"INSERT INTO imagen(titulo_imagen,link_imagen,id_usuario) VALUES ('$titulo','$destinacion','$id_user')");
	header("Location: ../misitio.php");
}else{
	echo "Error!!!!";
	echo "<a href='../misitio.php/'> HOME </a>";
}

?>