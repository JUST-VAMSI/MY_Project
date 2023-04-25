<?php
session_start();
    // $connect=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
    include("db_conf.php");
    if(!$conn)
    {
        die("connection failed:".mysqli_connect_error());
    }
    

    if(isset($_POST['siva']))
    {
        $sql="SELECT * FROM `admin`";
        $result=mysqli_query($conn,$sql);
        
        $v=0;
        while($row=mysqli_fetch_assoc($result))
        {
            
            if(($row['email']==$_POST['logname']) && ($row['passw']==md5($_POST['logpass'])))
            {
                    $_SESSION['admin']=$_POST['logname'];
                    $v=1;
            }
            
        }
        if($v==1)
        {
          header("Location: dashboard.php");
        }
        else{
          header("Location: index.php?che='please check your email and password'");
        }
        mysqli_close($conn);
    }
    
?>