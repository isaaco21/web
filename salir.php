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
        <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
            <div class="ws_images"><ul>
                    <li><img src="data1/images/bg.jpg" alt="" title="" id="wows1_0"/></li>
                </ul></div>
                <div class="ws_bullets"><div>
                    <a href="#" title=""><span><img src="data1/tooltips/bg.jpg" alt=""/>1</span></a>
                </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">slider html5</a> by WOWSlider.com v8.2</div>
            </div>	
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->
    
            <div id="contenidoPrincipal">  
                <div id="nuevosModelos">
                    <div class="tituloPrincipal centrarTexto">
                        <h1>New Season</h1>
                        <h3>The models for the next season</h3>  
                    </div>
                    <section id="modelos">
                        <article>
                            <div>
                                <a href="shoe1.php"><img src="img/1p.jpg" alt=""></a>
                                <h3>Nike Jordan 800</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <a href="shoe1.php"><img src="img/2p.jpg" alt=""></a>
                                <h3>Nike Jordan 900</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <a href="shoe1.php"><img src="img/3p.jpg" alt=""></a>
                                <h3>Jordan Reebok</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <a href="shoe1.php"><img src="img/1p.jpg" alt=""></a>
                                <h3>Nike SpringBreak</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                    </section>
                    <div class="titulo tit2 centrarTexto">
                        <a href="shoes.php" class="boxLink">Explore Shoes</a>
                    </div>
                 </div>
                <section id="cuerpoPrincipal">
                    <div id="contenido">
                        <div class="latestTitulo tituloPrincipal centrarTexto">
                            <h2>Latest from Nike</h2>
                        </div>
                        <?php
                            session_destroy();
                            echo"<script>location.href='index.php';</script>";
                        ?>
                    </div>
                    <aside class="panelLateral">
                        <a class="twitter-timeline" href="https://twitter.com/Nike" data-widget-id="625127423625949184">Tweets por el @Nike.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </aside>
                </section>
            </div>
        </div>				
       <?php
            include_once( "footer.php");
        ?>	
    </body>
</html>