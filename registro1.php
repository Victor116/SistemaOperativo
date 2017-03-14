<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="crack.css">
</head>
<body>
	<div>
		<form method="post">
		  <fieldset>
		        <p>Registro</p>
		        Ingresa tu Usuario
		        <input type="text" name="usuario" placeholder="Ingresa tu nombre" /><br><br>

		      	Ingresa tu Contraseña
		     	<input type="password" name="contraseña" placeholder="Ingresa contraseña" /><br><br>
		   
		        <input type="submit" name="submit" value="Registrarse"/>
		  </fieldset>
		</form>
	</div>

	<?php
		if(isset($_POST['submit'])){
			require("registro.php");
			echo "<script>location.href='index.php'</script>";
		}
	?>
</body>
</html>
	