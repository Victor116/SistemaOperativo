<?php 
	session_start();
	$usuario = $_SESSION['user'];
	$nombreArchivo = $_POST['nomArchivo'];

	if($nombreArchivo != ""){
		$nombreArchivo = $usuario."/".$nombreArchivo.".txt";
		if(file_exists($nombreArchivo)){
			unlink($nombreArchivo);
			echo "<script>alert('El archivo se a elimina con exito')</script>";
			echo "<script>location.href='index2.php'</script>";
		} else {
			echo "<script>alert('El archivo no existe')</script>";
			echo "<script>location.href='index2.php'</script>";
		}
	} else {
		echo "<script>alert('Llena el campo requerido')</script>";
		echo "<script>location.href='index2.php'</script>";
	}
?>