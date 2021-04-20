<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add/Edit Product</title>

        <!--Bootstrap Stuff-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS/stylesthree.css">


    </head>
    <body>
    <!--The Navagation BAr of the Website-->
    <?php include 'navagationBar.php';?>

    <!--Start of Form-->
    <div class="editProduct">
        <h1 class="EditAddHeader">Edit/Add Product</h1>
        <form class="productInformation" action="ProductList.php">

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Product Name</label>
                        <input type="productName" class="form-control" id="" placeholder="Product Name">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label >Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>SKU</label>
                        <input type="text" class="form-control" id="" placeholder="SKU">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Price</label>
                        <input type="text" class="form-control" id="Price" placeholder="$0.00">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                        <label>Quantity</label>
                        <input type="text" class="form-control" id="Quantity" placeholder="0">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                <label class="form-label" for="ProductPicture">Upload a picture</label>
                <input type="file" class="form-control" id="ProductPicture" />
                    </div>
                </div>

                <div class="buttonSubmitPadding">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <button type="cancel" class="btn btn-outline-danger">Cancel</button>
                </div>
        </form>
    </div>

    <!--Footer-->
    <?php include 'footer.php';?>

    </body>
</html>