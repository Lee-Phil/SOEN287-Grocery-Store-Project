<?php
  
  if ($_POST["submit"] && in_array($_POST['itemName'], $_SESSION['itemNames'])) {
    echo '<br><br><p style="color: red;">This item is already in the cart.</p>';
  }
  else if ($_POST["submit"] && $_POST["subtotal"] == 0) {
    echo '<br><br><p style="color: red;">Please select a valid quantity.</p>';
  }
  
  if ($_POST["submit"] && $_POST["subtotal"] != 0 && !in_array($_POST['itemName'], $_SESSION['itemNames'])) {
    $temp = array($_POST['itemName'], $_POST["cost"], $_POST["quantity"]);
    array_push($_SESSION['items'], $temp);
    array_push($_SESSION['itemNames'], $_POST['itemName']);                
  }
                
?>