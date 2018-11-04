<?php
//Start the session
session_start();
require('dbConnect.php')
?>

<html>
<head>
<title> Halo Merchandise: Shopping Cart </title>
 <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  
 
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

foreach ($_GET as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}

if(isset($_GET['Item1']))
{
    $_SESSION['cart'] = $_SESSION['cart'] . 'item1';
}
if(isset($_GET['Item2']))
{
    $_SESSION['cart'] = $_SESSION['cart'] . 'item2';
}
if(isset($_GET['Item3']))
{
    $_SESSION['cart'] = $_SESSION['cart'] . 'item3';
}
if(isset($_GET['Item4']))
{
    $_SESSION['cart'] = $_SESSION['cart'] . 'item4';
}
if(isset($_GET['Item5']))
{
    $_SESSION['cart'] = $_SESSION['cart'] . 'item5';
}
if(isset($_GET['Item6']))
{
    $_SESSION['cart'] = $_SESSION['cart'] . 'item6';
}
?>  

<div class='jumbotron'>
  <div class='container text-center'>
    <h1>Halo Merchandise: Browse Items</h1>
 
    <p>All your favorite Halo items - for cheap!</p>
  </div>
</div>

<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>                        
      </button>
      <a class='navbar-brand' href='#'><img src='logo.jpg' height='30' /></a>
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='browseItems.php'>Browse Items</a></li>
        <li><a href='viewCart.php'>View Cart</a></li>
        <li><a href='checkout.php'>Checkout</a></li>
        <li><a href='confirmation.php'>Confirmation page</a></li>
        <li><a href="addNewItem.php">Add New Item</a></li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='viewCart.php'><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class='container'>    
   <?
    $db = get_db();
    
    $stmt = $db->prepare('SELECT * FROM costumes');
    $result = $stmt->execute();
    
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo" <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'>";
    echo $row['name'];
    echo "</div>
        <div class='panel-body'><img src=' ";
    echo $row['image'];
    echo "' class='img-responsive' style='width:100%' alt='Image'></div>
        <div class='panel-footer'>";
    echo $row['price'];
    echo "<form action='browseItems.php' method='get'>
        <input type='submit' name='" . $row['name'] . " $" . $row['price'] . "' class='btn btn-danger' value='Add to Cart'/>       
        </form>";
        
    #I'll need to fix this php code to work with dynamically generated items now
    if(strpos($_SESSION['cart'], 'item1') !== false)
    {
        echo "<div class='alert alert-success'>Item Bought!</div>";
    }
    echo "
        </div>
      </div>
    </div>";
    }
    
    $stmt = $db->prepare('SELECT * FROM games');
    $result = $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo" <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'>";
    echo $row['name'];
    echo "</div>
        <div class='panel-body'><img src=' ";
    echo $row['image'];
    echo "' class='img-responsive' style='width:100%' alt='Image'></div>
        <div class='panel-footer'>";
    echo $row['price'];
    echo "<br /> Rating:";
    echo $row['rating'];
    echo "<br /> Year Released: ";
    echo $row['yearreleased'];
    echo "<br /> Synopsis:";
    echo $row['synopsis'];
    echo "<form action='browseItems.php' method='get'>
        <input type='submit' name='" . $row['name'] . " $" . $row['price'] . "' class='btn btn-danger' value='Add to Cart'/>       
        </form>";
        
    #I'll need to fix this php code to work with dynamically generated items now
    if(strpos($_SESSION['cart'], 'item1') !== false)
    {
        echo "<div class='alert alert-success'>Item Bought!</div>";
    }
    echo "
        </div>
      </div>
    </div>";
    }
    $stmt = $db->prepare('SELECT * FROM toys');
    $result = $stmt->execute();
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo" <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'>";
    echo $row['name'];
    echo "</div>
        <div class='panel-body'><img src=' ";
    echo $row['image'];
    echo "' class='img-responsive' style='width:100%' alt='Image'></div>
        <div class='panel-footer'>";
    echo $row['price'];
    echo "<br /> Toy Size:";
    echo $row['isize'];
    echo "<br /> For Kids?:";
    echo $row['forkids'];
    echo "<form action='browseItems.php' method='get'>
        <input type='submit' name='" . $row['name'] . " $" . $row['price'] . "' class='btn btn-danger' value='Add to Cart'/>       
        </form>";
        
    #I'll need to fix this php code to work with dynamically generated items now
    if(strpos($_SESSION['cart'], 'item1') !== false)
    {
        echo "<div class='alert alert-success'>Item Bought!</div>";
    }
    echo "
        </div>
      </div>
    </div>";
    }
    
    $stmt = $db->prepare('SELECT * FROM other');
    $result = $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo" <div class='col-sm-4'>
      <div class='panel panel-primary'>
        <div class='panel-heading'>";
    echo $row['name'];
    echo "</div>
        <div class='panel-body'><img src=' ";
    echo $row['image'];
    echo "' class='img-responsive' style='width:100%' alt='Image'></div>
        <div class='panel-footer'>";
    echo $row['price'];
    echo "<br /> Toy Size:";
    echo $row['isize'];
    echo "<form action='browseItems.php' method='get'>
        <input type='submit' name='" . $row['name'] . " $" . $row['price'] . "' class='btn btn-danger' value='Add to Cart'/>       
        </form>";
        
    #I'll need to fix this php code to work with dynamically generated items now
    if(strpos($_SESSION['cart'], 'item1') !== false)
    {
        echo "<div class='alert alert-success'>Item Bought!</div>";
    }
    echo "
        </div>
      </div>
    </div>";
    }
    
    
    ?>
</div><br><br>

<footer class='container-fluid text-center'>
  <p>Halo Merchandise Store: All Rights Reserved</p>  
 
  <form class='form-inline'>Get deals:
    <input type='email' class='form-control' size='50' placeholder='Email Address'>
    <button type='button' class='btn btn-danger'>Sign Up</button>
  </form>
</footer>

</body>
</html>