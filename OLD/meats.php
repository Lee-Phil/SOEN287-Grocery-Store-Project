<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Meats Aisle</title>
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

    <h1 class="header" style="font-size:5vw;"> Meats and Poultry </h1>



    <div class= "products table-responsive-xs table-responsive-sm table-responsive-md">
        <table class="table">
          <tr style="outline: thin solid">
            <td ><a href= "beef.php"><img src = "Images/beef.jpg" alt = "milk" ></a> </td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Beef</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td><a href = "chicken.php"><img src = "Images/chicken.jpg" alt = "chicken"> </a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Chicken</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td> <a href = "fish.php"><img src = "Images/fish.jpg"  alt = "fish"> </a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Fish</div>
            </td>
          </tr>
          <tr style="outline: thin solid">
            <td> <a href = "shrimp.php"><img src = "Images/shrimp.jpg"  alt = "shrimp"> </a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">Shrimp</div>
            </td>
          </tr>
        </table>
    </div>



    <!--Footer-->
    <?php include 'footer.php';?>
  
  </body>
  
  </html>