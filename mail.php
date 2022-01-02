<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   
   //C:\wamp\www\my_cv\vendor\phpmailer\phpmailer\src\PHPMailer.php
   require 'vendor/phpmailer/phpmailer/src/Exception.php';
   require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
   require 'vendor/phpmailer/phpmailer/src/SMTP.php';

   //session_start();

      if(isset($_POST['send']))
      {
     // header("location:sendcode.php");
      }
     
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      //$message = $_POST['message'];

      $mail = new PHPMailer(true);
      try {
         //Server settings
         $mail->SMTPDebug = 1;                      //Enable verbose debug output
         $mail->isSMTP();                                            //Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
         $mail->Username   = 'tsaguecarel33@gmail.com';                     //SMTP username
         $mail->Password   = 'tsaguecarel%%';                               //SMTP password
      // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
      
      
         $mail->isSMTP();
      // $mail->Host = 'localhost';
         $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
         $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

         //Recipients
         //$mail->setFrom('darryldibabo18@gmail.com', 'Pasca lwenji');
         $mail->addAddress($email);     //Add a recipient
         //$mail->addAddress('ellen@example.com');               //Name is optional
      //$mail->addReplyTo('darryldibabo18@gmail.com', 'Information');
         //$mail->addCC('cc@example.com');
         //$mail->addBCC('bcc@example.com');

         //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
         //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


         ob_start();
         require "allinformation.php";
         $body = ob_get_contents();
         ob_clean();

         //Content d,,
         $mail->isHTML(true);                                  //Set email format to HTML
         $mail->Subject = $subject;
         $mail->Body    = $body;
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         $mail->SMTPOptions = array(
            'ssl' => array
               (
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
               )
            );

            if ( $mail-> send() ){
               echo 'Message has been sent';
            }
            else{
               echo 'message not send';
            }
        
        
      } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }     
?>