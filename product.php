<html>

<head>
    <title><?php echo ($_GET['product'] ? $_GET['product'] : 'Product');  ?></title>
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
</head>
<body>
<?php include("navagationBar.php"); ?>
<?php
function readFromFile($filename)
  {
      $file = fopen($filename, "r+");

      $x = file_get_contents($filename);

      $temp = json_decode($x);
      fclose($file);
      return $temp;
  }
if (isset($_GET['product'])) {
    $database = readFromFile('allProducts.json');
    $i = -1;
    foreach ($database as $key => $item) {
        if ($item->name == $_GET['product'])
            $i = $key;
    }
    
    function modify($fileName, $index, $object) {
        $file = fopen($fileName, "r+");
        $temp = readFromFile($fileName);
        
        ftruncate($file, 0);
        fwrite($file, "[]");

        foreach ($temp as $key => $item) {
            if ($key == $index)
                $item = $object;
            writeToFile($fileName, $item);
        }
    }
    
    //modify("info2.json", $i, $data);


    if ($i != -1) {

    $itemName = $database[$i]->name;
    $itemImagePath = $database[$i]->imagePath;
    $itemCost = $database[$i]->price;
    $itemDescription = $database[$i]->description;
    $itemCategory = $database[$i]->category;

        echo '<div id="page-container">
    <div class = "container" id="content-wrap">
        <div>
            <br><br><br>
        </div>
        <h5> <a class="btn btn-outline-dark" href = "category.php?category='.$itemCategory.'"> &lt;  Back to '.$itemCategory.'</a> </br></h5>

        <div class="row">
            <div class = "col-lg-6">
                <img src = "' . $itemImagePath . '" alt = "'.$itemName.'" style= "height:250px;width:300px;" class="img-fluid">
            </div>

            <div class="col-lg-6">
                ' . $itemName . ' <br>
                <strong>$</strong><strong id="value">' . $itemCost . '</strong><strong> avg. each</strong> <br>
                <form action="" name="myForm">
                    <label for="Quantity">Quantity:</label>
                    <input type="number" name ="Quantity" id="Quantity" value="0" min="0" >
                </form>
                <div>
                    Subtotal ($): <input type="text" size="10" id="subtotal" value= "0"readonly />
                </div>
                <br><button type="submit" name="submit" class= "button" onclick="addToCart()" onclick="addToCart()">Add to cart</button>
                <br><button class= "button" class="button" type="button" data-toggle="collapse" data-target="#banana" aria-expanded="false" aria-controls="bananaDescription">More Description</button>
                <div class="collapse" id="banana">
                    <div class="card card-body">
                    ' . $itemDescription . '
                    </div>
                </div>
            </div>
        </div>

        <div>
            <br>
        </div>

    </div>

  

    <script type="text/javascript" src="Javascript/Subtotal1.js"></script>

';
    } else echo '</br>Product: "' . $_GET['product'] . '" does not exist in the database.</br>';
} else echo '</br>Not a valid product.</br>';
?>

<!--Footer-->
<?php include 'footer.php'; ?>

</body>
</html>