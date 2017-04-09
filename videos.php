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
                       <center> <div class="tituloPrincipal centrarTexto">
                            <h1>Nike Futbol</h1>
                        </div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/lSggaxXUS8k" frameborder="0" allowfullscreen></iframe>
					       <div class="tituloPrincipal centrarTexto">
                            <h1>Nike Football: The Last Game ft. Ronaldo</h1>
                        </div>	
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Iy1rumvo9xc" frameborder="0" allowfullscreen></iframe>
					                        <div class="tituloPrincipal centrarTexto">
                            <h1>Nike Futbol: El Que Gana Se Queda con Ronaldo</h1>
                        </div>	
						
						<iframe width="560" height="315" src="https://www.youtube.com/embed/GYHeXIbStjE" frameborder="0" allowfullscreen></iframe>
						</center>
						
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