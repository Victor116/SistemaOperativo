<?php
	session_start();
	$usuario = $_SESSION['user'];
	$nombreArchivo = $_POST['nomArchivo'];
	$textodelArchivo = $_POST['textoArchivo'];
	
	function creandoDirectorio($nombreDirectorio){
		mkdir("$nombreDirectorio");
	}

	function creandoArchivo($nameArchivo, $qHara, $textodelArchivoenido){
		$abriendoArchivo = fopen($nameArchivo, $qHara);
		fwrite($abriendoArchivo, $textodelArchivoenido);
		fclose($abriendoArchivo);
	}

		if($nombreArchivo != ""){
			if($textodelArchivo != ""){
				$nombreDirectorio = $usuario; 
				$nombreArchivo = $nombreDirectorio."/".$nombreArchivo.".txt";
				$instruccion = "w+";
				$textodelArchivoenido = $textodelArchivo;
				
				if(file_exists($nombreArchivo)){
					echo "<script>alert('El archivo ya existe')</script>";
				} else {
					@creandoDirectorio($nombreDirectorio);
					creandoArchivo($nombreArchivo,$instruccion,$textodelArchivoenido);
					// echo "<script>alert('Listo se creo lince')</script>";
					echo "<script>location.href='index2.php'</script>";
			    }
			} else {
				echo "<script>alert('Llene el campo de texto')</script>";
				echo "<script>location.href='index2.php'</script>";

				}
		} else {
			echo "<script>alert('Llene el campor de titulo')</script>";
			echo "<script>location.href='index2.php'</script>";

		}
?>