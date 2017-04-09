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
                
                <section id="cuerpoPrincipal">
                    <div id="contenido">
                        <div class="latestTitulo tituloPrincipal centrarTexto">
                            <h2>Latest from Nike</h2>
                        </div>
                        <div class="welcomeTitle tituloPrincipal centrarTexto">
                            <h1>Welcome to our Site!</h1>
                            <h2><a href="contact.php">Sign Up</a> to enjoy our content or <a href="contact.php">Register</a></h2>
                        </div>
                    </div>
                    <aside class="panelLateral">
                
                    </aside>
                </section>
            </div>
        </div>				
       <?php
            include_once( "footer.php");
        ?>	
    </body>
</html>