<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'sendfiles/src/Exception.php';
require 'sendfiles/src/PHPMailer.php';
require 'sendfiles/src/SMTP.php';

if(isset($_POST['send']))
{
    

    $mail = new PHPMailer(true);

// Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

// Set up SMTP server configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'veeramallavamsi72@gmail.com';
$mail->Password = 'ezkhpgtzcfirlkdf';

// Set up the email headers, recipients, and subject
$mail->setFrom('veeramallavamsi72@gmail.com');
$mail->addAddress($_POST['mail']);
$mail->Subject = $_POST['subject'];

// Set the message body
$mail->Body = $_POST['msg'];

// Send the email
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 
    "
    <script>
    alert('sent successfully');
    document.location.href = 'index.php';
    </script>
    ";
}


   

}



?>