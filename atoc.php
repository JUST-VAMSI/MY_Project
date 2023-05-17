<?php
session_start();
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include('db_conf.php');
if(isset($_SESSION['uname']) && (isset($_GET['ac']) || isset($_GET['yes']) || isset($_GET['pro']) || isset($_GET['edchange']) || isset($_GET['cart'])))
{
    $uname=$_SESSION['uname'];
    $q="SELECT * FROM `add_address` WHERE email='$uname'";
    $result=mysqli_query($conn,$q);
    if($result)
    {
      
   
   
    ?>
    <html>
                <head>
                <meta charset="UTF-8">
                <meta name="description" content="It is the website for booking home necessaries like cots, doors, dining tables, sofa's,etc.Our website is for you to get a good wood products.">
                <meta name="keywords" content="furnitureallinone1439,furnitureallinone,FURNITUREALLINONE1439,furniture,wood products,furnitureall">
                <meta name="author" content="vamsi veeramalla">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
                <style>
                  .bi-list{
                    display:none;
                  }
                  .home{
                    margin:0% 5%;
                  }
                  .container-fluid{
                    margin-top:10%;
                  }
                  .buttonshop{
                    color:blue;
                    border-radius:5px;
                    background-color:lightpink;
                    border:none;
                    width:10%;
                    height:6%;
                  }
                  .rowone{
                    width:100%;
                    height:20%;
                    margin:2% 0%;
                    background-color:white;
                    padding:3% 0%;
                    font-size:20px;
                  }
                  .buttonedit{
                    color:blue;
                    background-color:lightpink;
                    border:none;
                    border-radius:5px;
                    height:60%;
                    width:20%;
                    float:right;
                  } 
                  .rowmiddle{
                    margin-top:2%;
                    border-radius:5px;
                    background-color:white;
                  }
                  .d-flex .col-lg-6 img{
                    margin:2% 0%;
                    box-shadow:2px 2px 4px 4px rgba(0,0,0,0.1);
                    border-radius:5px;
                    
                  }
                  .d-flex .col-lg-6 img:hover{
                    transform:scale(1.06);
                    transition-duration:.2s;
                  }
                  .d-flex .colone{
                    margin:2% 0%;
                  }
                  .d-flex .col-lg-6 .left{
                    float:left;
                  }
                  .d-flex .colone p{
                    font-size:30px;
                  }
                  .d-flex .colone .no{
                    font-size:25px;
                  }
                  .buttonremove{
                    color:white;
                    background-color:red;
                    border:none;
                    border-radius:5px;
                    width:30%;
                    height:130%;
                    font-size:20px;
                  }
                  .rowtwo{
                    margin:3% 0%;
                    padding:2% 0%;
                    background-color:white;
                    position:sticky;
                    bottom:0;
                  }
                  .buttonplaceorder{
                    background-color:gold;
                    border:none;
                    width:30%;
                    height:100%;
                    border-radius:5px;

                  }
                  .buttonedit:hover,.buttonremove:hover,.buttonplaceorder:hover{
                    transform:scale(1.06);
                    transition-duration:.2s;
                  }
                 @media screen and (max-width:1000px){
                  .bi-list{
                      display:inline-block;
                      color:#fff;
                      font-size:40px;
                      margin-left:5%;
                    }
                    .nav-link,.ic{
                      font-size:20px;
                    }
                  .container-fluid{
                    justify-content:center;
                    margin-top:40%;
                  }
                  .head6,.buttonshop{
                    font-size:20px;
                  }
                  .buttonshop{
                    width:40%;
                    height:6%;
                  }
                  .buttonedit{
                    width:130%;
                    height:50%;
                    font-size:15px;
                  } 
                  .rowone{
                    margin:0%;
                    height:auto;
                    padding-top:10%;
                  }
                  .d-flex .col-lg-6{
                    padding:5%;
                  }
                  .rowone .col-lg-6 p{
                    font-size:15px;
                  }
                  .d-flex .col-lg-6 img{
                    margin:5% 0%;
                    width:150px;
                    height:200px;
                  }
                  .d-flex .colone{
                    margin:5% 0%;
                  }
                  .d-flex .colone p{
                    font-size:15px;
                  }
                  .d-flex .colone .no{
                    font-size:15px;
                  }
                  .d-flex .colone h4{
                    font-size:15px;
                  }
                  .buttonremove{
                    width:100%;
                    height:120%;
                    font-size:20px;
                  }
                  .rowtwo{
                    position:sticky;
                    bottom:0;
                  }
                  .rowtwo .col-lg-6 h2{
                    font-size:20px;
                    margin:5% 0%;
                  }
                  .buttonplaceorder{
                    
                    height:100%;
                    width:100%;
                    border-radius:5px;
                    font-size:20px;
                    margin-bottom:2%;

                  }
                  .cartimg{
                    height:200px;
                    width:200px;
                  }
                 }
                  </style>
                </head>
                <body class="text-center text-sm-center" style="background-color:#f0f0f0;">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary fw-bold text-center text-sm-center sticky-top"> 
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
      // $connect=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
      
      $que="SELECT * FROM `cart` WHERE email='$uname'";
      $rest=mysqli_query($conn,$que);
      $qur="SELECT * FROM `cart`";
       $res=mysqli_query($conn,$qur);
       if(($res->num_rows>0) && ($rest->num_rows==1))
       {
              while($row=mysqli_fetch_assoc($rest))
              {
                 if($row['email']==$uname)
                 {
                  ?>
                         <div class="d-flex rowone" >
                           <div class="col-lg-6 col-sm-6">
                               <p><b>Delivery to : </b><?= $row['fullname'].", ".$row['mobile'].", ".$row['pincode'].", ".$row['states'].", ".$row['house'].", ".$row['roadname']?></p>
                           </div>
                           <div class="col-lg-6 col-sm-6">
                               <a href="add_address.php?edit='confirm'"><button class="buttonedit">Edit</button></a>
                           </div>
                         </div>
                     
                   
              <?php
                 break;
                 }
               }
               
               $p=0;
               while($rw=mysqli_fetch_assoc($result))
              {
                    if($rw['email']==$uname)
                    {
                       while($row=mysqli_fetch_assoc($res))
                       {
                          if($row['email']==$rw['email'])
                          {?>
                            <div class="d-flex rowmiddle">
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                 <img src="uploads/<?php echo $row['proimg']?>" alt="..." height="300px" width="250px">
                             </div>
                              <div class="col-lg-6 col-sm-6 col-xs-6 colone">
                                <h4 class="fw-bold"><?= $row['proname']; ?></h4>
                                <hr>
                                <p><?= $row['prodes'] ?></p>
                                <div class="d-flex">
                                  <div class="col-lg-6 col-sm-6 col-xs-6">
                                  <s><P class="text-danger no"><?= $row['promrp'] ?></P></s>
                                  </div>
                                  <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <P class="left"><i class="bi bi-currency-rupee"></i><span class="text-success"><?= $row['proprice'] ?></span></P>
                                  </div>
                                </div>
                                <div class="d-flex">
                                  <div class="col-lg-12">
                                  <a href="del.php?dele=<?= $row['proname'] ?>">
                                  <button class="buttonremove">Remove</button></a>
                                  </div>
                                </div>
                              </div>
                          </div>
                            <?php
                                $p+=$row['proprice'];
            
                            
                    
                          }
                       }
                    }
                    
              }
      ?>
          <div class="d-flex rowtwo">
          <div class="col-lg-6 col-sm-6 col-xs-6">
            <h2>Total: <?php echo $p ?></h2>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6">
            <a href="sell.php?atocsell='get'"><button class="buttonplaceorder">Place Order</button></a>
        </div>
        </div>
        </body>
         </html>
       <?php
       }
    else{
        ?>
        <html>
            <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body class="text-center">
        <div class="container-fluid">
                <img src="images/cart.gif" alt=".." width="300px" height="300px" class="cartimg">
                <h6 class="head6">Your Cart Is empty!</h6>
                <a href="index.php" aria-current="page"><button class="buttonshop"><i class="bi bi-cart-check-fill me-2"></i>Shop Now</button></a>
                </div>
                </body>
                </html>
        <?php
         }

    }

    
}
elseif(!isset($_SESSION['uname']))
       {
          header("Location: login.php");
       }
?>
