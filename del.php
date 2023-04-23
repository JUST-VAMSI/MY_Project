<?php
session_start();
include("db_conf.php");
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
if(isset($_GET['dele']) && isset($_SESSION['uname']))
{
    $qs="SELECT * FROM cart";
    $r=mysqli_query($conn,$qs);
    $rm=$_GET['dele'];
    while($row=mysqli_fetch_assoc($r))
    {
        if(($row['email']==$_SESSION['uname']) && ($row['proname'] == $rm))
        {
            $de="DELETE FROM cart WHERE proname='$rm'";
            mysqli_query($conn,$de);
            header("Location: atoc.php?pro='hi'");
            break;
        }
    }
    
    
    
}
else{
    header("Location: index.php");
}


?>