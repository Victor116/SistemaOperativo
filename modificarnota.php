<?php  
	session_start();
	if($_SESSION['user'] == "" ){
		header("Location: index.php");
	}

	$titulo = $_POST['titulo'];
	$titulo2 = $_POST['titulo2'];
	$texto = $_POST['texto'];
	$loco = $_SESSION['user'];

	require("database.php");
	if($titulo != "" && $texto != ""){
		$users = mysql_query("SELECT * FROM notas WHERE titulo ='$titulo'");
		$checa_usuario = mysql_num_rows($users);

		if($checa_usuario > 0){
			mysql_query("DELETE FROM notas WHERE titulo ='$titulo'");
			mysql_query("INSERT INTO notas VALUES('$loco', '$titulo2','$texto')");
			mysql_close($link);
			echo '<script language="javascript">alert("Nota registrada con éxito");</script> ';
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