<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add Product</title>

        <!--Bootstrap Stuff-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS/AddProduct.css">


    </head>
    <body>
    <!--The Navagation BAr of the Website-->
    <?php include 'navagationBar.php';?>

    <!--Start of Form-->
    <div class="editProduct">
        <h1 class="EditAddHeader">Add Product</h1>
        <form class="productInformation" action="ProductList.php" method='POST'>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Product Name</label>
                        <input type="productName" class="form-control" id="name" name ="name" placeholder="Product Name"  >
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label >Description</label>
                        <textarea class="form-control" rows="3" name ="description"></textarea>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Category</label>
                        <input type="text" class="form-control" id="Category" placeholder="Category" name="category">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Price</label>
                        <input type="text" class="form-control" id="Price" placeholder="$0.00" name="price">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Quantity</label>
                        <input type="text" class="form-control" id="Quantity" placeholder="0" name="quantity" >
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                <label class="form-label" for="ProductPicture">Upload a picture</label>
                <input type="file" class="form-control" name="imagePath" id="ProductPicture" />
                    </div>
                </div>

                <div class="buttonSubmitPadding">
                    <button type="submit" class="btn btn-dark" name ='submit_addition' value = "submitted" >Save</button>
                    <button type="cancel" class="btn btn-outline-danger" name='cancel' value = "Canceled">Cancel</button>
                </div>
        </form>
    </div>

    <!--Footer-->
    <?php include 'footer.php';?>

    </body>
</html>