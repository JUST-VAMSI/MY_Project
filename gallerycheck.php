<?php
session_start();
include("db_conf.php");
if(isset($_POST['gsub']) && isset($_SESSION['uname']))
{
    // $con=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
    if($conn)
    {
        $n=$_POST['gname'];
        $gi=$_POST['gimg'];
        $q="INSERT INTO gallery VALUES('$n','$gi')";
        $r=mysqli_query($conn,$q);
        if($r)
        {
            echo 'success';
        }
        else{
            echo 'fail';
        }
    }
}
?>