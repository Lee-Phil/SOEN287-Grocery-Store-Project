<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Watermelon</title>
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

    <script type="text/javascript" src="Javascript/watermelonPrice.js"></script>
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
    <h5> <a class="btn btn-outline-dark" href = "fruits.php"> &lt; Back to Fruits</a> </br></h5>

    <div class="row">
    <div class = "col-lg-6">
        <img src = "Images/watermelon.jpg" alt = "watermelon" style= "height:250px;width:300px;" class="img-fluid">
    </div>

    
<div class="col-lg-6">
  Watermelons <br>
  <strong id = "item1" class= "specialPrice"><script src="Javascript/WeeklyDeal.js"></script></strong> <br>
  <p class = "priceChange">
  <strong>$</strong><strong id="value">6.99</strong><strong> avg. each</strong> <br> </p>
        <form action="" name="myForm">
 
            <label for="Quantity">Quantity:</label> 
            <input type="number" name="Quantity" id = "Quantity" value="0" min="0" >
            </form>

            <div>
              Subtotal ($): <input type="text" size="10" id="subtotal" value= "0"readonly />
            </div>
              <br><button class= "button" onclick="addToCart()">Add to cart</button>
              <button class= "button" class="button" type="button" data-toggle="collapse" data-target="#bagel" aria-expanded="false" aria-controls="bagelDescription">More Description</button>
        <div class="collapse" id="bagel">
          <div class="card card-body">
           Fresh Montreal watermelons!
          </div>
          </div>
        
      </div>
      </div>

    </div>
        <div>
          <br>
        </div>
        </div>

    <!--Footer-->
    <?php include 'footer.php';?>
    
    <script type="text/javascript" src="Javascript/watermelonPrice.js"></script>
    <script type="text/javascript" src="Javascript/WeeklyDeal.js"></script>
  </body>
  
  </html>