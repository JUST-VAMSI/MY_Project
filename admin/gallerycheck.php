<?php
session_start();
include("db_conf.php");
if(isset($_POST['gsub']) && isset($_SESSION['admin']))
{
    // $con=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
    if($conn)
    {
        $n=$_POST['gname'];
        $gi=$_FILES['gimg']['name'];
        $n=mysqli_real_escape_string($conn,$n);
        $gi=mysqli_real_escape_string($conn,$gi);

    $error=$_FILES['gimg']['error'];
    $tmp_name=$_FILES['gimg']['tmp_name'];
    $file_type=$_FILES['gimg']['type'];
    $allowed_types = array('gimg/jpeg', 'gimg/png', 'gimg/gif');

  if(in_array($file_type, $allowed_types)){
    $img_type = pathinfo($gi,PATHINFO_EXTENSION);
    $img_type_lc = strtolower($img_type);
    $new_img_name=uniqid("img-",true).".".$img_type_lc;
    move_uploaded_file($tmp_name, "../gallery/" . $new_img_name);
    if($error==0)
    {
        $q="INSERT INTO gallery VALUES('$n','$new_img_name')";
        $r=mysqli_query($conn,$q);
        if($r)
        {
            header("Location: dashboard.php");
        }
        else{
            echo 'fail';
        }
    }

        
    }
}
}
?>