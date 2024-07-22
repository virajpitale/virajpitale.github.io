<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail-> isSMTP();
  $mail->HOST = 'virajpitaleworkmail@gmail.com';
  $mail->SMTPAuth =true;
  $mail->Username = 'virajpitaleworkmail@gmail.com';
  $mail->Password = ''; //Gmail Password
  $mail ->SMTPSecure = 'ssl';
  $mail ->Port = 465;

  $mail->setFrom('virajpitaleworkmail@gmail.com');


  $mail ->addAddress($_PoST["email"]);
  $mail->isHTML(true);

  $mail ->Subject = $_POST["subject"];
  $mail ->Body = $_POST["message"];

  $mail ->send();

  echo
  "
  <script>
  alert('Sent Successfully');
  document.location.href = 'index.html';
  </script>
  "
}
?>
