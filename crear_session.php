<?php
	session_start();
	session_regenerate_id();
	echo $_SESSION['user']=$_GET['usuarioIniciarSesion'];
	echo $_SESSION['nombre']=$_GET['nombre'];
	echo $_SESSION['email']=$_GET['email'];
	echo $_SESSION['imagenPerfil']=$_GET['imagenPerfil'];
	session_write_close();
	/*Redireccionamos a nuestro home con la Session creada*/
	echo"<script>location.href='index.php'</script>";
?>
