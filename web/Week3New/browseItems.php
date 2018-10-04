<?php
//Start the session
session_start();
?>

<html>
<head>
<title> Halo Merchandise: Shopping Cart </title>
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
<?php
if(isset($_GET["Item1"]))
{
    $_SESSION["cart"] = $_SESSION["cart"] . "item1";
}
if(isset($_GET["Item2"]))
{
    $_SESSION["cart"] = $_SESSION["cart"] . "item2";
}
if(isset($_GET["Item3"]))
{
    $_SESSION["cart"] = $_SESSION["cart"] . "item3";
}
if(isset($_GET["Item4"]))
{
    $_SESSION["cart"] = $_SESSION["cart"] . "item4";
}
if(isset($_GET["Item5"]))
{
    $_SESSION["cart"] = $_SESSION["cart"] . "item5";
}
if(isset($_GET["Item6"]))
{
    $_SESSION["cart"] = $_SESSION["cart"] . "item6";
}
?>  

<div class="jumbotron">
  <div class="container text-center">
    <h1>Halo Merchandise: Browse Items</h1>
 
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
        <li class="active"><a href="browseItems.php">Browse Items</a></li>
        <li><a href="viewCart.php">View Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
        <li><a href="confirmation.php">Confirmation page</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Energy Sword</div>
        <div class="panel-body"><img src=" energySword.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">$3 
        <form action="browseItems.php" method="get">
        <input type="submit" name="Item1" class="btn btn-danger" value="Add to Cart"/>       
        </form>
        <?php
        if(strpos($_SESSION["cart"], 'item1') !== false)
        {
            echo "<div class='alert alert-success'>Item Bought!</div>";
        }
        ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Spartan Helmet</div>
        <div class="panel-body"><img src=" helmet.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">$5 
        <form action="browseItems.php" method="get">
        <input type="submit" name="Item2" class="btn btn-danger" value="Add to Cart"/>
        </form>
        <?php
        if(strpos($_SESSION["cart"], 'item2') !== false)
        {
            echo "<div class='alert alert-success'>Item Bought!</div>";
        }
        ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Plasma Pistol</div>
        <div class="panel-body"><img src=" plasmaPistol.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">$3 
        <form action="browseItems.php" method="get">
        <input type="submit" name="Item3" class="btn btn-danger" value="Add to Cart"/>
        </form>
        <?php
        if(strpos($_SESSION["cart"], 'item3') !== false)
        {
            echo "<div class='alert alert-success'>Item Bought!</div>";
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Plasma Rifle</div>
        <div class="panel-body"><img src="plasmaRifle.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">$3 
        <form action="browseItems.php" method="get">
        <input type="submit" name="Item4" class="btn btn-danger" value="Add to Cart"/>
        </form>
        <?php
        if(strpos($_SESSION["cart"], 'item4') !== false)
        {
            echo "<div class='alert alert-success'>Item Bought!</div>";
        }
        ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Cortana AI Chip</div>
        <div class="panel-body"><img src=" Cortana.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">$4.50 
                <form action="browseItems.php" method="get">
        <input type="submit" name="Item5" class="btn btn-danger" value="Add to Cart"/>
        </form>
        <?php
        if(strpos($_SESSION["cart"], 'item5') !== false)
        {
            echo "<div class='alert alert-success'>Item Bought!</div>";
        }
        ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Master Chief and Cortana</div>
        <div class="panel-body"><img src=" masterChiefCortana.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        
        <div class="panel-footer">$3 
        <form action="browseItems.php" method="get">
        <input type="submit" name="Item6" class="btn btn-danger" value="Add to Cart"/>
        </form>
        <?php
        if(strpos($_SESSION["cart"], 'item6') !== false)
        {
            echo "<div class='alert alert-success'>Item Bought!</div>";
        }
        ?></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Halo Merchandise Store: All Rights Reserved</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>