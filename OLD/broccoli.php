<?php session_start() ?> <!-- put this in every product page -->

<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Broccoli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href="CSS/Grocery.css">

    <script type="text/javascript" src="Javascript/broccoli.js"></script>
    <script type="text/javascript" src="Javascript/WeeklyDeal.js"></script>
</head>

<body>
    <?php
  include("navagationBar.php");
  ?>
  
<div id="page-container">
  <div class = "container" id="content-wrap">
    <div>
      <br><br><br>
    </div>
    <h5> <a class="btn btn-outline-dark" href = "vegetables.php"> &lt;  Back to Vegetables</a> </br></h5>

    <div class="row">
    <div class = "col-lg-6">
        <img src = "Images/broccoli.jpg" alt = "broccoli" style= "height:250px;width:300px;" class="img-fluid">
    </div>

    <div class="col-lg-6">
        Broccoli <br>
        <strong id = "item4" class= "specialPrice"><script src="Javascript/WeeklyDeal.js"></script></strong> <br>
      <p class = "priceChange">
      <strong>$</strong><strong id="value">1.99</strong><strong> avg. each</strong>  </p>
        <form action = "" name="myForm" method = "post"> <!-- put this in every product page -->
            <label for="Quantity">Quantity:</label> 
            <input type="number" name = "quantity" id="Quantity" value="0" min="0"> <!-- change name="Quantity" on all pages to "quantity -->
            <div>
        Subtotal ($): <input type="text" size="10" id="subtotal" name= "subtotal" value= "0"readonly /> <!-- Add name=subtotal to all pages -->
        <br><input type = "submit"  value = "Add to Cart" class= "button" onclick="addToCart()" name = "submit"/> <!-- put this in every product page --> 
        </div>
                 <button class= "button" class="button" type="button" data-toggle="collapse" data-target="#bagel" aria-expanded="false" aria-controls="bagelDescription">More Description</button>
        <div class="collapse" id="bagel">
          <div class="card card-body">
           Fresh broccoli with loads of vitamins!
          </div>
          </div>
        </form>
      </div>
      </div>
<!-- put this in every product page -->
      <?php
                
                // $_POST['itemName'] = "Apples";

                // if ($_POST["submit"] && in_array($_POST['itemName'], $_SESSION['itemNames'])) {
                //   echo '<br><br><p style="color: red;">This item is already in the cart.</p>';
                // }
                // else if ($_POST["submit"] && $_POST["subtotal"] == 0) {
                //   echo '<br><br><p style="color: red;">Please select a valid quantity.</p>';
                // }
                
                // if ($_POST["submit"] && $_POST["subtotal"] != 0 && !in_array($_POST['itemName'], $_SESSION['itemNames'])) {
                //   $temp = array($_POST['itemName'], $_POST["cost"], $_POST["quantity"]);
                //   array_push($_SESSION['items'], $temp);
                //   array_push($_SESSION['itemNames'], $_POST['itemName']);                
                // }

                $_POST['itemName'] = "Broccoli"; //Add this to every page
                $_POST['cost'] = "1.99"; //Add this to every page
                include('addToCart.php');
                
              ?>
    </div>
      <div>
        <br>
      </div>
      </div>

    <!--Footer-->
    <?php include 'footer.php';?>
    <script type="text/javascript" src="Javascript/broccoli.js"></script>

  </body>
  
  </html>