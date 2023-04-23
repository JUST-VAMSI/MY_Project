<?php
    //  $connect=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
    include("bd_conf.php");
     if(!$conn)
     {
        die("connection failed: ".mysqli_connect_error());
     }
     if(isset($_POST['pinsert']))
     {
        $proid=$_POST['pid'];
        $proname=$_POST['pname'];
        $promrp=$_POST['pmrp'];
        $proprice=$_POST['pprice'];
        $proqty=$_POST['pqty'];
        $proimg=$_POST['pimg'];
        $prosdes=$_POST['psdes'];
        $prodes=$_POST['pdes'];
        $promtitle=$_POST['pmtitle'];
        $promdes=$_POST['pmdes'];
        $promkeywords=$_POST['pmkeywords'];
        $sql="INSERT INTO Products(proid,proname,promrp,proprice,proqty,proimg,prosdes,prodes,promtitle,promdes,promkeywords)
        VALUES('$proid','$proname','$promrp','$proprice','$proqty','$proimg','$prosdes','$prodes','$promtitle','$promdes','$promkeywords')";
        if(mysqli_query($conn,$sql))
        {
            $sql_query="SELECT * FROM `Products`";
            $result=mysqli_query($conn,$sql_query);
            while($row=mysqli_fetch_assoc($result))
            {
                echo "$row[proid]";
            }
        }
        else
        {
            echo "error: ". sql . "" . mysqli_error($conn);
        }
     }
     mysqli_close($conn);
?>