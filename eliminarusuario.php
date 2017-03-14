<?php 

	$ususuario = $_POST['usuario'];

	require("database.php");
	if($ususuario != ""){
		if($ususuario != "Paulina210914"){
			$users = mysql_query("SELECT * FROM login WHERE user ='$ususuario'");
			$checa_usuario = mysql_num_rows($users);

			if($checa_usuario > 0){
				$users2 = mysql_query("DELETE FROM login WHERE user ='$ususuario'");
				$checa_usuario2 = mysql_num_rows($users);
				echo ' <script language="javascript">alert("Usuario eliminado con éxito");</script> ';
				mysql_close($link);
				echo "<script>location.href='index3.php'</script>";
			}else{
				echo ' <script language="javascript">alert("Usuario no existente");</script> ';
				mysql_close($link);
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