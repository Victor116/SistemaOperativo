<?php
	$link =mysql_connect("localhost","root","");
	if($link){
		mysql_select_db("php_db",$link) or die("No se encontro la base de datos");
	} else {
		echo "Error con la base de datos";
	}
?>