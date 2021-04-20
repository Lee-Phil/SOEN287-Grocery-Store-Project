<?php
//Appends to a file
function writeToFile($filename, $object) {
    $file = fopen($filename, "r+");
    $x = file_get_contents($filename);
    $temp = json_decode($x);
    if ($object) {
      array_push($temp, $object);
    }
    $i = json_encode($temp);
    fwrite($file, $i);
    fclose($file);
}

//returns an array of whatever is in the json file
function readFromFile($filename){
    $file = fopen($filename, "r+");
    $x = file_get_contents($filename);
    $temp = json_decode($x);
    fclose($file);
    return $temp;
    
}
//Edits the product
function modifyProduct($filename,$index){
    $info_edited = $_POST;
    $file = fopen($filename, "r+");
    $temp = readFromFile($filename);
    if(count($temp)>$index){
        $temp[$index]->price = $info_edited['price'];
        $temp[$index]->name = $info_edited['name'];
        $temp[$index]->description = $info_edited['description'];
        $temp[$index]->imagePath = $info_edited['imagePath'];
        $temp[$index]->category = $info_edited['category'];
        $temp[$index]->quantity = $info_edited['quantity'];
    }
    ftruncate($file,0);
    fwrite($file,"[]");
    fclose($file);
    foreach($temp as $value){
        writeToFile($filename,$value);
    }
}

//deletes from the filename at an index
function delete($filename,$index){
    $file = fopen($filename, "r+");
    $temp = readFromFile($filename);
    if(count($temp)>$index){
        unset($temp[$index]);
    }
    ftruncate($file,0);
    fwrite($file,"[]");
    fclose($file);
    
    foreach($temp as $value){
        writeToFile($filename,$value);
    }
}

//Checks if the delete button has been pressed
if(isset($_GET['delete'])){
    delete('allProducts.json',$_GET['index']);
}

//Checks if the edit has been made
if(isset($_POST['submit_edit'])){
    modifyProduct('allProducts.json',$_POST['submit_edit']);
    
}

//Add to the list
if(isset($_POST['submit_addition'])){
    addToList('allProducts.json',$_POST);
}
function addToList($filename,$newProduct){
    $file = fopen($filename, "r+");
    unset($newProduct['submit_addition']);
    $temp = readFromFile($filename);
    array_push($temp,$newProduct);
    ftruncate($file,0);
    fwrite($file,"[]");
    fclose($file);
    foreach($temp as $value){
        writeToFile($filename,$value);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product List</title>

    <!--Bootstrap Stuff-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/ProductList.css">

    
    <!--Functionality of the Delete Button-->
    <script src="Javascript/DeleteButton.js"></script>


</head>
<body>
<!--The Header of the Website-->
   <?php include("navagationBar.php");?>

    <!--Start of List-->
    <div class = main>
        <h1>Product List</h1>
        <ul class="list-group">
            <li class="list-group-item products headers">
                <div class="row">

                    <div class="col-2">
                        Product
                    </div>
                    <div class="col-3">
                        Category
                    </div>
                    <div class="col-3">
                        Price
                    </div>
                    <div class="col-3">
                        Quantity
                    </div>
                    <div class="col-1">
                        
                    </div>
                </div>
            </li>
            <?php
                $arrayOfProducts = readFromFile('allProducts.json');

                $i=0;

                foreach($arrayOfProducts as $value){
                    $productName = $value->name;
                    $price = $value->price;
                    $category = $value->category;
                    $quantity = $value->quantity;

                    echo "<li class='list-group-item products'>
                        <div class='row'>
                            <div class='col-2 productName' style='word-wrap:break-word;'>
                                $productName
                            </div>
                            <div class='col-3 category'>
                                $category
                            </div>
                            <div class='col-3 price'>
                                $price
                            </div>
                            <div class='col-3 quantity'>
                                $quantity
                            </div>
                            <div class='col-1 buttns'>
                                <a href='?delete=1&index=".$i."'><button class='btn btn-light'> <span class='material-icons'>  delete_outline </span></button> </a>
                                <a href='EditProduct.php?edit_product=1&index=".$i."'><button class='btn btn-light'><span class='material-icons'> create </span></button></a>
                            </div>
                        </div>
                        </li>";
                        $i++;
                }
            ?>
        </ul>
    </div>

    <!--Add/Edit/Delete Buttons-->
    <div class="buttonPadding">
        <a href = "AddProduct.php" ><button type="button" class="btn btn-outline-success">Add</button></a>
     </div>

   <!--Footer-->
    <?php include 'footer.php';?>

</body>
</html>