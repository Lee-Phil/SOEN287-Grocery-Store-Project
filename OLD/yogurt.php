<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Yogurt</title>
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
  <script type="text/javascript" src="Javascript/subTotals2.js"></script>
</head>

<body>
  
  <?php include( 'navagationBar.php')?>
  
  <div id="page-container">
    <div class = "container" id="content-wrap">
      <div>
        <br><br><br>
      </div>
      <h5> <a class="btn btn-outline-dark" href = "dairyeggs.php"> &lt;  Back to Dairy and Eggs</a> <br></h5>
      <div class="row">
      <div class = "col-lg-6">
          <img src = "Images/yogurt.jpg" alt = "yogurt" style= "height:250px;width:300px;" class="img-fluid">
      </div>
  
      <div class="col-lg-6">
          Yogurt <br>
          <strong >$1.99 per container (750 mL) </strong> <br>
          <form action="" name="yogurt" onclick="calculateYogurtSubtotal()">
            <label for="Quantity">Quantity:</label> 
            <input type="number" name="Quantity" value="0" min="0" >
              <br>
            <label for="Subtotal">Subtotal ($):</label>
            <input type="text" name="subTotal" id="" readonly>
           </form>       
  
              <br><button class= "button" onclick="checkYogurtQuantity()">Add to cart</button>
              <br><button class= "button" type="button" data-toggle="collapse" data-target="#yogurtDescription" aria-expanded="false" aria-controls="yogurtDescription">More Description</button>
              <div class="collapse" id="yogurtDescription">
                <div class="card card-body">
                  Enjoy the delicate sweetness of vanilla and the juiciness of ruby-red strawberries 100% Natural Source Ingredients. Made with 100% Canadian milk.
                </div>
              </div>
      </div>
  
      </div>
      <div>
        <br>
      </div>
    </div>
  

  </div>
  
      <?php include 'footer.php'?>
  </body>
  
  </html>