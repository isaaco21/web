<?php
	$servidor='localhost';
	$usuario='root';
	$pass='';
	$db='db-bike-dhtml-final-web';
	mysql_connect($servidor,$usuario,$pass) or 
	die("<script>alert('Lo sentimos, hubo un error al conectar la Base de Datos');</script>");
	mysql_select_db($db) or 
	die("<script>alert('Lo sentimos, no se encontro la Base de Datos');</script>");
	
?>