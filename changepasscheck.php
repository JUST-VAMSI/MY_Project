<?php
session_start();
include("db_conf.php");
if(isset($_POST['changesuccess']) && isset($_SESSION['changemail']))
{
    $mail=$_POST['email'];
    $pass=md5($_POST['newpass']);
    $change="UPDATE detail SET pass='$pass' WHERE email='$mail'";
    $res=mysqli_query($conn,$change);
    if($res)
    {
        $_SESSION = array();
        session_destroy();
        echo '<script>
        alert("password successfully changed!");
        document.location.href="login.php";
        </script>';
    }
}
?>