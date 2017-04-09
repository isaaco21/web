
<?php
	session_start();
?>

					<?php
						/*Llamamos la funcion que valida si existe una 
						session iniciada, esta misma sirve para mostrar
						los datos del usuario que se haya logeado o, 
						redireccionarnos a una pagina que nos indica
						que debemos logearlo para ver algun contenido*/
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
                        <div class="tituloPrincipal">
                             <h1>Explore the Catalog</h1>
                        </div>
                        <section id="shoes">
                           
                            <article class="shoe">
                                <a class="men" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe1.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Men</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Men</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="women" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe5.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Women</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Women</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="kids" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe2.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Kids</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Kids</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="kids" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe5.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Kids</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Kids</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="men" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe4.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Men</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Men</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="kids" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe3.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Kids</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Kids</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="men" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe4.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Men</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Men</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="women" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe2.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Women</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Women</h4>
                                    </div>
                                </a>
                            </article>
                            <article class="shoe">
                                <a class="kids" href="shoe1.php">
                                    <div class="capa"></div>
                                    <div class="img">
                                        <img src="img/shoes/shoe1.jpg" alt="">
                                    </div>
                                    <div class="tituloPrincipal shoesTitulo">
                                        <h2>Nike Reebok Kids</h2>
                                        <h2 class="precio">160$</h2>
                                        <h4 class="categoria">Kids</h4>
                                    </div>
                                </a>
                            </article>
                            
                        </section>
                        
                    </div>
                    <aside class="panelLateral">
                        <div class="tituloPrincipal">
                            <h2>filter by gender:</h2>
                            
                        </div>
                        <div class="tituloPrincipal">
                            <h1><a id="menFilterLink" class="boxLink">MEN</a></h1>
                            <h1><a id="womenFilterLink" class="boxLink" >WOMEN</a></h1>
                            <h1><a id="kidsFilterLink" class="boxLink" >KIDS</a></h1>
                            <h1><a id="allFilterLink" class="boxLink">ALL</a></h1>
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