<?php
session_start();
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include('db_conf.php');
if(isset($_GET['car']) && isset($_SESSION['uname']))
{
    $user=$_SESSION['uname'];
    $s="SELECT * FROM `products`";
    $result=mysqli_query($conn,$s);
    $n="SELECT * FROM `add_address` WHERE email='$user'";
    $res=mysqli_query($conn,$n);
    while($row=mysqli_fetch_assoc($result))
    {
        
        if($row['proname']==$_GET['car'])
        {
            $sel="SELECT * FROM cart";
            $back=mysqli_query($conn,$sel);
            $al=0;
            while($reback=mysqli_fetch_assoc($back))
            {
                if($reback['proname'] == $_GET['car'])
                {
                    $al=1;
                    header("Location: index.php?already='This item is already in cart!'");
                }
            }
            if($al==0)
            {
                $pn=$_GET['car'];
                $pi=$row['proimg'];
                $psdes=$row['prosdes'];
                $pmrp=$row['promrp'];
                $pprice=$row['proprice'];
                $check=$_SESSION['uname'];

                $pi=mysqli_real_escape_string($conn,$pi);
                $psdes=mysqli_real_escape_string($conn,$psdes);
                $pmrp=mysqli_real_escape_string($conn,$pmrp);
                $pprice=mysqli_real_escape_string($conn,$pprice);
                $check=mysqli_real_escape_string($conn,$check);

                while($r=mysqli_fetch_assoc($res))
                {
                    if($r['email']==$check)
                    {
                        $v=$r['email'];
                        $qu="INSERT INTO `cart`(`email`,`proname`,`proimg`,`prodes`,`promrp`,`proprice`) VALUES('$v','$pn','$pi','$psdes','$pmrp','$pprice')";

                        if(mysqli_query($conn,$qu))
                        {
                            header("Location: index.php?cart='yes'");
                        }
                    }
                }
            }
            
            
        }
    }
}
else{
    header('Location: 404.html');
}
?>