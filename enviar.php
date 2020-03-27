<<?php 
	$destino = "die.martz20@gmail.com";
	$nombre = $_Post["Nombre"];
	$apellido = $_Post["Apellido"];
	$direccion = $_Post["Direccion"];
	$correo = $_Post["E-Mail"];
	$edad = $_Post["Edad"];
	$comentario = $_Post["Comentarios"];
	$contenido = "Nombre: ".$nombre ."\nApellido: ".$apellido."\nDireccion: ".$direccion."\nE-Mail: ".$correo ."\nEdad: ".$edad."\nComentario: ". $comentario;
	mail($destino, "Contacto", $contenido);
	header("Location:gracias.html");
?>

