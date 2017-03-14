<?php 

	session_start();
	$quienes = ($_SESSION['user'];
	$titulo = $_POST['title'];
	$texto = $_POST['textodelarea'];

	if($titulo != ""){
		if($texto != ""){
			
		}else {
			echo "<script>alert('Llena el campo de texto')</script>";
			echo "<script>location.href='index2.php'</script>";
		}
	} else {
		echo "<script>alert('Llena el campo de titulo')</script>";
		echo "<script>location.href='index2.php'</script>";
	}
?>