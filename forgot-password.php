<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Forgot Password</title>
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


  <div id="forgotPassword">

    <h1>Forgot password</h1>
    <div class="middle">
          <form action="" name="myForm">
                <div id="email-section">
                  <label for="email">EMAIL</label><br>
                  <input type="email" id="email" value="" name="email" class="wide input" placeholder="Your email address">
                </div>
    
                <div id="passwordSection">
                  <label for="password" class="new-password">NEW PASSWORD (must contain atleast 8 characters)</label><br>
                  <input type="password" id="password" value="" name="password" class="wide input" placeholder="Your password">
                </div>

                <div id="submit" class="row">
                  <div class="col">                  
                    <button type="reset" class="btn btn-outline-danger btn-submit">Reset</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-dark btn-submit" onclick="validateInput()">Submit</button><br>
                  </div>
                </div> 
          </form>
        </div>
      </div>

 <!--Footer-->
    <?php include 'footer.php';?>
  </div>

  <script type="text/javascript" src="Javascript/forgotPassword.js"></script>
</body>

</html>
