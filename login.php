<?php

  session_start(); // start the session

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>

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

    <?php
  include("navagationBar.php");
  ?>

  <div id="login">

<h1>Login</h1>


  <?php
  
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];  
    $_SESSION['submit'] = $_POST['submit'];

    $file = fopen("info2.json", "r"); // open json file to read database

    $x = file_get_contents("info2.json"); // read the file

    $temp = json_decode($x); // 

    // echo $temp[0]->Password;

    $username = $_SESSION['username']; // get username
    $password = $_SESSION['password']; // get password

    if ($_SESSION['submit'] == "Login") { // if Login button is clicked

      if ($username == "" || $password == "") { // if fields are empty display error message
        echo '<br><p style="color: red;">Please fill all required fields.</p>';
      }
      else if ($username == "admin" && $password == "admin") { // if user is admin display link to ProductList
        echo '<br><p style="color: green;">Welcome, Admin. Go to <a href="ProductList.php">Product List</a>.</p>';
      }
      else {

        $userExists = false; // variable to check if user exists in database

        for ($i = 0; $i < count($temp); $i++) { // check if username and password exist
          if ($temp[$i]->username == $username && $temp[$i]->password == $password) {
            echo '<br><p style="color: green;">Login successful!</p>';
            $userExists = true;
            $_SESSION['userExists'] = true; // to be used for checkout button
            break;
          }         
        }
 
        if ($userExists == false) { // if user does not exist
          echo '<br><p style="color: red;">Login unsuccessful. Please create an account <a href="signup.php">here</a>.<p>';
        }
      }
    
    }

    fclose($file); // close file
  
  ?>


<div class="middle">
      <form action="" name="myForm" method='post'>
            <div id="username">
              <label for="username">USERNAME</label><br>
              <input type="username" id="username" value="" name="username" class="wide input" placeholder="Your username address">
            </div>

            <div id="password">
              <label for="password">PASSWORD</label><br>
              <input type="password" id="password" value="" name="password" class="wide input" placeholder="Your password">
            </div>

            <div class="row forgot">
                <div class="col">

                    <input type="checkbox" name="" id="">
                    <label for="">Remember Me</label>
                </div>
                <div class="col">
                    <a href="forgot-password.php">Forgot Password</a>
                </div>
            </div>

            <div class="row login-btn">
                <div class="col">
                    <button type="reset" class="btn btn-outline-danger ">Reset</button>

                </div>
                <div class="col">
                    <input type="submit" class="btn btn-dark" value="Login" name="submit"><br>
                </div>
            </div>

            <div class="signup-link">
            <a href="signup.php" >Don't have an account yet?</a>
            </div>
        </div>
      </form>
    </div>
  </div>

  <!--Footer-->
    <?php include 'footer.php';?>

  <script type="text/javascript" src="Javascript/loginFunctions.js"></script>

</body>

</html>
