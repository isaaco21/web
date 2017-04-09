<?php
	function ComprobarSession(){
		/*Si existe una variable de Session el usuario cuenta como logeado
		, y con esta funcion mostraremos su nombre
		en todas las paginas que queremos y le daremos acceso a privilegios de usuario
		*/
		if(isset($_SESSION['user']) and (!empty($_SESSION['user']))){

            $sesionUser = $_SESSION['user'];
			echo "
                    <h2>$sesionUser</h2>
                    <div class='tituloPrincipal'>
                        <a href='informacionUsuario.php'><h4>Informacion</h4></a>
                        <h4>o</h4>
                        <a href='salir.php'><h4>Log out</h4></a>
                    </div>
                ";
		}else{
			/*Si se intenta entrar a una pagina restringuida sin iniciar session, lo redireccionados
			a una pagina donde se le diga Zona Registringuida y debe logearse, asi de sencillito
			*/
			/*Redireccionar a no_session.php*/
			echo "
                    <h2>Welcome!</h2>
                    <div class='tituloPrincipal pageForm'>
                        <a href='IniciarSesionRegistro.php'><h4>Inicia Sesion</h4></a>
                        <h4>o</h4>
                        <a href='IniciarSesionRegistro.php'><h4>Registrate</h4></a>
                    </div>
                    <div class='tituloPrincipal localForm'>
                        <h4 id='iniciarSesionLink' >Inicia Sesion</h4>
                        <h4>o</h4>
                        <h4 id='registroLink' >Registrate</h4>
                    </div>
                ";
		}
	}

	/*Funcion para registrar los Usuarios*/
	function registrarUsuarios($user,$nombre,$email,$registroPass,$registroImagen){
			include("conexion.php");
			$registroPass=md5($registroPass);
			$guardar="
				INSERT INTO registro (user,nombre,email,passwords,imagen)
				VALUES
				('$user','$nombre','$email','$registroPass','$registroImagen')
			";
			if(mysql_query($guardar)){
				echo"<script>alert('Usuario Registrado');</script>";
				echo"<script>alert('<a href='iniciarSesion.html'>Iniciar Sesion<a/>');</script>";
				$asunto='Gracias por Registrarte en BuyIt!';
				$cuerpo='Hola $nombre, gracias por registrarte en Nike! Accede a el enlace debajo empieza tus
				compras online! <a href="http://nikestore.esy.es" >Nike</a> ';

				//mail($Mail,$asunto,$cuerpo);
			}else{
				echo"Lo sentimos, pero no se ha podido completar el registro";
			}
	}



	// FUNCION IMAGEN DE PERFIL THUMBNAIL

	function imagenPerfil (){
		/*Si existe una sesion iniciada que seleccione la variable de session "imagenPerfil"
		creada con el proposito de almacenar la imagen de perfil
		*/
		if(isset($_SESSION['imagenPerfil']) and (!empty($_SESSION['imagenPerfil']))){
			//echo $_SESSION['imagenPerfil'];
			echo $MostrarImagen="
					<img src='img/imagenesUsuarios/{$_SESSION['imagenPerfil']}'>
				";
		}else{
			echo $MostrarImagen="
					<a href='#'><img src='img/avatar.jpg' alt='ImagenPerfil'></a>
				";
		}
	}

	// aqui se jalan los datos del usuario

	function datosDeUsuario (){

		echo "

            <div class='tituloPrincipal centrarTexto'>
               <div>
                   <h1>USER:</h1>
                    <h1>NAME:</h1>
                    <h1>EMAIL:</h1>
               </div>
                <div>
                    <h1>{$_SESSION['user']}</h1>
                    <h1>{$_SESSION['nombre']}</h1>
                    <h1>{$_SESSION['email']}</h1>
                </div>

            </div>

		";
	}

	function checkUsuarioLogeado(){
		if(isset($_SESSION['nombre']) and (!empty($_SESSION['nombre']))){
		}else{
			echo"<script>location.href='no_session.php'</script>";
		}

	}






	function contactarPagina ($contactoUser,$contactoEmail,$contactoPass,$contactoTipo,$contactoAsunto,$contactoMensaje) {

			include("conexion.php");
			$contactoPass=md5($contactoPass);
			$guardar="
				INSERT INTO contacto (usuario,email,pass,tipo,asunto,mensaje)
				VALUES
				('$contactoUser','$contactoEmail','$contactoPass','$contactoTipo','$contactoAsunto','$contactoMensaje')
			";
			if(mysql_query($guardar)){
				echo"<script>alert('Mensaje Enviado');</script>";
				echo"<script>alert('<a href='iniciarSesion.html'>Iniciar Sesion<a/>');</script>";
			}else{
				echo"Lo sentimos, pero no se ha podido enviar el Mensaje";
			}
	}


	function funcionComprar ($comprarInputUser,$comprarInputEmail,$comprarInputPass,$comprarInputConfirmPass,$comprarInputTargeta,$comprarInputSeguridad) {
		include("conexion.php");
			$comprarInputPass=md5($comprarInputPass);
			$comprarInputConfirmPass=md5($comprarInputConfirmPass);
			$comprarInputTargeta=md5($comprarInputTargeta);
			$comprarInputSeguridad=md5($comprarInputSeguridad);
			$guardar="
				INSERT INTO comprar (usuario,email,pass,confirmPass,targeta,seguridad)
				VALUES
				('$comprarInputUser','$comprarInputEmail','$comprarInputPass','$comprarInputConfirmPass','$comprarInputTargeta','$comprarInputSeguridad')
			";
			if(mysql_query($guardar)){
				echo"<script>alert('Mensaje Enviado');</script>";
				echo"<script>alert('<a href='iniciarSesion.html'>Iniciar Sesion<a/>');</script>";
			}else{
				echo"Lo sentimos, pero no se ha podido enviar el Mensaje";
			}
	}
?>
