<?php
	//almacenamos la propia imagen en la variable $guardarFotos.
	$guardarFoto=$_FILES['registroInputImagenUsuario']['tmp_name'];
	/*Condicion if que causa que si se sube una imagen, esta sea guardada en el directorio
	images/, por el contrario, si no se sube ninguna, $campo4 adquirira el nombre
	"foto por defecto, y usara la foto predeterminada*/
	if (!empty($registroImagen)) {
		//echo "A Subido una Foto, su nombre es: ".$mostrarFoto;
		move_uploaded_file($guardarFoto, "img/imagenesUsuarios/".$registroImagen);
	}else{
		$registroImagen="avatar.jpg";
		//echo "No Subio una foto, se Usara: ".$campo4;
	};
?>