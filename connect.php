<?php

// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");

if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['vamsi']))
{
    $password=$_POST['pass'];
    $email_name=$_POST['Emailname'];
    $emailcheck="SELECT email FROM detail WHERE email='$email_name'";
    $emailres=mysqli_query($conn,$emailcheck);
    if($emailres->num_rows==0)
    {
        $sql_query="INSERT INTO detail(email,pass) VALUES('$email_name','$password')";
        if (mysqli_query($conn, $sql_query))
        {
            header('Location: login.php');
        }
    }
    else{
        header('Location: pro.php?exists="email already exists"');
    }
    
    mysqli_close($conn);
}

?>