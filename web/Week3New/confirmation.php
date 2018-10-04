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
        <li><a href="checkout.php">Checkout</a></li>
        <li class="active"><a href="confirmation.php">Confirmation page</a></li>
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
        <h1>
        Order Confirmed! Master Chief says Thank you for your Business :)
        </h1>
        <img src="masterChief.jpg" />
        <br />
        <h3> Your Items: </h3>
        <?php
        $CartBackup = $_SESSION["cart"];
        
        if($_SESSION["cart"] == "")
        {
            echo "You don't have any items in your cart yet!";
        }
        else
        {
            echo "<h3>";
            while($_SESSION["cart"] != "")
            {
                if(strpos($_SESSION["cart"], 'item1') !== false)
                {
                    $_SESSION["cart"] = preg_replace('/item1/', '', $_SESSION["cart"], 1);
                    echo "Energy Sword: $3<br />";
                }
                else if(strpos($_SESSION["cart"], 'item2') !== false)
                {
                    $_SESSION["cart"] = preg_replace('/item2/', '', $_SESSION["cart"], 1);
                    echo "Spartan Helmet: $5<br />";
                }
                else if(strpos($_SESSION["cart"], 'item3') !== false)
                {
                    $_SESSION["cart"] = preg_replace('/item3/', '', $_SESSION["cart"], 1);
                    echo "Plamsa Pistol: $3<br />";
                }
                else if(strpos($_SESSION["cart"], 'item4') !== false)
                {
                    $_SESSION["cart"] = preg_replace('/item4/', '', $_SESSION["cart"], 1);
                    echo "Plasma Rifle: $3<br />";
                }
                else if(strpos($_SESSION["cart"], 'item5') !== false)
                {
                    $_SESSION["cart"] = preg_replace('/item5/', '', $_SESSION["cart"], 1);
                    echo "Cortana AI Chip: $4.50<br />";
                }
                else if(strpos($_SESSION["cart"], 'item6') !== false)
                {
                    $_SESSION["cart"] = preg_replace('/item6/', '', $_SESSION["cart"], 1);
                    echo "Master Chief and Cortana: $3<br />";
                }
            }
        }
       
        $_SESSION["cart"] = $CartBackup;
        ?>
        <br />
        Your shipping information:
        <br />
        <?php
        if(isset($_POST["address1"]))
        {
            echo "Street Address:" . $_POST["address1"];
        }
        else
        {
            echo "Street Address not provided";
        }
        echo "<br />";
        if(isset($_POST["address2"]))
        {
            echo "Address Line 2:" . $_POST["address2"];
        }
        else
        {
            echo "Address Line 2 not provided";
        }
        echo "<br />";
        if(isset($_POST["city"]))
        {
            echo "City:" . $_POST["city"];
        }
        else
        {
            echo "City not provided";
        }
        echo "<br />";
        if(isset($_POST["zip"]))
        {
            echo "Postal / Zip Code:" . $_POST["zip"];
        }
        else
        {
            echo "Postal / Zip Code not provided";
        }
        echo "<br />";
        if(isset($_POST["state"]))
        {
            echo "State / Province / Region:" . $_POST["state"];
        }
        else
        {
            echo "State / Province / Region not provided";
        }
        echo "<br />";
        if(isset($_POST["country"]))
        {
             echo "Country" . $_POST["country"];
        }
        else
        {
            echo "Country not provided";
        } 
        echo "</h3>"
        ?>  
        
        </div>
        <div class="panel-footer">
        <?php
        $_SESSION["cart"] = ""
        /*Clear cart */
        ?>
        <a class="btn btn-primary" href="browseItems.php">Buy some more stuff!</a>
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