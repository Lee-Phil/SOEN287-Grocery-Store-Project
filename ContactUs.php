<?php
include "databaseFunctions.php";
session_start();
?>

<!--This page allows users to submit a form with their questions. Must check if each field is empty and if order number in correct format-->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/styles-one.css">


  <script type="text/javascript" src="Javascript/ContactUs.js"></script>
</head>

<body>
  <!--This is the navbar which holds the menu that the user can navigate through-->
  <div id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Online Grocery Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Aisles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="fruits.php">Fruits</a>
              <a class="dropdown-item" href="vegetables.php">Vegetables</a>
              <a class="dropdown-item" href="grains.php">Grains</a>
              <a class="dropdown-item" href="dairyeggs.php">Dairy & Eggs</a>
              <a class="dropdown-item" href="meats.php">Meats & Poultry</a>
              <a class="dropdown-item" href="snacks.php">Snacks</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ProductList.php">All Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Users.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orderlist.php">Orders</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>




  <div class="main-section">
    <div class="title-and-link margin">
      <h1>Contact Us</h1>
    </div>

    <!--The main form that the user can fill out-->
    <form action="ContactUs.php" method="post">
      <div class="form-group row">
        <div>* Required Fields</div>
      </div>

      <div class="form-group row">

        <label for="username" class="col-sm-2 col-form-label">*Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="itemname" class="col-sm-2 col-form-label">*Item Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="itemname" name="itemname" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="orderNumber" class="col-sm-2 col-form-label">*Order Number (format #12345AB)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="ordernumber" name="ordernumber" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">*Questions</label>
        <div class="col-sm-10">
          <textarea class="data" name="questions" rows="4" id="questions" name="questions" required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" class="btn btn-dark" onclick="" />
        </div>

        <?php
        $title = "Thank you for submitting your concerns.";
        if (empty($_POST["username"]) || empty($_POST["itemname"]) || empty($_POST["ordernumber"]) || empty($_POST['questions'])) {
          $error = TRUE;
          $title = "Please fill out all fields with  proper responses";
        }


        ?>
        <br>
        <!--Double check if this code works with file aka check filename-->
        <?php

        $file = fopen("info2.json", "r+");

        $fileContents = file_get_contents("info2.json");

        $userinfoArr = json_decode($fileContents);



        $usernameExists = False;
        for ($i = 0; $i < count($userinfoArr); $i++) {
          if ($userinfoArr[$i]->username == $_POST['username']) {
            $usernameExists = True;
            $orderDate = $userinfoArr[$i]->orders[0]->date; //stores the date of the order from the user
            $totalAmount = $userinfoArr[$i]->orders[0]->total;
            $totalAmount = number_format((float)$totalAmount, 2, '.', ''); //The total amount for the order, rounded to two decimals
            break;
          }
        }

        fclose($file);
        ?>

        <h1><?php echo $title; ?></h1>

        <?php if (isset($error)) { ?>
          <p>Unfortuanetly, the form is incomplete.</p>
          <p>Please fill out all the required entries. Thank you.</p>

        <?php } else if (!preg_match("/^\#[0-9]{5}[A-Z]{2}/", $_POST['ordernumber'])) { ?>
          <p> Unfortuanetly, the order number:
            <?php echo $_POST['ordernumber']; ?>
            is not in the correct format. Please fill out the form again.

          </p>

        <?php } else if (!$usernameExists) { ?>
          <p> Unfortuanetly, the username:
            <?php echo $_POST['username']; ?>
            entered does not exist yet. <a class="nav-link" href="signup.php">Sign up today!</a>

          </p>

        <?php } else { ?>
          <p>Hello
            <?php echo $_POST["username"]; ?>
            , your inquiry has been sent. Please allow 3-5 business days for a reply.
          <div class="container">
            <div class="row">
              <h1>Recent orders</h1>
            </div>

            <div class="row">
              <table id="order-table">
                <tr>
                  <th>Order Date</th>
                  <th>Order Summary</th>
                  <th>Order Total</th>

                </tr>
                <tr id="test-order">
                  <td id="date"><?php echo $orderDate; ?></td>
                  <td>
                    <?php

                    for ($i = 0; $i < count($userinfoArr); $i++) {
                      if ($userinfoArr[$i]->username == $_POST['username']) {
                        $usernameExists = True;
                        $itemArr =  $userinfoArr[$i]->orders[0]->items;
                        for ($j = 0; $j < count($itemArr); $j++) {
                          echo "<ul id=\"summary\" class=\"list-group\">";

                          $productName = ($userinfoArr[$i]->orders[0]->items[$j]->name);
                          echo $productName . " X ";
                          $quantityArr = ($userinfoArr[$i]->orders[0]->items[$j]->quantity);
                          echo $quantityArr . "</ul>";;
                        }
                        break;
                      }
                    }
                    ?>
                  </td>
                  <td id="total" class="total">
                    <?php echo '$' . $totalAmount; ?>
                  </td>
                  </p>

                <?php } ?>

            </div>
    </form>





    </tr>
    </table>
  </div>

  </div>



  <!--The footer section-->
  <div id="footer">
    <div class="row">
      <div class="col-auto footer-item">
        <a href="#">About Us</a>
      </div>
      <div class="col-auto footer-item">
        <a href="#">Online Store</a>
      </div>
      <div class="col-auto footer-item">
        <a href="#">Contact Us</a>
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