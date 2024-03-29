<!--This is the homepage for our online grocery store website.-->

<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Concordia Online Grocery Store</title>
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
    <script type="text/javascript" src="Javascript/WeeklyDeal.js"></script>
</head>

<body>
  <!--This is the navbar which holds the menu that the user can navigate through-->
   <?php
  include("navagationBar.php");
  ?>
<div id="page-container">
  <div id="content-wrap">

  <div>
    <br><br>
  </div>

    <!--The banner-->
      <h1 class = "section1" style="font-size:5vw;">
          Welcome to Concordia SOEN 287 W2021 Online Grocery Store!
          <p style="font-size: 2.5vw;font-family: sans-serif;">Click on 'Aisles' above to explore more products</p>
      </h1>


      <!--Our logo for the store-->
      <div class= "text-center"> 
        <img src = "Images/Online grocery store logo.jpg" class= "img-fluid" alt = "Logo"></a>
      </div>
    
      <br>
      
      <!--The Weekly deals section-->
      <div >
        <h1 class = "section2" style="font-size:5vw;">Check out these amazing Weekly deals!</h1>
      </div>
      
      <div class= "products table-responsive-sm ">
      <table class="centered">
        <tr>
          <td><a href = "watermelon.php"><img src = "Images/watermelon.jpg" alt = "watermelon"></a></td>
          <td><a href = "chicken.php"><img src = "Images/chicken.jpg" alt = "chicken"> </a></td>
          <td><a href= "milk.php"><img src = "Images/milk.jpg" alt = "milk" ></a> </td>
          <td><a href= "broccoli.php"><img src = "Images/broccoli.jpg" alt = "broccoli" ></a></td>
        </tr>
        <tr>
          <td><span class="priceChange">$6.99 each</span></td>
          <td><span class="priceChange">$5.99 / lb</span> </td>
          <td><span class="priceChange">$4.99 (4L bag)</span></td>
          <td><span class="priceChange">$1.99 each</span></td>
        </tr>
        <tr class= "specialPrice">
          <td><span id="item1"><script src="Javascript/WeeklyDeal.js"></script></span> </td>
          <td><span id="item2"><script src="Javascript/WeeklyDeal.js"></script> </span> </td>
          <td><span id="item3"><script src="Javascript/WeeklyDeal.js"></script> </span> </td>
          <td><span id="item4"><script src="Javascript/WeeklyDeal.js"></script> </span> </td>
        </tr>
      </table>
      </div>

      <!--Footer-->
    <?php include 'footer.php';?>
      
    </body>
    
    </html>
