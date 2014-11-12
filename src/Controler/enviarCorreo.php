<?php
  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma
  require "phpmailer/class.phpmailer.php";
  require 'phpmailer/PHPMailerAutoload.php';
  //instanciamos un objeto de la clase phpmailer al que llamamos 
  //por ejemplo mail
  $mail = new phpmailer();

  //Definimos las propiedades y llamamos a los métodos 
  //correspondientes del objeto mail

  //Con PluginDir le indicamos a la clase phpmailer donde se 
  //encuentra la clase smtp que como he comentado al principio de 
  //este ejemplo va a estar en el subdirectorio includes
  $mail->PluginDir = "phpmailer/";

  //Con la propiedad Mailer le indicamos que vamos a usar un 
  //servidor smtp
  $mail->Mailer = "smtp";

  $mail->Port = "2525";

  //Asignamos a Host el nombre de nuestro servidor smtp
  $mail->Host = "mx1.hostinger.co";

  //Le indicamos que el servidor smtp requiere autenticación
  $mail->SMTPAuth = true;

  //Le decimos cual es nuestro nombre de usuario y password
  $mail->Username = "webmaster@buscandolau.wc.lt"; 
  $mail->Password = "eafit2014";

  //Indicamos cual es nuestra dirección de correo y el nombre que 
  //queremos que vea el usuario que lee nuestro correo
  $mail->From = "webmaster@buscandolau.wc.lt";
  $mail->FromName = "BuscandoLaU";

  //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
  //una cuenta gratuita, por tanto lo pongo a 30  
  $mail->Timeout=30;

  //Indicamos cual es la dirección de destino del correo
  $email = addslashes(htmlspecialchars($_POST["email"]));
  $mail->AddAddress($email);

  //Asignamos asunto y cuerpo del mensaje
  //El cuerpo del mensaje lo ponemos en formato html, haciendo 
  //que se vea en negrita

$mensaje = utf8_decode("Felicidades, hemos registrado tu inquietud, recibirás una respuesta de parte de la universidad en las´próximas 48 horas. <br><br> Gracias por usar BuscandoLaU");

  $mail->Subject = "Tu duda fue registrada";
  $mail->Body = $mensaje;

  //Definimos AltBody por si el destinatario del correo no admite email con formato html 
  $mail->AltBody = "Felicidades, hemos registrado tu inquietud, recibirás una respuesta de parte de la universidad en las´próximas 48 horas.";

  //se envia el mensaje, si no ha habido problemas 
  //la variable $exito tendra el valor true
  $exito = $mail->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep	
  $intentos=1; 
  while ((!$exito) && ($intentos < 6)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
		
   if(!$exito)
   {
	echo "Problemas enviando correo electronico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
 
   }
   else{
    echo "Tu duda fue enviada exitosamente.";
   } 
?>