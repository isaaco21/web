<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Nike - Oficial Web</title>
		<meta http-equiv="Refresh" content="5;url=index.php">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
        <link type="text/css" rel="stylesheet" a href="css_styles/hojaCSS3.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/motor.js"></script>
	</head>
    <body>
    <div id="cabecera">
        <img src="img/header.jpg">
    </div>	
    <nav id="botonera">
        <a href="index.php">HOME</a> |
        <a href="shoes.php">SHOES</a> |
        <a href="#">NEWS</a> |				
        <a href="#">VIDEO</a> |
        <a href="#">PHOTOS</a> |	
        <a href="contact.php">CONTACT</a>
    </nav>
</header>		
            <div id="contenidoPrincipal">  				
                <div id="nuevosModelos">
			</br>
					 <center><img align="center" src="img/loading.gif" height="211" width="200">
			
<h2>Registro de productos </h2>
					<?php
						/*1 Validando envio del Formulario*/
						if($_POST)
						{
							/*2 Recibiendo los datos del Form*/
							$nombre=$_POST['txtNombre'];
							$pedido=$_POST['txtPedido'];
							$direccion=$_POST['txtDireccion'];
							$correo=$_POST['txtCorreo'];
							$precio=$_POST['txtPrecio'];
							$ciudad=$_POST['txtCiudad'];							
						
							/*3 Validamos los datos*/
							if(empty($nombre))
							{
								echo"<div class='Error'>Debe escribir el Nombre</div>";
							}
							if(empty($pedido))
							{
								echo"<div class='Error'>Debe escribir sus Correo</div>";
							}
							if(empty($direccion))
							{
								echo"<div class='Error'>Debe escribir la edad</div>";
							}
							if(empty($ciudad))
							{
								echo"<div class='Error'>Debe escribir la ciudad</div>";
							}
							if(empty($precio))
							{
								echo"<div class='Error'>Debe escribir su Mensaje</div>";
							}
							
							if( (!empty($nombre))  && (!empty($pedido)) )
							{
									/*Nos conectamos al Servidor de Bases de Datos*/
									$Servidor = "localhost";
									$Usuario = "root";
									$Pass = "";
									$MyDataBase = "db-nike-dhtml-final-brayanheyliger";
									
									// Creamos la conexion al Servidor
									$Conectarme = mysqli_connect($Servidor, $Usuario, $Pass , $MyDataBase);
									if (!$Conectarme) {
										die("<div class='Error'>No se ha encontrado el Servidor de Base de Datos</div>" . mysqli_connect_error());
									}else
									{
										$Guardar = "INSERT INTO productos (Nombre,Ciudad, Pedido, Direccion, Correo, Precio)
										VALUES ('$nombre', '$ciudad', '$pedido', '$direccion', '$correo' , '$precio')";

										if (mysqli_query($Conectarme, $Guardar)) 
										{
											echo "Datos registrados correctamente";
										} else 
										{
											echo "Ups, ha fallado el registro
											 " . $Guardar . "<br>" . mysqli_error($Conectarme);
										}

										mysqli_close($Conectarme);	
									}
							}else
							{
								echo"<div class='Error'>Faltan por campos por llenar</div>";
							}
							 
						}else
						{
							echo"No hay datos para procesar";
						}
					?>
					<br>

					</center></br>
					
                            </div> 
                        </div>
				    </div>
                </section> 
            </div>
        </div>				

    </body>
</html>					