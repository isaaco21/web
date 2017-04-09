<?php
	session_start();

	include_once("motor/funciones.php");

	if($_POST){
		/*Recibiendo los datos!*/
		$user=$_POST['registroInputUser'];
		$nombre=$_POST['registroInputNombre'];
		$email=$_POST['registroInputEmail'];
		$registroPass=$_POST['registroInputPass'];
		$registroConfirmPass=$_POST['registroInputconfirmPass'];
		$registroImagen=$_FILES['registroInputImagenUsuario']['name'];

		if($registroPass!=$registroConfirmPass){
			echo"<script>alert('Las contraseñas no coinciden');</script>";
		}

		include_once("motor/guardarImagenUsuario.php");
		include_once("motor/funciones.php");
		echo registrarUsuarios($user,$nombre,$email,$registroPass,$registroImagen);		
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
                            <h1>Registrate</h1>
                        </div>
                        <div class="formRegistroDiv">
                            <div class="formDiv">
                                <form id="formRegistro" class="formLayout" name="formRegistro" action="registrate.php" method="post" enctype="multipart/form-data" >
                                    <input placeholder="Usuario" type="text" name="registroInputUser" class="formInput" required>
                                    <input placeholder="Nombre" type="text" name="registroInputNombre" class="formInput" required>
                                    <input placeholder="E-Mail" type="text" name="registroInputEmail" class="formInput" required>
                                    <input placeholder="Contraseña" type="password" name="registroInputPass" class="formInput" required>
                                    <input placeholder="Confirmar Contraseña" type="password" name="registroInputconfirmPass" class="formInput" required>
                                    <input placeholder="Imagen de Usuario" type="file" name="registroInputImagenUsuario" class="formBtn" >

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