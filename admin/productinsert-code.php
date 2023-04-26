<?php
    //  $connect=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
    include("db_conf.php");
    session_start();
     if(!$conn)
     {
        die("connection failed: ".mysqli_connect_error());
     }
     if(isset($_POST['pinsert']) && isset($_SESSION['admin']))
     {
        $proid=$_POST['pid'];
        $proname=$_POST['pname'];
        $promrp=$_POST['pmrp'];
        $proprice=$_POST['pprice'];
        $proqty=$_POST['pqty'];
        $prosdes=$_POST['psdes'];
        $prodes=$_POST['pdes'];
        $promtitle=$_POST['pmtitle'];
        $promdes=$_POST['pmdes'];
        $promkeywords=$_POST['pmkeywords'];
        $proimg=$_FILES['pimg']['name'];

        $proid=mysqli_real_escape_string($conn,$proid);
        $proname=mysqli_real_escape_string($conn,$proname);
        $promrp=mysqli_real_escape_string($conn,$promrp);
        $proprice=mysqli_real_escape_string($conn,$proprice);
        $proqty=mysqli_real_escape_string($conn,$proqty);
        $prosdes=mysqli_real_escape_string($conn,$prosdes);
        $prodes=mysqli_real_escape_string($conn,$prodes);
        $promtitle=mysqli_real_escape_string($conn,$promtitle);
        $promdes=mysqli_real_escape_string($conn,$promdes);
        $promkeywords=mysqli_real_escape_string($conn,$promkeywords);


        $filetype=$_FILES['pimg']['type'];
        $error=$_FILES['pimg']['error'];
        $tmpname=$_FILES['pimg']['tmp_name'];
        $allowed_types=array("pimg/jpeg","pimg/jpg","pimg/png");
        if(in_array($filetype,$allowed_types))
        {
            $img_type=pathinfo('$pimg',PATHINFO_EXTENSION);
            $img_type_lc=strtolower($img_type);
            $new_img_name=uniqid("img-",true).".".$img_type_lc;
            move_uploaded_file($tmpname,"uploads/".$new_img_name);
            if($error==0)
            {
                $sql="INSERT INTO Products(proid,proname,promrp,proprice,proqty,proimg,prosdes,prodes,promtitle,promdes,promkeywords)
                VALUES('$proid','$proname','$promrp','$proprice','$proqty','$new_img_name','$prosdes','$prodes','$promtitle','$promdes','$promkeywords')";
                if(mysqli_query($conn,$sql))
                {
                    $sql_query="SELECT * FROM `Products`";
                    $result=mysqli_query($conn,$sql_query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<script>
                        alert('product uploaded successfully');
                        document.location.href='dashboard.php';
                        </script>";
                    }
                }
                else
                {
                    echo "error: ". sql . "" . mysqli_error($conn);
                }
                    }
                }

        
     }
     mysqli_close($conn);
?>