<?php
session_start();
if(isset($_POST['changepass']) && isset($_SESSION['changemail']))
{
    $check=$_SESSION['rand'];
    $email=$_SESSION['changemail'];
    if($check==$_POST['otp'])
    {
        
        echo '<html>
        <head>
            <title>
                password change
            </title>
            <meta charset="UTF-8">
            <meta name="description" content="It is the website for booking home necessaries like cots, doors, dining tables, sofas,etc.Our website is for you to get a good wood products.">
            <meta name="keywords" content="furnitureallinone1439,furnitureallinone,furniture,FURNITUREALLINONE1439,FURNITURE,woodproducts,home necessaries">
            <meta name="author" content="vamsi veeramalla">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
            body
            {
                justify-content:center;
                text-align:center;
                background-color:#f0f0f0;
    
            }
            h1{
                color:green;
            }
            .container-fluid{
                background-color:white;
                height:300px;
                width:800px;
                border-radius:10px;
                margin-top:10%;
                padding:5%;
            }
            .row .col-lg-6{
                margin-top:5%;
                text:center;
            }
            label{
                font-size:25px;
            }
            input[type="email"]
            {
                font-size:25px;
                float:left;
                width:100%;
            }
            input[type="submit"]
            {
                font-size:25px;
                width:20%;
                height:30%;
                border-radius:8px;
                margin-top:5%;
                background-color:green;
                color:white;
                border:none;
            }
            @media only screen and (max-width:1000px)
            {
                .container-fluid{
                    margin-top:100px;
                   height:auto;
                   width:auto;
                }
                .row .col-lg-6{
                    margin-top:5%;
                    text:center;
                }
                label{
                   display:none;
                }
                input[type="password"]
                {
                    font-size:20px;
                    width:100%;;
                    height:100%;
                }
                input[type="submit"]
                {
                    font-size:20px;
                    width:auto;
                    height:5%;
                    
                }
            }
        </style>
        </head>
        <body>
            <div class="container-fluid">
            <div><h1>Forgot Password</h1></div>
            <form action="changepasscheck.php" method="post" onsubmit="return all();">
                <div class="row">
                    <div class="col-lg-6 col-sm-12" >
                        <label for="newpass">new password:</label>
                    </div>
                    <div class="col-lg-6 col-sm-12" >
                        <input type="password" name="newpass" id="CPass" placeholder="New password" onkeydown="Cpass();">
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-sm-12" >
                    <label for="pass">re-enter password:</label>
                </div>
                <div class="col-lg-6 col-sm-12" >
                    <input type="password" name="repass" id="RePass" placeholder="re-enter password" onkeydown="repass();">
                </div>
            </div>
                <div>
                    <input type="submit" value="Next" name="changesuccess">
                </div>
               
                </form>
            </div>
        </body>
        <script>
        function Cpass()
        {
            var v=document.getElementById("CPass").value;
            var reg=/[a-z A-Z]+[! @ # $ % ^ & * ?]+[\d]+/;
            if(v.length>=8 && v.match(reg))
            {
                document.getElementById("CPass").style.border="2px solid green"
                return true;
            }
            else{
                document.getElementById("CPass").style.border="2px solid red";
                return false;
            }
        }
        function repass()
        {
            var v=document.getElementById("CPass").value;
            var l=document.getElementById("RePass").value;
            if(v.length>=8 && v==l)
            {
                document.getElementById("RePass").style.border="2px solid green"
                return true;
            }
            else{
                document.getElementById("RePass").style.border="2px solid red";
                return false;
            }
        }
        function all()
        {
            if(repass() && CPass())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        </script>
    </html>';
    }
    else{
        $emrand=$email." ".$check;
        echo '<script>
        alert("Enter correct otp");
        document.location.href="changepass.php?mail='.$emrand.'";
        </script>';
    }
}
?>