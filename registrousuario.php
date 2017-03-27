<?php

	$ususuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];

	require("database.php");
	if($ususuario != "" && $contraseña != ""){

		$users = mysql_query("SELECT * FROM login WHERE user ='$ususuario'");
		$checa_usuario = mysql_num_rows($users);

		if($checa_usuario > 0){
			echo '<script language="javascript">alert("Atencion, ya existe un usuario con ese nombre, eliga otro");</script> ';
			echo "<script>location.href='index3.php'</script>";
		}else{
			mysql_query("INSERT INTO login VALUES('$ususuario','$contraseña')");
			echo ' <script language="javascript">alert("Usuario registrado con éxito");</script>';
			echo "<script>location.href='index3.php'</script>";
		}
	} else {
		echo '<script language="javascript">alert("Llena los campos requeridos");</script> ';
		echo "<script>location.href='index3.php'</script>";
	}
?>