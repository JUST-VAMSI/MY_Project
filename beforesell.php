<?php
session_start();
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");
if((isset($_GET['sell'])) && isset($_SESSION['uname']))
{
    $pro=$_GET['sell'];
    $q="SELECT * FROM `products`";
    $result=mysqli_query($conn,$q);
    if($result)
    {
      
?>
 <html>
                <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                <style>
                  .bi-list{
                    display:none;
                  }
                  .home{
                    margin:0% 5%;
                  }
                  .rowone{
                    width:100%;
                    height:20%;
                    margin:2% 0%;
                    background-color:white;
                    /* padding:3% 0%; */
                    font-size:20px;
                  }
                  .buttonedit{
                    color:blue;
                    background-color:lightpink;
                    border:none;
                    border-radius:5px;
                    height:60%;
                    width:30%;
                    float:right;
                    font-size:20px;
                  }
                  .rowtwo{
                    margin:3% 0%;
                    padding:2% 0%;
                    background-color:white;
                    position:sticky;
                    bottom:0;
                    height:100px;
                  }
                  .buttonplaceorder{
                    background-color:gold;
                    border:none;
                    width:20%;
                    height:100%;
                    border-radius:5px;
                    font-size:20px;

                  }
                  @media only screen and (max-width:1000px){
                    .bi-list{
                    display:inline-block;
                    color:#fff;
                    font-size:60px;
                    margin-left:5%;
                  }
                  .nav-link{
                    font-size:40px;
                  }
                  .buttonedit{
                    width:40%;
                    height:40%;
                    font-size:40px;
                  } 
                  .rowone{
                    height:20%;
                    font-size:30px;
                    padding-top:10%;
                    padding-bottom:20%;
                  }
                  .rowtwo{
                    height:10%;
                    position:sticky;
                    bottom:0;
                    justify-content:center;
                  }
                  .buttonplaceorder{
                    
                    height:80%;
                    width:70%;
                    border-radius:5px;
                    font-size:40px;
                    margin:2% 0%;

                  }
                  }
                </style>
                </head>
                <body class="text-center" style="background-color:f0f0f0;">
               <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2 fw-bold text-center text-sm-center sticky-top"> 
                  <button class="navbar-toggler">
                  <i class="bi bi-list" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"></i>
                  </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 home">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="index.php">HOME</a>
                </li>
              </ul>
            </div>
          </nav>
          <?php
    if($result->num_rows>0)
    {
      $ss=$_SESSION['uname'];
      $que="SELECT * FROM `add_address` WHERE email='$ss'";
      $rest=mysqli_query($conn,$que);
      if($rest->num_rows==1)
      {
      while($row=mysqli_fetch_assoc($rest))
      {
         if($row['email']==$ss)
         {
          ?>
                 <div class="row rowone">
                   <div class="col-lg-6 col-sm-6 mt-5 mb-5">
                   <p><b>Delivery to : </b><?= $row['fullname'].", ".$row['mobile'].", ".$row['pincode'].", ".$row['states'].", ".$row['house'].", ".$row['roadname']?></p>
                   </div>
                   <div class="col-lg-6 col-sm-6 mt-5 mb-5">
                       <a href="add_address.php?edit='okk'"><button class="buttonedit">Edit</button></a>
                   </div>
                 </div>
                 <div class="row rowtwo">
                   <div class="col-lg-12 col-sm-12 col-xs-12">
                       <a href="sell.php?yessell=<?= $pro ?>"><button class="buttonplaceorder">Place Order</button></a>
                   </div>
                 </div>
             
           
      <?php
         break;
         }

    }
  }
  }
    }
  }?>