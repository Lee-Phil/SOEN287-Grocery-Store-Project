<?php
session_start();
if ($_POST["submit"] && in_array($_POST['itemName'], $_SESSION['itemNames'])) {
    echo 'This item is already in the cart.';
  }
  else if ($_POST["submit"] && $_POST["subtotal"] == 0) {
    echo 'Please select a valid quantity.';
  }
  
  if ($_POST["submit"] && $_POST["subtotal"] != 0 && !in_array($_POST['itemName'], $_SESSION['itemNames'])) {
    $temp = array($_POST['itemName'], $_POST["cost"], $_POST["quantity"]);
    array_push($_SESSION['items'], $temp);
    array_push($_SESSION['itemNames'], $_POST['itemName']);                
    
    echo 'Item has been added to the cart.';
  }
?>