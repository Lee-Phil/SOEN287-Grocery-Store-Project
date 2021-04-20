<?php session_start() ?> <!-- put this in every product page -->
<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Cheese</title>
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

    <script type="text/javascript" src="Javascript/Description.js"></script>
    <script type="text/javascript" src="Javascript/Subtotal1.js"></script>
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
    <h5> <a class="btn btn-outline-dark" href = "dairyeggs.php"> &lt;  Back to Dairy and Eggs</a> </br></h5>

    <div class="row">
    <div class = "col-lg-6">
        <img src = "Images/cheese.jpg" alt = "cheese" style= "height:250px;width:300px;" class="img-fluid">
    </div>

    <div class="col-lg-6">
        Cheese <br>
         <form action = "" name="myForm" method = "post"> <!-- put this in every product page -->
         <strong>$</strong><strong id="value">1.99</strong><strong> / lb</strong> <br>
            <label for="Quantity">Weight in lbs:</label> 
            <input type="number" name = "quantity" id="Quantity" value="0" min="0"> <!-- change name="Quantity" on all pages to "quantity -->
            <div>
        Subtotal ($): <input type="text" size="10" id="subtotal" name= "subtotal" value= "0"readonly /> <!-- Add name=subtotal to all pages -->
        <br><input type = "submit"  value = "Add to Cart" class= "button" onclick="addToCart()" name = "submit"/> <!-- put this in every product page --> 
        </div>
                <button class= "button" class="button" type="button" data-toggle="collapse" data-target="#cheeseDescription" aria-expanded="false" aria-controls="cheeseDescription">More Description</button>
                <div class="collapse" id="cheeseDescription">
                  <div class="card card-body">
                    Fresh, wholesome cheese naturally from Quebec. Since 1874 Saputo has stood for high quality dairy products. Saputo has always been committed to using the best ingredients, people and processes to produce great tasting quality milk you can depend on.
                  </div>
                </div>
            </div>
            </form>
            
            
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

                $_POST['itemName'] = "Cheese"; //Add this to every page
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
   <script type="text/javascript" src="Javascript/Description.js"></script>
    <script type="text/javascript" src="Javascript/Subtotal1.js"></script>
  </body>
  
  </html>