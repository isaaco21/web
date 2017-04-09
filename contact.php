<?php
	session_start();
	include_once("motor/funciones.php");
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
                <section id="cuerpoPrincipal" >
                    <div id="contenido" class="widthDe100">
                        <div class="tituloPrincipal centrarTexto">
                            <h1>Contacto</h1>
                        </div>
                        <div id="formContactoDiv">
                            <div class="formDiv">
                                <form id="formmm" class="formLayout" method="post" name="formContacto" action="sbuy.php" onsubmit="return Validarr();">
                                    <input type="text" name="txtUsuario" placeholder="Nombre" required autocomplete="off">
                                    <input type="text" name="txtEmail" placeholder="Correo" required autocomlete="off">
                                    <input type="password" name="txtPass" placeholder="Pass" required autocomlete="off">
									<input type="text" name="txtTipo" placeholder="Tipo" required autocomlete="off">
									<input type="text" name="txtAsunto" placeholder="Asunto" required autocomlete="off">
                                    <textarea placeholder="Mensaje" required name='txtMensaje' class="form-control" rows="3"></textarea>
                                    <input type="submit" value="Enviar" class="formBtn" onclick="recibido();">
																	
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