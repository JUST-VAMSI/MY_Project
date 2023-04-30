<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailsender/sendfiles/src/Exception.php';
require 'mailsender/sendfiles/src/PHPMailer.php';
require 'mailsender/sendfiles/src/SMTP.php';

include("db_conf.php");
if(isset($_POST['change']))
{
    $email=$_POST['email'];
    $em="SELECT email FROM detail WHERE email='$email'";
    $emres=mysqli_query($conn,$em);
    if($emres->num_rows==1)
    {
        $rand=rand(100,999);
        $_SESSION['changemail']=$email;
        $_SESSION['rand']=$rand;
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
            $mail->addAddress($email);
            $mail->Subject = "change password";

            // Set the message body
            $mail->Body = "Your one time password for furniture all in one is .$rand. Don't share it to anyone.";

            // Send the email
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
            else{
                
                echo '<script>
                document.location.href="changepass.php";
                </script>';
               
         }
    }
    else{
        echo '<script>
        alert("email not exists!");
        document.location.href="change.php";
        </script>';

    }
}
?>