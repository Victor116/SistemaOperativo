<?php
	session_start();
	if($_SESSION['user'] == "" ){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema Operativo</title>
	<link rel="stylesheet" href="crack.css">
	<link rel="shortcut icon" href="img/Inicio.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>   

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
	<script src="js/jquery-2.2.1.js"></script>
	<script src="js/external/jquery.js"></script>
	<script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
	<script src="jquery-ui-1.11.4.custom/external/jquery.js"></script>
	<script src="query-ui-1.9.2.custom.min.js"></script>
	<script src="jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.draggable"></script>
	<link rel="stylesheet" href="new/jquery-ui-1.11.4.custom/jquery-ui.min.css">
	<script type="text/javascript" src="main.js"></script>
</head>

<body class="tamanoW7">
	<section class="tamanoSection" id='disponible'>
		<div id='calculadora_chida'></div>

		<div class="administrar" id='administradorchido'>
			<p class="ggysy"> Administrar</p>
			<figure class="posicion_barraCerrar" style="display: inline-block">
				<img class="tamano_barraCerrar pad" src="img/barra_cerrar.jpg" usemap="#botones">
				<map name="botones">
					<area shape="rect" coords="46,0,85,25" alt="Minimizar" onclick='ocultar3()'>
				</map>
			</figure>
			<div class="administradatos">
				<div class="listausuario">
					<?php 
						$db_host = "localhost";
						$db_nombre = "php_db";
						$db_usuario = "root";
						$db_contra = "";
						
						$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
						$consulta = "SELECT user FROM login";
						$resultados = mysqli_query($conexion, $consulta);
						$fila = mysqli_fetch_array($resultados);
						
						do{
							if($fila['user'] == "Paulina210914"){
							} else {
								echo "<p class='useradministrado'><i class='material-icons'>assignment_ind</i>".$fila[0]."</p>";
							}
						}while ($fila = mysqli_fetch_array($resultados));
					?>
				</div>
				<div class="haceroperaciones">
					<div class="titulouser">
						<h3>Alta de usuarios</h3>
						<form class="espacio-formulario" method="post" action="registrousuario.php">
							Ingresa nuevo usuario:
							<input type="text" name="usuario" placeholder="Ingresa nuevo usuario"/><br>
					      	Ingresa contraseña:
					     	<input type="password" name="contraseña" placeholder="Ingresa contraseña"/><br>
					        <input type="submit" name="submit" value="Registrarse"/>
						</form>
					</div>
					<div class="titulouser">
						<h3 >Baja de usuarios</h3>
						<form class="espacio-formulario" method="post" action="eliminarusuario.php">
							Ingresa usuario a eliminar:
							<input type="text" name="usuario" placeholder="Ingresa un usuario"/><br>
					        <input type="submit" name="submit" value="Eliminar"/>
						</form>
					</div>
					<div class="titulouser">
						<h3>Modificar usuarios</h3>
						<form class="espacio-formulario" method="post" action="modificarusuario.php">
							Ingresa usuario:
							<input type="text" name="usuario" placeholder="Ingresa usuario"/><br>
							Ingresa nuevo nombre usuario:
							<input type="text" name="usuario2" placeholder="Ingresa nuevo usuario"/><br>
							Ingresa nueva contraseña:
							<input type="password" name="contraseña" placeholder="Ingresa nuevo contraseña"/><br>
							Confirmar contraseña:
							<input type="password" name="contraseña2" placeholder="Confirmar contraseña"/><br>
					        <input type="submit" name="submit" value="Modificar"/>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="tamanoCreditos" id='datos'>
			<figure class="posicion_barraCerrar2">
				<img class="tamano_barraCerrar" src="img/barra_cerrar.jpg" usemap="#credis">
				<map name="credis">
					<area shape="rect" coords="46,0,85,25" alt="Minimizar" onclick='ocultar2()'>
				</map>
			</figure>
			<img src="img/upchiapas.png" class="logotipo">
			<h2>Ingenieria en Desarrollo de Software</h2>
			<h2>Juan Calos Lopez Pimentel</h2>
			<h2>Programacion web</h2>
			<h2>Gil Calderón Víctor Fernando</h2>
			<h2>143395</h2>
			<h2>Corte 2 Grupo A</h2>
			<h4>5 Febrero 2016</h4>
		</div>
	</section>

	<div class="barraInicio">
		<ul>
			<li> 
				<img src="img/Inicio.ico" class="inicio">
				<ul class="nav">
					<li>
						<div class="izquierdomenu">
							<hr class="diferente">
							<p class="azulito borde"><img src="img/League-of-Legends.ico" class="figura">League of Legends</p>
							<p class="azulito"><img src="img/calculadora.ico" class="figura">	Calculadora</p>
							<p class="azulito"><img src="img/notes_128.ico" class="figura">		Notas</p>
							<hr>
							<p class="azulito"><img src="img/bloc_de_notas.ico" class="figura">	Block de Notas</p>
							<p class="azulito"><img src="img/icon109.ico" class="figura">		CodeBlocks</p>
							<p class="azulito"><img src="img/Sublime_Text_Logo.ico" class="figura">Sublime Text</p>
							<p class="azulito"><img src="img/adobe.ico" class="figura">			Adobe Reader</p>
							<p class="azulito bordeajo"><img src="img/M_W_2013.ico" class="figura">Word 2013</p>
						</div>
					</li>
					<li>
						<div class="derechomenu">
							<figure>
								<img class="img" src="img/Pabu.jpg" onclick='mostrar2()'>
							</figure>
							<div class="letrasblancas">
								<p class="grisesito">Victor</p>
								<p class="grisesito" onclick='mostrar3()'>Administrar</p>
								<p class="grisesito">Imagenes</p>
								<p class="grisesito">Musica</p>
								<hr>
								<p class="grisesito">Equipo</p>
								<p class="grisesito">Juegos</p>
								<hr>
								<p class="grisesito">Panel de Control</p>
								<p class="grisesito">Ejecutar</p>
								<p class="grisesito">Ayuda y Soporte</p>
								<hr class="diferente">
							</div>

							<div class="apagar">
								<form action="cerrar.php">
									<input type="submit" value="Cerrar secion">
									<img class="xx" src="img/botoncito.png">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</li>

			<li>
				<a href="https://www.google.com.mx">
					<img src="img/Chrome.ico" class="tamano_menu">
				</a> </li>
			<li><img src="img/folder_icon_512x512.ico"class="tamano_menu"></li>
			<li> <img src="img/Media.ico" class="tamano_menu"></li>
			<li>
				<a href="http://www.w3schools.com">
					<img src="img/favicon_converted.ico" class="tamano_menu">
				</a> </li>
			<li> 
				<a href="https://www.facebook.com/">
					<img src="img/Facebook.ico" class="tamano_menu">
				</a> </li>
			<li>
				<a href="https://twitter.com/">
					<img src="img/Twitter.ico" class="tamano_menu">
				</a> </li>
			<li>
				<audio autoplay>
					<source src="horse.ogg" type="audio/ogg">
					<source src="w7.mp3" type="audio/mpeg">		
				</audio>
			</li>
		</ul>
	</div>
</body>
</html>