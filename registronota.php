<?php  

	session_start();
	if($_SESSION['user'] == "" ){
		header("Location: index.php");
	}

	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	$loco = $_SESSION['user'];

	require("database.php");
	if($titulo != "" && $texto != ""){
		$users = mysql_query("SELECT * FROM notas WHERE titulo ='$titulo'");
		$checa_usuario = mysql_num_rows($users);

		if($checa_usuario > 0){
			echo '<script language="javascript">alert("Ya existe una nota con ese nombre, eliga otro");</script> ';
			echo "<script>location.href='index2.php'</script>";
		}else{
			mysql_query("INSERT INTO notas VALUES('$loco', '$titulo','$texto')");
			echo '<script language="javascript">alert("Nota registrada con éxito");</script> ';
			mysql_close($link);
			echo "<script>location.href='index2.php'</script>";
		}
	} else {
		echo '<script language="javascript">alert("Llena los campos requeridos");</script> ';
		echo "<script>location.href='index2.php'</script>";
	}
?>