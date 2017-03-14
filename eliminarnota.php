<?php  

	session_start();
	if($_SESSION['user'] == "" ){
		header("Location: index.php");
	}

	$titulo = $_POST['titulo'];

	require("database.php");
	if($titulo != ""){
		$users = mysql_query("SELECT * FROM notas WHERE titulo ='$titulo'");
		$checa_usuario = mysql_num_rows($users);

		if($checa_usuario > 0){
			mysql_query("DELETE FROM notas WHERE titulo ='$titulo'");
			mysql_close($link);
			echo '<script language="javascript">alert("Se a eliminaod una nota");</script> ';
			echo "<script>location.href='index2.php'</script>";
		}else{
			mysql_close($link);
			echo '<script language="javascript">alert("Nota no existente");</script> ';
			echo "<script>location.href='index2.php'</script>";
		}
	} else {
		mysql_close($link);
		echo '<script language="javascript">alert("Llena los campos requeridos");</script> ';
		echo "<script>location.href='index2.php'</script>";
	}
?>