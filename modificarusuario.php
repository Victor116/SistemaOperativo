<?php 

	$ususuario = $_POST['usuario'];
	$ususuario2 = $_POST['usuario2'];
	$contraseña = $_POST['contraseña'];
	$contraseña2 = $_POST['contraseña2'];

	require("database.php");
	if($ususuario != "" && $ususuario2 != "" && $contraseña != "" && $contraseña2 != ""){
		if($ususuario != "Paulina210914"){
			if($contraseña == $contraseña2){
				$users = mysql_query("SELECT * FROM login WHERE user ='$ususuario'");
				$checa_usuario = mysql_num_rows($users);

				if($checa_usuario > 0){
					mysql_query("DELETE FROM login WHERE user ='$ususuario'");
					mysql_query("INSERT INTO login VALUES('$ususuario2','$contraseña')");
					echo ' <script language="javascript">alert("Usuario modificado con éxito");</script> ';
					mysql_close($link);
					echo "<script>location.href='index3.php'</script>";
				}else{
					echo ' <script language="javascript">alert("Usuario no existente");</script> ';
					mysql_close($link);
					echo "<script>location.href='index3.php'</script>";
				}
			} else{
				echo '<script language="javascript">alert("Contraseñas incorrectas");</script> ';
				echo "<script>location.href='index3.php'</script>";
			}
		} else{
			echo '<script language="javascript">alert("No puedes eliminar al administrador");</script> ';
			echo "<script>location.href='index3.php'</script>";
		}
	} else {
		echo '<script language="javascript">alert("Llena los campos requeridos");</script> ';
		echo "<script>location.href='index3.php'</script>";
	}
?>