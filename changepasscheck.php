<?php
include("db_conf.php");
if(isset($_POST['changesuccess']))
{
    $mail=$_POST['email'];
    $change="UPDATE detail SET email='$mail' WHERE email='$mail'";
    $res=mysqli_query($conn,$change);
    if($res)
    {
        echo '<script>
        alert("password successfully change");
        document.location.href="login.php";
        </script>';
    }
}
?>