<header id="header">
    <div id="menuUsuario">
        <div id="infoMenuUsuario">
            <div id="info">
               <?php
                    ComprobarSession();
                ?>
            </div>
            <div id="avatar">
                <?php
                    imagenPerfil ();
                ?>
            </div>
        </div>
        <div id="formsMenuUsuario">
            <div class="formIniciarSesionDiv">
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
            <div class="formRegistroDiv">
               <div class="tituloPrincipal centrarTexto">
                    <h1>Registrate</h1>
                </div>
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
    </div>
    <div id="cabecera">
        <img src="img/bike.jpg">
    </div>
    <nav id="botonera">
        <a href="index.php">HOME</a> |
        <a href="shoes.php">BICICLETAS</a> |
        <a href="buy.php">ORDENAR</a> |
        <a href="videos.php">VIDEO</a> |
        <a href="services.php">SERVICIOS</a> |
        <a href="contact.php">CONTACTAR</a>
    </nav>
</header>
