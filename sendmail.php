<?php

session_start();

// error_reporting(E_ALL);
// ini_set('display_startup_errors', 1);
// ini_set('display_errors', 1);
// error_reporting(-1);


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$message = ""; 
if(isset($_POST['submit'])){
  // var_dump($_POST);
  
  $to = "javedtesting66@gmail.com"; // Your email address
  $toInbox = "info@pixelew.com"; // Your email address
  $name = $_POST['name'];
  $from = $_POST['email'];
  $phone = $_POST['mobile'];

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  //javedtesting66@gmail.com
  // *Test1987*

  // App Password : waxs evtx zkts bfji

  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'javedtesting66@gmail.com';                     //SMTP username
      $mail->Password   = 'zjzy lbwt tswd rxod';                               //SMTP password
      // $mail->Password   = 'waxs evtx zkts bfji';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      // $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom($to, 'Mailer');
      $mail->addAddress($to, 'Javed Ahmed Sheikh');     //Add a recipient
      $mail->addAddress($toInbox, 'info@pixelew.com');     //Add a recipient
      //$mail->addAddress('ellen@example.com');               //Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Here is the subject';
      $mail->Body    = $message = "<!DOCTYPE html>
      <html>
      <head>
      </head>
      <body>
      <table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
        <tr style='background: #eee;'><td colspan='2'><strong>Contact Form Details</strong> </td></tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td>".$_POST['name']."</td>
        </tr>
        <tr>
            <td><strong>Mobile:</strong></td>
            <td>".$_POST['mobile']."</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>".$_POST['email']."</td>
        </tr>
        <tr>
            <td><strong>Message:</strong></td>
            <td>".$_POST['message']."</td>
        </tr>
      </table>
      </body>
      </html>";;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      $_SESSION["Global_Message"] = 'Message has been sent';
      header('Location: contact.php');
  } catch (Exception $e) {
    echo "<pre>";
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      //print_r($mail);
  }


}

