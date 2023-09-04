	<?php  
	$destino="jorgevilcherrez@gmail.com";
	$nombres=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$telef=$_POST["telefono"];
	$email=$_POST["correo"];
	$mensaje=$_POST["descripcion"];
	$contenido="Nombre: ".$nombres."Mensaje: ".$mensaje;
	mail($destino, "Contacto", $contenido);
	header("location:contactos.html");
?>