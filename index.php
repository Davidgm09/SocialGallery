<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/estilo.css">
	<script type="text/javascript" src="js/codi.js"></script>
</head>
<body style="color: white; text-align: center;">
	<br>
	<br>
	<h1>Login</h1>
	<form method="post" action="./servicios/login.proc.php" onsubmit= "return login()">
		<input type="text" name="user" placeholder="Inserta el usuario..." id="user"><br/>
		<input type="password" name="password" placeholder="Inserta el password" id="password"><br/><br/>
		<input type="submit" name="Enviar">
	</form>
	<p style="text-align: center; color: white;" class="mensaje" id="mensaje"></p>

	<br>

	<?php
		if(isset($_REQUEST['error'])){
			echo "El usuario o la contraseña son incorrectos";	
	}
	?>
	
</body>
</html>