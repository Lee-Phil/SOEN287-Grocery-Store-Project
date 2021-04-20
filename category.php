<html>

<head>
    <title><?php echo($_GET['category'] ? $_GET['category'] : 'Category'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Grocery.css">

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
if (isset($_GET['category'])) {
    $database = readFromFile('allProducts.json');

    $i = -1;
    foreach ($database as $key => $item) {
        if ($item->category == $_GET['category'])
            $i = $key;
    }


    if ($i != -1) {

        echo '<div id="page-container">
  <div id="content-wrap">

    <h1 class="header" style="font-size:5vw;"> ' . $_GET['category'] . '  </h1>



    <div class= "products table-responsive-xs table-responsive-sm table-responsive-md">
        <table class="table">
        ';
        foreach ($database as $key => $item) {
            if ($item->category == $_GET['category'])
                echo '<tr style="outline: thin solid">
            <td> <a href = "product.php?product=' . $item->name . '"><img src = "' . $item->imagePath . '" alt = "' . $item->name . '"></a></td>
            <td  style="vertical-align: text-top; width: 100%">
              <div style="font-size:5vw; text-align:left;">' . $item->name . '</div>
            </td>
          </tr>';
        }
        echo '</table>
    </div>';

    } else echo '</br>Category: "' . $_GET['category'] . '" does not exist in the database.</br>';
} else echo '</br>Not a valid category.</br>';
?>

<!--Footer-->
<?php include 'footer.php'; ?>

</body>
</html>