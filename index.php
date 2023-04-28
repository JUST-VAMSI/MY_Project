<?php
session_start();
include("db_conf.php");
// $connect=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
  if(isset($_GET['cart'])){
    ?>
    <script>alert("successfully added")</script>
    <?php
  }  
   if(isset($_GET['already']))
  {?>
    <script>alert(<?php echo $_GET['already'] ?>)</script>
  <?php
  }  
  ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
  <meta name="description" content="It is the website for booking home necessaries like cots, doors, dining tables, sofa's,etc.Our website is for you to get a good wood products.">
  <meta name="keywords" content="furnitureallinone1439,furnitureallinone,FURNITUREALLINONE1439,furniture,wood products,furnitureall">
  <meta name="author" content="vamsi veeramalla">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="1EW1Lqyf73NVRyMCCrt88N150Yoxj2ySHyAmVaEaRx0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protobufjs/7.2.0/protobuf.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- link swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
    *
      {
        font-family:italic;
      }
       .navbar-toggler-icon{
        display:none;
       }
      .mainhead
      {
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px #0086F8, 0 0 5px blue;
        float:left;
      }
      .head{
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px #0086F8, 0 0 5px blue;
        float:left;
      }
      .rowone{
        justify-content:center;
        text-align:center;
      }
      .rowone .col-sm-6{
          margin:2%;
          border-radius:5px;
          width:400px;
          background-color:white;
      }
      .rowone .col-sm-6:hover{
          transform:scale(1.06);
          transition-duration: .2s;
      }
      a{
        text-decoration:none;
        color:black;
      }
      .contactrow{
        padding-top:2%;
      }
      .buttonbuy{
        margin-bottom:2%;
      }
      .col-sm-6 img{
        margin-top:2%;
      }
      .contactrow .col-lg-4,.contactrow .col-lg-3,.contactrow .col-lg-5{
        padding-left:2%;
      }
      .onecol{
       text-align:left;
      }
      .twocol2{
        text-align:left;
      }
      .onecol div{
        margin-top:5%;
      }
      .insta{
        background-image: linear-gradient(
          to bottom right,
          #405DE6,
          #5B51D8,
          #833AB4,
          #C13584,
          #E1306C,
          #FD1D1D,
          #F56040,
          #F77737,
          #FCAF45,
          #FFDC80

        );
      }
      .linkin{
        background-color:blue;
      }
      .git{
        color:#4183c4;
        background-color:white;
      }
      pre{
        margin-left:5%;
        margin-top:5%;
        font-size:20px;
      }
      @media only screen and (max-width:1000px)
      {
       .mainhead,.h{
          font-size:30px;
        }
        .head{
          font-size:25px;
        }
        .nav-link,.dropdown-item,.ic{
          font-size:20px;
        }
        .carousel-item img{
          height:200px;
        }
      .rowone .col-sm-6{
          width:150px;
      }
        .col-sm-6 img{
          width:100px;
          height:100px;
          margin-top:3%;
        }
        .col-sm-6 .card-title{
          margin-top:2%;
          font-size:10px;
        }
        .col-sm-6 .card-text{
          font-size:13px;
        }
        .col-sm-6 .btn-warning{
          font-size:10px;
        }
        .contactrow h1{
          font-size:20px;
        }
        .contactrow pre{
          font-size:10px;
        }
        .map{
          display:none;
        }
        .swiper-slide img {
          width: 80px;
          height: 50px;
        }
        .swiper-slide{
          padding:3%;
        }
        .gal{
          font-size:20px;
        }
        .navbar-toggler-icon{
          display:inline-block;
          font-size:25px;
        }
        .bi-star-fill,.bi-star{
          font-size:8px;
        }
      }
    </style>
    </head>
    <body class="justify-content-center text-center text-sm-center" style="background-color:#f0f0f0;">
    <div class="row justity-content-center">
            <h1 class="text-center mainhead">FURNITURE</h1>
<h2 class="text-center head">ALL IN ONE</h2>
    </div>
    <nav class="navbar navbar-expand-lg text-light bg-primary fw-bold text-center text-sm-center sticky-top" style="color:white;">
<div class="container-fluid">
<?php
if(isset($_SESSION['uname']))
{?>
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown bg-primary text-light">
      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <button><i class="bi bi-file-person"></i></button>
      </a>
      <ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item text-success" href="main.php"><?php echo $_SESSION['uname'].'<br>'; ?></a></li>
      </ul>
    </li>
  </ul>
<?php
}
?>
<button class="text-light bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">   
                 <i class="bi bi-list"></i> 
              </span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link text-light" aria-current="page" href="index.php">HOME</a>
</li>
<li class="nav-item dropdown bg-primary text-light">
<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
PRODUCTS
</a>
<ul class="dropdown-menu bg-primary text-center text-sm-center" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item text-light" href="#door">DOORS</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-light" href="#cot">COTS</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-light" href="#sofa">SOFAS</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-light" href="#dining">Dining tables</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="#gallery">GALLERY</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="#contactus">CONTACT US</a>
</li>
<?php
if(isset($_SESSION['uname']))
{?>
    <li class="nav-item">
      <a class="nav-link text-light logout" href="logout.php" name="logout">LOGOUT</a>
    </li>
<?php
}
elseif(!isset($_SESSION['uname']))
{?>
    <li class="nav-item">
      <a class="nav-link text-light login" href="login.php" name="login">SIGNIN / SINGUP</a>
    </li>
  <?php
}
?>
</ul>

<a href="atoc.php?ac='helo'"><button class="btn btn-primary px-4 f-right ic"><i class="bi bi-cart-check-fill me-2"></i></button></a>
<a href="order.php?main='order'"><button class="btn btn-primary px-4 f-right ic"><i class="bi bi-bag-fill"></i></button></a>
</div>
</div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide mt-2" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="sliderimages/dainnet3-transformed.jpeg" class="d-block" alt="..." aspect-ratio="1280/720" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="sliderimages/cotnet1.jpg" class="d-block" alt="..." aspect-ratio="1500/1000" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="sliderimages/sofanet2.jpeg" class="d-block" alt="..." aspect-ratio="1280/698" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="sliderimages/c7.jpg" class="d-block" alt="..." aspect-ratio="1802/1200" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="sliderimages/pexels-tirachard-kumtanom-887822.jpg" class="d-block" alt="..." aspect-ratio="5472/3648" height="500px" width="100%">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
<?php
   
    
    if(!$conn)
    {
       die("connection failed: ".mysqli_connect_error());
    }
    $sql_query="SELECT * FROM `products` ORDER BY proid ASC";
    $result=mysqli_query($conn,$sql_query);
    ?>

<h2  style="margin-top:3%;" class="h">PRODUCTS</h2>
<div class="row rowone">
<?php
      if($result->num_rows > 0){
    while($row=mysqli_fetch_assoc($result))
        {
          if($row['proid']==1){
            ?>
            <h3 class="text-primary text-center h" id="door">DOORS</h3>
            <hr>
            <?php
          }
          if($row['proid']==7){
            ?>
            <h3 class="text-primary h" id="cot">COTS</h3>
            <hr>
            <?php
            }
             if($row['proid']==13){
            ?>
            <h3 class="text-primary h" id="sofa">SOFAS</h3>
            <hr>
            <?php
            }
            if($row['proid']==19){
              ?>
              <h3 class="text-primary h" id="dining">DINING TABLES</h3>
              <hr>
              <?php
              }
              ?>

            
                <div class="col-sm-6 col-lg-4 text-center product">
                <a href="product.php?prod=<?=$row['proname'] ?>">
                <img src="uploads/<?php echo $row['proimg']?>" alt="..." height="300px" width="250px" style="border-radius:8px;">
                <h6 class="card-title" name="pname"><?php echo $row['proname']?></h6>
                  <p class="card-text">RS.<?php echo $row['proprice']?></p>
                    <button class="btn btn-warning m-2">BUY NOW</button>
                  </a>
                </div>
             <?php  
        
      }
    }
        ?>
    </div>
<hr>
<h1 class="text-primary gal" id="gallery">GALLERY</h1>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php
    $gals="SELECT * FROM gallery";
    $galres=mysqli_query($conn,$gals);
    while($row=mysqli_fetch_assoc($galres))
    {
    ?>
      <div class="swiper-slide">
        <div>
          <img src="gallery/<?php echo $row['gimg']?>" alt="">
          <h1><?php echo $row['gname'] ?></h1>
          <i class="bi bi-star-fill text-primary"></i>
          <i class="bi bi-star-fill text-primary"></i>
          <i class="bi bi-star-fill text-primary"></i>
          <i class="bi bi-star-fill text-primary"></i>
          <i class="bi bi-star"></i>
        </div>
      </div>
      <?php
    }
      ?>
     
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
 
<footer class="sticky-bottom text-center text-sm-center" style="background-color: rgba(0, 0, 0, 0.2)">
  <section>
    <div class="row contactrow">
      <h1 id="contactus"><b> CONTACT US</b></h1>
      <div class="col-lg-8 col-sm-12 onecol">
       <pre><b> NAME               :  VEERAMALLA SATHIBABU</b>
<b> S/O                    :  VEERAMALLA SIVAYYA</b>
<b> EMAIL             :   vsathibabuvsathibabu51@gmail.com</b>
<b> MOBILE NO.  :  9912691390</b>
<b> WORK EXPC :  35 YEARS</b>
<b> VILLAGE        : GANDEPALLI</b>
<b> DISTRICT       : KAKINADA</b>
<b> STATE              : A.P</b></pre>
      </div>
      <div class="col-lg-4 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15250.594835326598!2d81.9545959283756!3d17.138626666580894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37764a2a71c0cf%3A0x81a52f7cb9a3d0db!2sGandepalli%2C%20Andhra%20Pradesh%20533297!5e0!3m2!1sen!2sin!4v1673936603208!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </section>
<section class="mb-4 text-center">
        <a class="btn btn-outline-light m-1 ic bg-primary" href="https://www.facebook.com/sai.h.5437" target="_blank"><i class="bi bi-facebook"></i></a>
         <a class="btn btn-outline-light m-1 ic bg-success" href="https://wa.me/message/CPLWJQ3BJTYXB1" target="_blank"> <i class="bi bi-whatsapp"></i></a>
         <a class="btn btn-outline-light m-1 ic insta" href="https://www.instagram.com/artist_vamsi/" target="_blank"><i class="bi bi-instagram"></i></a>
         <a class="btn btn-outline-light m-1 ic linkin" href="https://www.linkedin.com/in/vamsi-veeramalla-15137724a/" target="_blank"> <i class="bi bi-linkedin"></i></a>
         <a class="btn btn-outline-light m-1 ic git" href="https://github.com/JUST-VAMSI" target="_blank"><i class="bi bi-github"></i></a>
         
</section>
    <div
         class="text-center p-3 ic"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright: carpenter's
    </div>
  </footer>

    </body>
    </html>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>