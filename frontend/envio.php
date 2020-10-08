<?php
require_once "../formulario/models/conexion.php";
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

 $mail = new PHPMailer();
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$grader = $_POST['grader'];
$suscripcion = $_POST['suscripcion'];
$sql = Conexion::conectar()->prepare("INSERT INTO usuarios_web VALUES (NULL,'$nombre','$correo','$suscripcion','$grader',NOW())");
$sql -> execute();
    try {
        //Server settings
      //   $mail->isSMTP();  
      //  $mail->CharSet = 'UTF-8';        
      //  $mail->SMTPSecure = 'ssl';                                  // Send using SMTP
      //  $mail->Host       = 'mail.scantech.cl';                    // Set the SMTP server to send through
      //  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      //  $mail->Username   = 'test@scantech.cl';                     // SMTP username
      //    $mail->Password   = 'scantech2018';                               // SMTP password
      // $mail->Port       = 465;                                    // TCP port to connect to
      //   //Recipients
        $mail->setFrom('test@scantech.cl', 'Scantech - Catálogo');
        $mail->addAddress($correo);
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Catálogo';

        $mail->Body    = utf8_decode('Adjunto Catálogo.<br><br>

Atentamente,<br><br><br><br>
Scantech.<br>
www.scantech.cl<br>
');


        $mail->AltBody = 'Se adjuntan catálogo.';
  echo '<p style="color:green;"align="center"><b>Se envió el catálogo a su correo.</b></p>';
        $mail->send(); 

 }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>