<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Fruits Aisle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href="CSS/Grocery.css">

    <script type="text/javascript" src="Javascript/Description.js"></script>
</head>

<body>
    <?php
  include("navagationBar.php");
  ?>

<div id="page-container">
  <div id="content-wrap">

    <h1 class="header" style="font-size:5vw;"> FRUITS  </h1>



    <div class= "products table-responsive-xs table-responsive-sm table-responsive-md">
        <table class="table">
          <tr style="outline: thin solid">
            <td ><a href= "banana.php"><img src = "Images/banana.jpeg" alt = "banana" ></a> </td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Bananas</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td><a href = "apples.php"><img src = "Images/apple.jpg" alt = "apple"> </a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Apples</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td> <a href = "orange.php"><img src = "Images/orange.jpg"  alt = "orange"> </a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Oranges</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td> <a href = "cherry.php"><img src = "Images/cherry.jpg" alt = "cherry"> </a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Cherries</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td> <a href = "strawberry.php"><img src = "Images/strawberry.jpg" alt = "strawberry"></a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Strawberries</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td> <a href = "watermelon.php"><img src = "Images/watermelon.jpg" alt = "watermelon"></a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Watermelons</div>
            </td>
          </tr>
        </table>
    </div>



    <div id="footer">
      <div class="row">
        <div class="col-auto footer-item">
          <a href="#">About Us</a>
        </div>
        <div class="col-auto footer-item">
          <a href="#">Online Store</a>
        </div>
         <div class="col-auto footer-item">
            <a href="ContactUs.php">Contact Us</a>
          </div>
        <div class="col-auto footer-item">
          <a href="#">FAQ</a>
        </div>
        <div class="col-auto footer-item">
          <a href="#">Privacy Policy</a>
        </div>
        <div class="col-auto footer-item">
          <a href="#">Message</a>
        </div>
        <hr style="height: 0.6px; margin-top: 20px;"><br>
        <div class="col footer-brand">
          OnlineGroceryStore®
        </div>
      </div>
    </div>
  
  </body>
  
  </html>