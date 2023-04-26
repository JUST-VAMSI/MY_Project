<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'sendfiles/src/Exception.php';
require 'sendfiles/src/PHPMailer.php';
require 'sendfiles/src/SMTP.php';
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");

if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['vamsi']))
{
    $password=md5($_POST['pass']);
    $email_name=$_POST['Emailname'];
    $emailcheck="SELECT email FROM detail WHERE email='$email_name'";
    $emailres=mysqli_query($conn,$emailcheck);
    if($emailres->num_rows==0)
    {
        $sql_query="INSERT INTO detail(email,pass) VALUES('$email_name','$password')";
        if (mysqli_query($conn, $sql_query))
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
            $mail->addAddress($email_name);
            $mail->Subject = "Registration successful";

            // Set the message body
            $mail->Body = "Your registration is successfully for Furniture all in one. Here your favourite furniture is there for you! Please login to visit.";

            // Send the email
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 
                "
                <script>
                alert('successfully registered');
                document.location.href = 'login.php';
                </script>
                ";
            }
        }
    }
    else{
        header('Location: pro.php?exists="email already exists"');
    }
    
    mysqli_close($conn);
}

?>