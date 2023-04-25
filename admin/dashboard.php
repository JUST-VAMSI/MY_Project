<?php
session_start();
include("db_conf.php");
if(isset($_SESSION['admin']))
{

 ?>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protobufjs/7.2.0/protobuf.js"></script>
    <style>
        .col-lg-3,.col-lg-9{
            border-radius:10px;
        }
        a{
            float:left;
        }
        ul{
            margin:20%;
        }
        .col-lg-9{
            height:720px;
            overflow:scroll;
        }
        .col-lg-3{
            margin-top:15%;
            padding-top:2%;
            height:400px;
        }
        .row{
            padding-left:2px;
        }
        table{

            width:100%;
            border-collapse:collapse;
            justify-content:center;
            align-items:center;
        }
        td, th {
        border: 1px solid #dddddd;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        @media only screen and (max-width:1000px)
        {
            .col-lg-3{
                width:200px;
            }
        }
    </style>
    </head>
    <body style="background-color:rgba(0,0,0,0.1)"class="text-center">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-3 bg-light  ">
                <h2>Dashboard</h2>
                <ul>
                    <li>
                        <a href="#product">PRODUCTS</a> 
                    </li>
                    <li>
                        <a href="#gallery">GALLERY </a>
                    </li>
                    <li>
                        <a href="#regdetails">REG DETAILS</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-9 bg-light">
            <?php
$check=1;
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");
if($check==1)
{
?>
<html>
    <head>
        <title>Product form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD125VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- <style>
    *{
        font-family:italic;
    }
    body{
        /* background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover; */
        background-color:#f0f0f0;
    }
    .start{
    margin-top:3%;
    /* color:#f0f0f0; */
}
.end{
        display:none;
    }
.container{
    background-color:#f0f0f0;
    width:50%;
    padding:2% 2%;
    border-radius:10px;
}
.sma{
    display:none;
}
input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"],input[type="file"]{
    border:1px solid gray;
    border-radius:8px;
    width:100%;
    margin-top:2%;
}
input[type="checkbox"],input[type="radio"]{
    accent-color:cyan;
}
.button1{
    background-color:red;
    color:white;
    border:1px solid black;
    border-radius:5px;
    width:80px;
    font-size:18px;
    margin-top:2%;
}
.button2{
    background-color:#5EC942;
    font-size:18px;
    color:#f0f0f0;
    width:80px;
    border:1px solid black;
    border-radius:5px;
    margin-top:2%;
}
.button1:hover,.button2:hover{
    transform: scale(1.2,1.2);
    transition-duration: .2s;
}
.sp1{
    float:left;
}
@media only screen and (max-width:1000px)
{
    .start{
    display:none;
   }
   .end{
        display:inline-block;
        margin-top:2%;
        /* color:#f0f0f0; */
        font-size:90px;
    }
    .hide{
        display:none;
    }
    .sma{
        display:inline-block;
        font-size:30px;
    }
    .container{
    margin-top:20%;
    width:100%;
    height:auto;
    background:none;
   }
    .row input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"],input[type="file"]{
    margin-top:3%;
   }
   input[type="text"],input[type="password"],input[type="email"],input[type="number"],input[type="file"]{
    height:90px;
    font-size:40px;
   }
   textarea{
    height:250px;
    font-size:40px;
   }
   input[type="checkbox"],input[type="radio"]{
    height:30px;
    width:30px;
   }
   .sp,.sp1{
    font-size:40px;
    float:left;
    color:coral;
   }
   .button1,.button2{
    margin-top:2%;
   }
}
</style> -->
    </head>
<body class="text-center">
    <form  action="productinsert-code.php" method="post" class="text-center" encytype="multipart/form-data" id="product">
        <div class="container">
            <h1 class="end">PRODUCT INSERT FORM</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">PRODUCT ID:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pid" class="" placeholder="Product id" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">PRODUCT NAME:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="pname" class="" placeholder="Product name">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">MRP:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pmrp" class="" placeholder="MRP">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">PRICE:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pprice" class="" placeholder="Price">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">QUANTITY:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pqty" class="" placeholder="Quantity">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">IMAGE:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="file" name="pimg" class="" placeholder="IMG" accept=".jpg,.png,.jpeg">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">SHORT-DES:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="psdes" class="" placeholder="Short-des">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">DESCRIPTION:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea rows="3" cols="40" name="pdes" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">META-TITLE:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="pmtitle" class="" placeholder="Meta-title">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">META-DESCRIPTION:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea rows="3" cols="40" name="pmdes" placeholder="Meta-description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">META-KEYWORDS:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea rows="3" cols="40" name="pmkeywords" placeholder="Meta-keywords"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <input type="reset" value="Reset" class="button1">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="submit" name="pinsert" class="button2">
                </div>
            </div>
        </div>
    </form>
  <table class="mt-4" align="center">
    <tr>
        <th>Product no</th>
        <th>Product name</th>
</tr>
    <?php 
    $prod="SELECT sno,proname FROM products";
    $prores=mysqli_query($conn,$prod);
    if($prores->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($prores))
        {?>
        <tr>
        <td><?php echo $row['sno']  ?></td>
        <td><?php echo $row['proname']  ?></td>
        </tr>
        <?php
        }
    }
    ?>
  </table>

</body>
</html>
<?php
}
else{
    echo 'you dont have access to open this page';
}
?>
<?php
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");
$res=1;
// $ch="SELECT * FROM detail";
// $chres=mysqli_query($conn,$ch);
// while($row=mysqli_fetch_assoc($chres))
// {
//     if($_SESSION['uname'] == $row['email'])
//     {
//         $res=1;
//     }
// }
if($res==1)
{?>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- <style>
            *{
        font-family:italic;
    }
body{
        /* background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover; */
        background-color:#f0f0f0;
    }
    .start{
        margin-top:5%;
        /* color:#f0f0f0; */
        color:green;
    }
    .end{
        display:none;
    }
    .sma{
        display:none;
    }
.container{
    /* background-color:rgba(0,0,0,0.7);
    color:white; */
    width:50%;
    padding:3% 2%;
    border-radius:10px;
    background-color:white;
    box-shadow:2px 2px gray;
}

                    input[type="text"],input[type="password"],input[type="file"]{ 
                        border:1px solid gray;
    width:100%;
    height:100%;
    border-radius:8px;
    font-size:20px;
                    }
                    .button2{
                        background-color:#5EC942;
                        font-size:18px;
                        color:#f0f0f0;
                        width:80px;
                        border:1px solid black;
                        border-radius:5px;
                        margin-top:2%;
                    }
                    .button2:hover{
                        transform: scale(1.2,1.2);
                        transition-duration: .2s;
                    }
                    @media only screen and (max-width:1000px){
                       
                        .start{
                            display:none;
                        }
                        .end{
                                display:inline-block;
                                margin-top:30%;
                                /* color:#f0f0f0; */
                                font-size:90px;
                            }
                            
                        .container{
                            margin-top:20%;
                            width:100%;
                            height:1000px;
                        }
                        .hide{
                            display:none;
                        }
                        .row input[type="text"],input[type="file"]{
                            margin-top:10%;
                        }
                        input[type="text"],input[type="file"]{
                            height:90px;
                            font-size:40px;
                        }
                        .button2{
                            margin-top:5%;
                            font-size:30px;
                            width:120px;
                        }
                    }
        </style> -->
        </head>
        <body class="text-center">
            <form action="gallerycheck.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm" enctype="multipart/form-data" id="gallery">
                <div class="container">
                    <h1 class="end">Gallery Form</h1>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <pre class="hide">Name:</pre>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input type="text" name="gname" placeholder="Image name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <pre class="hide">Img:</pre>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input type="file" name="gimg" placeholder="Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <input type="submit" value="submit" class="button2" name="gsub">
                        </div>
                    </div>
            
            <td></td>
            <td></td>
        </tr>
                </div>
            </form> 
            <table class="mt-4" align="center">
    <tr>
        <th>Gallery no</th>
        <th>Gallery name</th>
</tr>
    <?php 
    $prod="SELECT sno,gname FROM gallery";
    $prores=mysqli_query($conn,$prod);
    if($prores->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($prores))
        {?>
        <tr>
        <td><?php echo $row['sno']  ?></td>
        <td><?php echo $row['gname']  ?></td>
        </tr>
        <?php
        }
    }
    ?>
  </table>
  <table class="mt-4" align="center" id="regdetails">
    <h2 style="margin-top:10%;">Details</h2>
    <tr>
        <th>sno</th>
        <th>Email</th>
</tr>
    <?php 
    $prod="SELECT sno,email FROM detail";
    $prores=mysqli_query($conn,$prod);
    if($prores->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($prores))
        {?>
        <tr>
        <td><?php echo $row['sno']  ?></td>
        <td><?php echo $row['email']  ?></td>
        </tr>
        <?php
        }
    }
    ?>
  </table>
        </body>
    </html>

<?php
}
else
{
    echo 'You dont have access to open this page';
}
?>
            </div>
        </div>
    </div>
    </body>
</html>
<?php
}
else{
    header("Location: index.php");
}
?>