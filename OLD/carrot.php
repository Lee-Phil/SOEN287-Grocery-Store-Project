<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Carrots</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/styles-two.css">
</head>

<body>

  <!-- Navbar -->
    <?php
  include("navagationBar.php");
  ?>

  <div id="description" class="row">
    <div class="col-lg-6">
                <h5 > <a class="btn btn-outline-dark" href = "vegetables.php"> &lt;  Back to Vegetables</a> </br></h5>
      <img src="Images/carrot.jpg" alt="Carrot" class="img-fluid">
    </div>
    <div class="col-lg-6 ">
      
      <div class="row">
        <div class="col">
          <h2 style="padding: 0 0 20px">Carrots</h2>
        </div>
        <div class="col">
          <button type="button" class="btn btn-dark descr-btn" onclick="moreDescriptionCarrot()">More description</button>

        </div>
        <p id="more-description-carrot"></p>
      </div>      
        <form action="" name="myForm">
        <select class="form-select" id="size"  onclick="displayTotal()" name="options">
          <option selected id="option0" value="0">Please select a weight </option>
          <option id="option1" value="3.37">Carrots (0.5 kg)</option>
          <option id="option2" value="7.73">Carrots (1 kg)</option>
          <option id="option3" value="14.62">Carrots (2 kg)</option>
        </select>
        
        <div class="row">
        <div id="qty" class="col-lg-5 col-md-5">
          <button type="button" value="decrease" class="btn btn-outline-dark qty-btn" onclick="doThis(this)">-</button>
          <input type="text" id="qty" value="0" class="qty input-box" name="quantity" readonly>
          <button type="button" value="increase" class="btn btn-outline-dark qty-btn" onclick="doThis(this)">+</button>
        </div>

        <div id="displayTotal" class="col-lg-7 col-md-7">
            Subtotal ($):
            <input type="text" name="subtotal" class="subtotal-box" id="" readonly>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <button type="reset" class="btn btn-outline-danger btns">Remove</button>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-12" id="addToCart">
            <button type="button" class="btn btn-dark btns" onclick="validateItem()">Add to cart</button>

          </div>
        </div>

      </form> 
   
    </div>
  </div>

  <!--Footer-->
    <?php include 'footer.php';?>

  <script type="text/javascript" src="Javascript/productDescription.js"></script>

</body>

</html>
