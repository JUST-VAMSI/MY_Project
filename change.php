<html>
    <head>
        <title>
            password change
        </title>
        <meta charset="UTF-8">
        <meta name="description" content="It is the website for booking home necessaries like cots, doors, dining tables, sofa's,etc.Our website is for you to get a good wood products.">
        <meta name="keywords" content="furnitureallinone1439,furnitureallinone,furniture,FURNITUREALLINONE1439,FURNITURE,woodproducts,home necessaries">
        <meta name="author" content="vamsi veeramalla">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
            height:auto;
            width:900px;
            border-radius:10px;
            margin-top:10%;
            padding:5%;
        }
        .row .col-lg-6{
            margin-top:5%;
            text:center;
        }
        label{
            font-size:20px;
        }
        input[type="email"]
        {
            font-size:20px;
            width:100%;
        }
        input[type="submit"]
        {
            font-size:25px;
            width:15%;
            height:5%;
            border-radius:8px;
            margin-top:5%;
            background-color:green;
            color:white;
            border:none;
        }
    @media only screen and (max-width:1000px)
    {
        .container-fluid{
            margin-top:200px;
           height:auto;
           width:500px;
        }
        .d-flex .col-lg-6{
            margin-top:5%;
            text:center;
        }
        label{
           display:none;
        }
        input[type="email"]
        {
            font-size:20px;
            width:100%;;
            height:100%;
        }
        input[type="submit"]
        {
            font-size:20px;
            width:20%;
            height:5%;
            
        }

       
    }
    </style>
    </head>
    <body>
        <div class="container-fluid">
        <div><h1>Forgot Password</h1></div>
        <form action="changecheck.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-sm-12" >
                    <label for="email">Email:</label>
                </div>
                <div class="col-lg-6 col-sm-12" >
                    <input type="email" name="email" placeholder="     @gmail.com">
                </div>
            </div>
            <div>
                <input type="submit" value="Next" name="change">
            </div>
            </form>
        </div>
    </body>
</html>