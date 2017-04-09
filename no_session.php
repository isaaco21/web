<?php
	session_start();
	include_once("motor/funciones.php");
?>


<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Nike - Oficial Web</title>
        <meta charset="utf-8">
		<meta http-equiv="Refresh" content="8;url=registrate.php">
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
                            <h1>Necesitas Registrarte Para Entrar</h1>
                        </div>
				 <div class="welcomeTitle tituloPrincipal centrarTexto">
 
					<h1>Redireccionandote para que te registres espera unos segundos!!</h1>
						
						
						
					<center><img align="center" src="img/loading.gif" height="211" width="200">												
				</div>					
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