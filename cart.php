<?php

  // there are two array - one for the itemName, cost and quantity list and one to check if the item is already added to cart

  session_start(); // start session

  if(isset($_POST['delete'])) { // deletes item from cart
    $toBeDeleated = $_POST['delete']; // gets the value of the name="delete" which is same as index of that item in the items array
    unset($_SESSION['itemNames'][$toBeDeleated]); // remove that item to be deleted from the main array
    unset($_SESSION['items'][$toBeDeleated]); // remove the item to be deleted from second array
  }

  if (isset($_POST['minus'])) {
    $toBeDecreased = $_POST['minus']; // get the key of element to be decreased (key is the value assigned to that button)
    if ($_SESSION['items'][$toBeDecreased][2] > 1)
      $_SESSION['items'][$toBeDecreased][2]--;
  }

  if (isset($_POST['add'])) {
    $toBeIncreased = $_POST['add']; // get the key of element to be increased
    $_SESSION['items'][$toBeIncreased][2]++;
  }

  if (!isset($_SESSION['itemNames']))
      $_SESSION['itemNames'] = array(); // array to store [0] itemName, [1] cost and [2] quantity

  if (!isset($_SESSION['items'])) {
      $_SESSION['items'] = array(); // array to store only itemNames
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Shopping Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/styles-three.css">
</head>

<body>

  <!-- Navbar -->
    <?php
  include("navagationBar.php");
  ?>

  <div class="main-section">
    <div class="row">
      <h1>Your cart</h1>
      <div class="cart col-lg-6 col-md-12">

        <div class="list-group">

<?php

    foreach ($_SESSION['items'] as $key => $value) { // foreach item in the items array print the html list row

      print '<form method="post" action="">';
      
      print 
      '<li class="list-group-item" id="potatoes">
        <div class="row">
          <div class="col-lg-4 col-md-4 item">';
            
      print $value[0]; // print the item name

      print '</div>
          <div class="col-lg-8 col-md-8 buttons">';
        
      print '<button style="margin-left: 5px; width: 40px;" type="submit" class="btn btn-outline-dark padding-left" name="minus" value="';

      echo $key; // assign the index of the item as the value of +/- and delete btns
      
      print '" onclick="">-</button>';
            
      print '<input style="margin-left: 5px;" readonly name="qty" type="text" class="qty" value="'; echo $value[2];

      print '">';
            
      print '<button style="margin-left: 5px;  width: 40px;" type="submit" class="btn btn-outline-dark" name="add" value="';

      echo $key; // assign the index of the item as the value of +/- and delete btns
      
      print '" onclick="">+</button>';

      print '<button type="submit" class="btn btn-outline-danger" style="margin-left: 5px;" onclick="" value="';

      echo $key; // assign the index of the item as the value of +/- and delete btns
            
      print '" name="delete">Delete</button>
          </div>
        </div>
      </li>'; 

      print "</form>";

    }
        
?>

        </div>
      </div>

      <div class="summary col-lg-6 col-md-12">
        <p><b>Summary</b></p>
        <table class="table">
          <tr>
            <th>Item</th>
            <th></th>
            <th>Rate</th>
            <th>Total</th>
          </tr>


       
<?php

foreach ($_SESSION['items'] as $value) { // print each item in summary

    print '<tr>
    <td>';

    echo $value[0]; // item name
    
    print '</td>
    <th> </th>
    <td class="summaryItem">';
    
    echo "$";
    echo $value[1]; // rate

    print '</td>
    <td class="summaryItem">';
    
    echo "$";
    echo $value[1]*$value[2]; // calculate price of that item = rate * qty

    print '</td>
    </tr>';

}

?>

</table>

<?php

  $subtotal = 0;

  foreach($_SESSION["items"] as $value) {
    $cost = $value[1];
    $quantity =  $value[2];
    $price = $cost * $quantity;
    $subtotal += $price; // add the price of all items to calculate overall subtotal
  }

  $total = $subtotal + ($subtotal*5/100) + ($subtotal*9.9/100); // calculate total after adding QST and GST

  echo "Subtotal: $";
  echo $subtotal; // print subtotal on page
  echo "<br>QST: 5%<br>";
  echo "GST: 9.9%<br><br>";
  echo "<b>Total: $";
  echo round($total, 2); // round the total to 2 decimal places and display it
  echo '</b>';

?>

        <div class="row final-btns">
          <div class="col continue">
            <a href="index.php"><button type="button" class="btn btn-outline-dark">Continue shopping</button></a>
          </div>
          <div class="col">
            <a href="#"><button type="button" class="btn btn-dark">Checkout</button></a>
          </div>
        </div>
      </div>


    </div>

  </div>
  </div>
  
  <br><br>

 <!--Footer-->
    <?php include 'footer.php';?>

  
  <script type="text/javascript" src="Javascript/cart.js"></script>

</body>

</html>
