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
		<div id='calculadora_chida'>
			<div class="fondo_calculadora">
				<figure class="posicion_barraCerrar">
					<img class="tamano_barraCerrar" src="img/barra_cerrar.jpg" usemap="#botones">
					<map name="botones">
						<area shape="rect" coords="46,0,85,25" alt="Minimizar" onclick='ocultar()'>
					</map>
				</figure>
				<form>
					<input type="text" class="text-calculadora" value="0" name="resultado" onclick=''>
					<input type="button" class="boton_calculadora" value="1" onclick="agregarnumero(form.resultado, '1')">
					<input type="button" class="boton_calculadora" value="2" onclick="agregarnumero(form.resultado, '2')">
					<input type="button" class="boton_calculadora" value="3" onclick="agregarnumero(form.resultado, '3')">
					<input type="button" class="boton_calculadora" value="+" onclick="agregarnumero(form.resultado, '+')">
					<input type="button" class="boton_calculadora" value="-" onclick="agregarnumero(form.resultado, '-')">
					<input type="button" class="boton_calculadora" value="4" onclick="agregarnumero(form.resultado, '4')">
					<input type="button" class="boton_calculadora" value="5" onclick="agregarnumero(form.resultado, '5')">
					<input type="button" class="boton_calculadora" value="6" onclick="agregarnumero(form.resultado, '6')">
					<input type="button" class="boton_calculadora" value="*" onclick="agregarnumero(form.resultado, '*')">
					<input type="button" class="boton_calculadora" value="/" onclick="agregarnumero(form.resultado, '/')">
					<input type="button" class="boton_calculadora" value="7" onclick="agregarnumero(form.resultado, '7')">
					<input type="button" class="boton_calculadora" value="8" onclick="agregarnumero(form.resultado, '8')">
					<input type="button" class="boton_calculadora" value="9" onclick="agregarnumero(form.resultado, '9')">
					<input type="button" class="boton_calculadora" value="." onclick="agregarnumero(form.resultado, '.')">
					<input type="button" class="boton_calculadora" value="=" onclick="calcular(form)" name="enter">
					<input type="button" class="boton_calculadora" value="0" onclick="agregarnumero(form.resultado, '0')">
					<input type="button" class="boton_calculadora borrar" value="Borrar" onclick="eliminarnumero(form.resultado)">
					<input type="button" class="boton_calculadora" value="%" onclick="agregarnumero(form.resultado, '%')">
					<input type="button" class="boton_calculadora" value="C" onclick="form.resultado.value = 0">
				</form>
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
			<h2>Corte 3 Grupo A</h2>
			<h4>8 ABRIL 2016</h4>
		</div>

		<div class="tamanoBlocNotas" id='bblocknotas'>
			<p class="ggysy">Gestor de Bloc de Notas</p>
				<figure class="posicion_barraCerrar pad" style="display: inline-block">
					<img class="tamano_barraCerrar" src="img/barra_cerrar.jpg" usemap="#cerrarBlocNotas">
					<map name="cerrarBlocNotas">
						<area shape="rect" coords="46,0,85,25" alt="Minimizar" onclick='ocultar4()'>
					</map>
				</figure>
			<div class="administradatos">
				<div class="listausuario">
					<?php
						$quienes = $_SESSION['user'];
						$directorio = opendir($quienes."/"); //ruta actual
						while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente
							if(is_dir($archivo)){//verificamos si es o no un directorio
							    // echo "[".$archivo . "]<br>"; //de ser un directorio lo envolvemos entre corchetes
							} else {
							    echo "<p>".$archivo . "</p>";
							}
						}
					?>
				</div>
				<div class="haceroperaciones">
					<div class="titulouser">
						<h3>Nuevo Archivo</h3>
						<form  method="post" action="crearArchivo.php">
							Nombre del archivo:<input type="text" placeholder="Insetar nombre del archivo" name="nomArchivo"><br>
							Texto del archivo:<textarea type="text" class="textomaschido" cols="18" rows="4" placeholder="Insetar texto del archivo" name="textoArchivo"></textarea>
							<input type="submit" name="submit" value="Crear Archivo">
						</form>
					</div>
					<div class="titulouser">
						<h3>Eliminar Archivo</h3>
						<form  method="post" action="eliminarArchivo.php">
							Nombre del archivo:<input type="text" placeholder="Insetar nombre del archivo" name="nomArchivo"><br>
							<input type="submit" name="submit" value="Eliminar Archivo">
						</form>
					</div>
					<div class="titulouser">
						<h3>Modificar Archivo</h3>
						Buscar: <br>
						<input type="file" id='filefile' value="Abrir con el Editor" onclick='abrirEditor()'>
					</div>
				</div>
				</div>
		</div>

		<div class="administrar" id='administradorchido'>
				<p class="ggysy"> Notas</p>
				<figure class="posicion_barraCerrar" style="display: inline-block">
					<img class="tamano_barraCerrar pad" src="img/barra_cerrar.jpg" usemap="#botonesss">
					<map name="botonesss">
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
						$loco = $_SESSION['user'];
						$consulta = "SELECT titulo FROM notas WHERE usuario = '$loco'";
						$resultados = mysqli_query($conexion, $consulta);
						$fila = mysqli_fetch_array($resultados);
						
						do{
							echo "<p class='useradministrado'>".$fila[0]."</p>";
						}while ($fila = mysqli_fetch_array($resultados))?>
				</div>
				<div class="haceroperaciones">
					<div class="titulouser">
						<h3>Nueva nota</h3>
						<form class="espacio-formulario" method="post" action="registronota.php">
							Titulo de la nueva nota:
							<input type="text" name="titulo" placeholder="Ingresa un Titulo"/><br>
							<textarea class="textomaschido" name="texto" placeholder="Ingresa texto" cols="10" rows="4"></textarea>
					  		<br>
					        <input type="submit" name="submit" value="Crear Nota"/>
						</form>
					</div>
					<div class="titulouser">
						<h3>Eliminar nota</h3>
						<form class="espacio-formulario" method="post" action="eliminarnota.php">
							Ingresa nota a eliminar:
							<input type="text" name="titulo" placeholder="Ingresa titulo de la nota"/><br>
					        <input type="submit" name="submit" value="Eliminar"/>
						</form>
					</div>
					<div class="titulouser">
						<h3>Modificar notas</h3>
						<form class="espacio-formulario" method="post" action="modificarnota.php">
							Ingresa titulo de la nota a modificar:
							<input type="text" name="titulo" placeholder="Ingresa titulo"/><br>
							Ingresa nuevo titulo:
							<input type="text" name="titulo2" placeholder="Ingresa nuevo titulo"/><br>
							Ingresa texto:
							<textarea class="textomaschido" name="texto" placeholder="Ingresa un texto" cols="10" rows="4"></textarea>
					        <input type="submit" name="submit" value="Modificar"/>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="notas1" id='notas'>
			<figure class="	">
				<img class="tamano_barraCerrar" src="img/barra_cerrar.jpg" usemap="#notas">
				<map name="notas">
					<area shape="rect" coords="46,0,85,25" alt="Minimizar" onclick='ocultar5()'>
				</map>
			</figure>
			<div class="menutamano23">
				<input type="button" class="boton_archivo" value="Gestor de Archivo" onclick='mostrar4()'>
				<input type="text" class="boton_archivo" placeholder="Pon una fuente" id='fuente'>
				<input type="button" class="boton_archivo" value="Cambiar letra" onclick='cambiarFuente()'>
				<input type="text" class="boton_archivo" placeholder="Pon una tamaño de letra" id='tamanoLetra'>
				<input type="button" class="boton_archivo" value="Cambiar tamaño" onclick='cambiarTamano()'><br>
				<input type="button" class="boton_archivo" value="Modificar" onclick='cambiarModificar()'>
				<input type="button" class="boton_archivo" value="Insertar" onclick='cambiarModificar()'>
			</div>
			<div class="displayyy" id='a117'>
				<form action="crearArchivo.php" method="post" class="displayyy">
					<input type="button" class="boton_archivo" name="button" value="Deshacer" id='hacer' onclick="document.execCommand('undo', false, null);">
					<input type="button" class="boton_archivo" name="button" value="Hacer" id='deshacer' onclick="document.execCommand('redo', false, null);">
					<input type="text" class="boton_archivo" name="nomArchivo" placeholder="Pon un titulo" >
					<input type="submit" name="submit" class="boton_archivo" value="Guardar">
					<textarea class="text_archivo2" name="textoArchivo" id='textoNotas' cols="30" rows="4"></textarea>
				</form>
			</div>
			<div class="displayyy2" id='a13'>
				<form action="modificarArchivo.php" method="post">
					<input type="text" class="boton_archivo" name="titulos" placeholder="Pon titulo actual">
					<input type="text" class="boton_archivo" name="newtitulo" placeholder="Pon un nuevo titulo" >
					<input type="submit" name="submit" class="boton_archivo" value="Guardar">
					<textarea class="text_archivo2" name="textodelarea" id='textoNotas' cols="30" rows="4"></textarea>
				</form>
			</div>		
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
							<p class="azulito" onclick='mostrar()'>
								<img src="img/calculadora.ico" class="figura">Calculadora</p>
							<p class="azulito" onclick='mostrar3()'>
								<img src="img/notes_128.ico" class="figura">Notas</p>
							<hr>
							<p class="azulito" onclick='mostrar5()'>
								<img src="img/bloc_de_notas.ico" class="figura">Bloc de notas</p>
							<p class="azulito"><img src="img/icon109.ico" class="figura">CodeBlocks</p>
							<p class="azulito"><img src="img/Sublime_Text_Logo.ico" class="figura">Sublime Text</p>
							<p class="azulito"><img src="img/adobe.ico" class="figura">Adobe Reader</p>
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
								<p class="grisesito">Documents</p>
								<p class="grisesito" onclick='mostrar4()'>Gestor de Archivo</p>
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