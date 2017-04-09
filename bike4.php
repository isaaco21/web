<?php
	session_start();
	include_once("motor/funciones.php");
?>


<!DOCTYPE html>
<html lang="es">
	<head>
        <title>ItlaBike - Oficial Web</title>
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
                       <div id="shoePage">
                            <div class="img">
                                <img src="img/shoes/shoe4.jpg" alt="">
                            </div>

                       </div>
                    </div>
                    <aside class="panelLateral shoePanel">
                        <div class="tituloPrincipal">
                            <h1>Nike Reebok</h1>
                            <p>Cleat futures a one-piece Flynit upper and carbon fiber plate for a super-lightweight fit and stabilty ideal for skill players who need maximum comfor and support on the field.</p>
                            <h2 class="precio">100$</h2>
                            <form id="formBuy" class="formLayout" action="index.php" method="post" onsubmit="return Validarr();">
                                <input type="submit" class="comprar" value="ADD TO CART" onclick="recibido();">
                                <input type="submit" class="comprar" action="buy.php" value="BUY">
                            </form>

                        </div>
                    </aside>
                </section>
            </div>
        </div>
       <?php
            include_once( "footer.php");
        ?>
    </body>
</html>
