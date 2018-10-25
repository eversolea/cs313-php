<?php
//Start the session
session_start();
?>


<html>
<head>
<title> Halo Merchandise: Add New Item </title>
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
    <h1>Halo Merchandise: Add New Item</h1>
 
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
        <li class="active"><a href="viewCart.php">View Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
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
        <div class="panel-heading"><h2>Do you have a new item to add?</h2></div>
        <div class="panel-body">

        <br />
        <h3 id="EntryFormTitle"> Entry Form: Costumes </h3>
        <form id="EntryForm" action="addNewItem.php" method="post">'
            <input type="hidden" name="itemType" value="0" />
            Name: <input type="text" name="name" value=""><br />
            Price: <input type="text" name="price" value=""><br />
            Item Size: <input type="text" name="size" value=""><br />
            Webpage URL: <input type="text" name="website" value=""><br />
            Thumbnail Image URL: <input type="text" name="image" value=""><br />
            <input type="submit">
        </form>
        
        <h3 id="EntryFormTitle"> Entry Form: Games </h3>
        <form id="EntryForm2" action="addNewItem.php" method="post">
            <input type="hidden" name="itemType" value="1" />
            "Name: <input type='text' name='name' value=''><br />
            Price: <input type='text' name='price' value=''><br />
            Year Released: <input type='text' name='year' value=''><br />
            Synopsis: <input type='text' name='synopsis' value=''><br />
            Rating: <input type='text' name='rating' value=''><br />
            Webpage URL: <input type='text' name='website' value=''><br />
            Thumbnail Image URL: <input type='text' name='image' value=''><br />
            <input type='submit'>
        </form>  
            
        <h3 id="EntryFormTitle"> Entry Form: Toys </h3>
        <form id="EntryForm3" action="addNewItem.php" method="post">
            <input type="hidden" name="itemType" value="2" />
            Name: <input type='text' name='name' value=''><br />
            Price: <input type='text' name='price' value=''><br />
            Item Size: <input type='text' name='size' value=''><br />
            For Kids? (Y/N): <input type='text' name='kids' value=''><br />
            Webpage URL: <input type='text' name='website' value=''><br />
            Thumbnail Image URL: <input type='text' name='image' value=''><br />
            <input type='submit'>
        </form>

        <h3 id="EntryFormTitle"> Entry Form: Other </h3>
        <form id="EntryForm4" action="addNewItem.php" method="post">
            <input type="hidden" name="itemType" value="3" />
            Name: <input type='text' name='name' value=''><br />
            Price: <input type='text' name='price' value=''><br />
            Item Size: <input type='text' name='size' value=''><br />
            Webpage URL: <input type='text' name='website' value=''><br />
            Thumbnail Image URL: <input type='text' name='image' value=''><br />
            <input type='submit'>
         </form>

        
        <?php
        
        if($_POST["itemType"] == '0') {
            echo "INSERT INTO costumes (name,price,isize,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["website"].", ".$_POST["image"].");";
            #$statement1 = $db->prepare("INSERT INTO costumes (name,price,isize,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["website"].", ".$_POST["image"].");");
            #$statement1->execute();
        }      
        
        if($_POST["itemType"] == '1') {
            echo "INSERT INTO games (name,price,yearreleased,synopsis,rating,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["year"].",".$_POST["synopsis"].",".$_POST["rating"].",".$_POST["website"].", ".$_POST["image"].");";
            #$statement1 = $db->prepare("INSERT INTO costumes (name,price,isize,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["website"].", ".$_POST["image"].");");
            #$statement1->execute();
        }

        if($_POST["itemType"] == '2') {
            echo "INSERT INTO toys (name,price,isize,forkids,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["size"].", ".$_POST["kids"].",".$_POST["website"].", ".$_POST["image"].");";
            #$statement1 = $db->prepare("INSERT INTO costumes (name,price,isize,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["website"].", ".$_POST["image"].");");
            #$statement1->execute();
        }
        
        if($_POST["itemType"] == '3') {
            echo "INSERT INTO other (name,price,isize,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["size"].",".$_POST["website"].", ".$_POST["image"].");";
            #$statement1 = $db->prepare("INSERT INTO costumes (name,price,isize,website,image) VALUES ('".$_POST["name"]."', ".$_POST["price"].", ".$_POST["website"].", ".$_POST["image"].");");
            #$statement1->execute();
        }
        
        ?>
        </div>
        <div class="panel-footer">
        <a class="btn btn-primary" href="checkout.php">Check Out</a>
        <br /><br />
        
        <br /><br />
        
        <h4> Did you know that the Trumps support Master Chief?</h4>
        <img src="donaldTrump.png" />
        <img src="trump.jpg" />
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