<?php
	session_start();
	include_once("motor/funciones.php");
	
	if($_POST){
		$usuarioIniciarSesion=$_POST['iniciarSesionInputUsuario'];
		$passIniciarSesion=md5($_POST['iniciarSesionregistroInputPass']);
		/*Incluimos archivo de Conexion*/
		include("motor/conexion.php");
		
		/*Consultamos la tabla Usuario*/
		$consulta =mysql_query("
			SELECT user, passwords, nombre, email, imagen FROM registro WHERE user='$usuarioIniciarSesion' AND passwords='$passIniciarSesion'
		");
		if(mysql_num_rows($consulta)>0){
			//echo"Usuario correcto, logearlo";
			$fila=mysql_fetch_assoc($consulta);
			$usuarioIniciarSesion=$fila['user'];
			$user_name=$fila['nombre'];
			$email=$fila['email'];
			$imagenPerfil=$fila['imagen'];
			/*Creamos las variables para ser pasadas por URL*/
			$url="?usuarioIniciarSesion=$usuarioIniciarSesion&nombre=$user_name&email=$email&imagenPerfil=$imagenPerfil";
			echo$pagina="crear_session.php$url";
			echo"<script>location.href='$pagina'</script>";
			//session_write_close();
			//$fila['Nick'];
		}else{
			echo"<script>alert('Usuario o clave incorrecto');</script>";
		}
	}
?>


<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Nike - Oficial Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
        <link type="text/css" rel="stylesheet" a href="css_styles/hojaCSS3.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/motor.js"></script>
	</head>
    <body>
        <div id="contenedorPrincipal">
            <?php
                include_once("header.php");
            ?>
            <div id="contenidoPrincipal">  
                <section id="cuerpoPrincipal">
                    <div id="contenido" class="widthDe100">
                        <div class="tituloPrincipal centrarTexto">
                            <h1>Inicia Sesion</h1>
                        </div>
                        <div class="formIniciarSesionDiv">
                            <div class="formDiv">
                                <form id="formRegistro" class="formLayout" name="formIniciarSesion" action="IniciarSesion.php" method="post">
                                    <input placeholder="Usuario" type="text" name="iniciarSesionInputUsuario" class="formInput">
                                    <input placeholder="Contraseña" type="password" name="iniciarSesionregistroInputPass" class="formInput">
                                    
                                    <input type="submit" class="formBtn">
                                    <input type="reset" class="formBtn">
                                </form>
                            </div> 
                        </div>
                        
				    </div>
                </section> 
            </div>
        </div>				
       <?php
            include_once( "footer.php");
        ?>	
    </body>
</html>