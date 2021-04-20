<?php

  session_start();

//   function writeToFile($filename, $object) {

//     $file = fopen($filename, "r+");

//     $x = file_get_contents($filename);

//     $temp = json_decode($x);

//     if ($object) {
//       array_push($temp, $object);
//     }

//     $i = json_encode($temp);

//     if ($i)
//       fwrite($file, $i);

//     fclose($file);
// }

include("PHP/databaseFunctions.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Signup</title>

  <!-- Bootstrap & CSS Links -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/styles-one.css">
</head>

<body>

 <!-- Navbar -->
   <?php
  include("navagationBar.php");
  ?>

  <h1 class="padding">Sign Up</h1>

  <?php

    $isInvalid = false;

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['confirmEmail'] = $_POST['confirmEmail'];

    $_SESSION['password'] = $_POST['password'];
    $_SESSION['confirmPassword'] = $_POST['verifyPassword'];

    $email = $_SESSION['email'];
    $confirmEmail = $_SESSION['confirmEmail'];
    $password = $_SESSION['password'];
    $confirmPassword = $_SESSION['confirmPassword'];

    if ($email != $confirmEmail) { // Check if both emails match
      $isInvalid = true;
      echo '<p style="color: red; margin-left: 20%;">Emails do not match.</p>';
    }
    else if ($password != $confirmPassword) { // Check if both passwords match
      $isInvalid = true;
      echo '<p style="color: red; margin-left: 20%;">Passwords do not match.</p>';
    }

    foreach ($_POST as $key => $value) {
      if (!$value && $_POST['submit'] == "Submit") { // Check for empty fields
        $isInvalid = true;
        echo '<p style="color: red; margin-left: 20%;"><br>Please fill all required fields.</p>';
        break;
      }
    }

    if ($isInvalid == false) // write to file only if signup form is complete
      writeToFile("info2.json", $_POST);  
        
?>

  <div id="sign-up" class="col-lg-12 col-md-12 col-sm-12 padding">

    <form action="" method="POST" name="myForm">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12" id="userName">
          <label for="user-name">USERNAME</label><br>
          <input type="text" id="user-name" value="" class="wide input" placeholder="Username" name="username">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12" id="fullName">
          <label for="full-name">NAME</label><br>
          <input type="text" id="full-name" value="" class="wide input" placeholder="Your name" name="name">
        </div>
      </div>

      <div class="personal-information">

        <div id="emailFirst">
        <label for="email">EMAIL</label><br>
        <input type="email" id="email" value="" name="email" class="wide input" placeholder="Your email address">
        </div>

        <div id="emailSecond">
        <label for="confirm-email">CONFIRM EMAIL</label><br>
        <input type="email" id="confirm-email" value="" name="confirmEmail" class="wide input" placeholder="Confirm email address">
        </div>

        <div id="passwordOne">
          <label for="password">PASSWORD (must contain atleast 8 characters)</label>
          <input type="password" name="Password" value="" id="password" class="wide input" placeholder="Password">
        </div>
        <div id="passwordTwo">
          <label for="confirm-password">CONFIRM PASSWORD</label>
          <input type="password" name="confirmPassword" value="" id="verifyPassword" class="wide input" placeholder="Confirm password">
        </div>
        <label for="address">ADDRESS</label>
        <input type="text" name="address" value="" class="wide input" placeholder="Your address">
      
        <label for="postal-code">POSTAL CODE</label>
        <input type="text" name="postalCode" value="" class="wide input" placeholder="Postal code">
      </div>


      <br>
  </div>

  <div class="membership-section padding">


    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        DO YOU HAVE A MEMBERSHIP CARD?

        <div class="form-check">
          <input class="form-check-input" type="radio">
          <label class="form-check-label" for="flexRadioDefault1">
            Yes, I already have a card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio">
          <label class="form-check-label" for="flexRadioDefault2">
            No, I want a membership card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio">
          <label class="form-check-label" for="flexRadioDefault2">
            I don't want a membership card
          </label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label for="member-card">ENTER CARD NUMBER</label><br>
        <input type="text" name="" value="" class="wide input" placeholder="Card number">
      </div>
    </div>

  </div>


  <div class="payment-info padding">
    <h4>PAYMENT INFORMATION</h4><br>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label for="name-on-card">NAME ON CARD</label><br>
        <input type="text" name="" value="" class="wide input" placeholder="">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label for="card-number">CARD NUMBER</label><br>
        <input type="text" name="cardNumber" value="" class="wide input" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label for="expiration-date">EXPIRATION DATE</label><br>
        <input type="text" name="expirationDate" value="" class="input" placeholder="">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label for="cvv">CVV</label><br>
        <input type="text" name="cvv" value="" class="input" placeholder="">
      </div>
    </div>
  </div>



  <div class="terms-and-conditions padding">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="">
      <label class="form-check-label" for="flexCheckDefault">
        Sign me up for the newsletter.
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="">
      <label class="form-check-label" for="flexCheckChecked">
        I would like to recieve updates and offers.
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="">
      <label class="form-check-label" for="flexCheckChecked">
        I have read and agree to all the <a href="#">Terms and Conditions</a>.
      </label>
    </div>
  </div>


  <div class="row button-section padding">

    <div class="col-lg-6 col-md-6 col-sm-12">
      <button type="reset" class="btn btn-outline-danger wide">Reset</button>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <input type="submit" class="btn btn-dark" value="Submit" name="submit">


    </div>

  </div>

  </form>

  <!--Footer-->
    <?php include 'footer.php';?>

  <script type="text/javascript" src="Javascript/signupFunctions.js"></script>

</body>

</html>
