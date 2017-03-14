<?php
session_start();
	require("database.php");

	$ususuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];

	if($ususuario != "" && $contraseña != ""){
		$users = mysql_query("SELECT * FROM login WHERE user ='$ususuario'");
		if($f=mysql_fetch_array($users)){
			if($contraseña == $f['contra']){
				$_SESSION['user'] = $f['user'];
				if($f['user'] == "Paulina210914"){
					echo '<script>alert("Bienvenido ")</script> ';
					header("Location: index3.php");
				} else {
					header("Location: index2.php");
				}
			}else{
				echo '<script>alert("Contraseña incorrecta")</script> ';
				echo "<script>location.href='index.php'</script>";
			}
		}else{
			echo '<script>alert("Este usuario no existe, Registrate para ingresar")</script>';
			echo "<script>location.href='index.php'</script>";
		}
	} else {
		echo '<script>alert("Llena todos los campos")</script> ';
		echo "<script>location.href='index.php'</script>";	
	}
?>