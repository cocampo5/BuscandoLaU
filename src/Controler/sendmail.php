<?php
  require "phpmailer/class.phpmailer.php";
  require 'phpmailer/PHPMailerAutoload.php';
  
  class sendmail{

      function sendmail(){
          
          $mail = new phpmailer();
          $mail->PluginDir = "src/Controler/phpmailer/";
          $mail->Mailer = "smtp";
          $mail->Port = "2525";
          $mail->Host = "mx1.hostinger.co";
          $mail->SMTPAuth = true;
          $mail->Username = "webmaster@buscandolau.wc.lt"; 
          $mail->Password = "eafit2014";
          $mail->From = "webmaster@buscandolau.wc.lt";
          $mail->FromName = "BuscandoLaU - Admin";
          $mail->Timeout=30;
          $mail->AddAddress("andressmateo@hotmail.com");
          $mail->Subject = "Contacto";
          $mail->Body = "<b>BuscandoLaU</b>
                            <br>
                            Muchas gracias por contactarnos, recibirás respuesta en un plazo máximo de 24 horas
                        ";
          $mail->AltBody = "Muchas gracias por contactarnos, recibirás respuesta en un plazo máximo de 24 horas";
          $exito = $mail->Send();
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
          else
          {
            echo "Mensaje enviado correctamente";
            //header("Location:../index.html");
          } 
      }
  }

  //$sender = new sendmail();
  
?>