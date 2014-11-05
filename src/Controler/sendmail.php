<?php
  require "phpmailer/class.phpmailer.php";
  require 'phpmailer/PHPMailerAutoload.php';
  
  class sendmail{

    var $mail;

      function sendmail(){
          
          $this->$mail = new phpmailer();
          $this->$mail->PluginDir = "src/Controler/phpmailer/";
          $this->$mail->Mailer = "smtp";
          $this->$mail->Port = "2525";
         $this->$mail->Host = "mx1.hostinger.co";
          $this->$mail->SMTPAuth = true;
          $this->$mail->Username = "webmaster@buscandolau.wc.lt"; 
          $this->$mail->Password = "eafit2014";
          $this->$mail->From = "webmaster@buscandolau.wc.lt";
          $this->$mail->FromName = "BuscandoLaU - Admin";
          $this->$mail->Timeout=30;
          $this->$mail->AddAddress("andressmateo@hotmail.com");
          $this->$mail->Subject = "Contacto";
          $this->$mail->Body = "<b>BuscandoLaU</b>
                            <br>
                            Muchas gracias por contactarnos, recibirás respuesta en un plazo máximo de 24 horas
                        ";
         
      }

      function enviar(){
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

        $sender = new sendmail();
        $sender.enviar();
      }
  }

  //
  
?>