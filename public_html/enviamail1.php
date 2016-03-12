
<?php

@$nombre = $_POST['nombre'];
@$email = $_POST['email'];
@$mensaje = $_POST['mensaje'];


echo "<h3>El mensaje  que enviastes es :</h3>";
echo("Nombre:");
echo "<br>";
echo $nombre;
echo "<br>";
echo("Email:");
echo "<br>";
echo $email;
echo "<br>";
echo("Mensaje:");
echo "<br>";
echo $mensaje;
echo "<br>";

echo("Gracias pronto atendere tu consulta");

echo "<br>";

echo "<br>";

$aquien = "andres18qp03@gmail.com";
$asunto = "Has recibido un mensaje de Mangaaweb";
$mensajemail ="El Señor(a) : ".$nombre." Con el email : ".$email." Te ha enviado el siguiente mensaje : " .$mensaje;

if (mail($aquien,$asunto,$mensajemail))
{echo "Tu email se envió correctamente ";}
 else{echo "El envió de email ha fallado";}


?>
