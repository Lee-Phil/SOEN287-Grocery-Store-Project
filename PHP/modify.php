  <?php
session_start();

  print_r($_SESSION['items']);

  if(isset($_POST['delete'])) {
    $toBeDeleated = $_POST['delete']; // $toBeDeleated is the value of the delete button which is the same as index of that item in array
    unset($_SESSION['itemNames'][$toBeDeleated]);
    unset($_SESSION['items'][$toBeDeleated]);
  }


  if (!isset($_SESSION['itemNames']))
      $_SESSION['itemNames'] = array();

  if (!isset($_SESSION['items'])) {
      $_SESSION['items'] = array();
  }


$i = 0;

foreach ($_SESSION['items'] as $key => $value) {

  print '<form method="post" action="">';
  
  print 
  '<li class="list-group-item" id="potatoes">
    <div class="row">
      <div class="col-lg-4 col-md-4 item">';
       
  print $value[0];

  print '</div>
      <div class="col-lg-8 col-md-8 buttons">';
    
        print '<button style="margin-left: 5px; width: 40px;" type="button" class="btn btn-outline-dark padding-left" name="-" value="';
        echo $i;
        print '" onclick="">-</button>';
        
        print '<input style="margin-left: 5px;" readonly name="qty" type="text" class="qty" value="'; echo $value[2];

        print '">';
        
        print '<button style="margin-left: 5px;  width: 40px;" type="button" class="btn btn-outline-dark" value="increase" name="-" onclick="">+</button>';

        
      print '<button type="submit" class="btn btn-outline-danger" style="margin-left: 5px;" onclick="" value="';

        echo $i;
        
        print '" name="delete">Delete</button>
      </div>
    </div>
  </li>'; 

  print "</form>";

  $i++;

}








?>