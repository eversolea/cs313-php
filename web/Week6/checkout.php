<?php
//Start the session
session_start();
?>


<html>
<head>
<title> Halo Merchandise: Checkout </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 
  <style>
    /* source: https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_store&stacked=h */
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Halo Merchandise: Checkout</h1>
 
    <p>All your favorite Halo items - for cheap!</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="logo.jpg" height="30" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="browseItems.php">Browse Items</a></li>
        <li><a href="viewCart.php">View Cart</a></li>
        <li class="active"><a href="checkout.php">Checkout</a></li>
        <li><a href="confirmation.php">Confirmation page</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2>Checkout:</h2></div>
        <div class="panel-body">
        
        <form action="confirmation.php" method="post">
            <h3>Shipping information:</h3><br />
            Street Address: <input type="text" name="address1" value=""><br />
            Address Line 2: <input type="text" name="address2" value=""><br />
            City: <input type="text" name="city" value=""><br />
            Postal / Zip Code: <input type="text" name="zip" value=""><br />
            State / Province / Region: <input type="text" name="state" value=""><br />
            Country: <input type="text" name="country" value=""><br />
            <input type="submit">
        </form>
        
        </div>
        <div class="panel-footer">
        
        </div>
    </div>
    
</div><br>
</div>

<footer class="container-fluid text-center">
  <p>Halo Merchandise Store: All Rights Reserved</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>