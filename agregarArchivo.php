<?php 
	session_start();
	$loco = $_SESSION['user'];
	$titulo = $_POST['titulo'];
	$texto = $_POST['textodelareal'];

	require("database.php");
	if($titulo != "" && $texto != ""){
		$users = mysql_query("SELECT * FROM wea WHERE title ='$titulo'");
		$checa_usuario = mysql_num_rows($users);

		if($checa_usuario > 0){
			echo '<script language="javascript">alert("Ya existe una archivo con ese nombre, eliga otro");</script> ';
			echo "<script>location.href='index2.php'</script>";
		}else{
			mysql_query("INSERT INTO wea VALUES('$loco', '$titulo','$texto')");
			echo '<script language="javascript">alert("Archivo registrado con éxito");</script> ';
			mysql_close($link);
			echo "<script>location.href='index2.php'</script>";
		}
	} else {
		echo '<script language="javascript">alert("Llena los campos requeridos");</script> ';
		echo "<script>location.href='index2.php'</script>";
	}
?>