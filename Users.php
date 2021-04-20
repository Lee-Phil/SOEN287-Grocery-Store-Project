<?php
include("PHP/databaseFunctions.php");

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
if(isset($_GET['delete'])){
    delete('info2.json',$_GET['index']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Users List</title>

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
    <link rel="stylesheet" href="CSS/Users.css">

</head>
<body>
<!--The Header of the Website-->
<?php include('navagationBar.php')?>

<!--Start of List-->

    <div class = main>
        <h1>User Database</h1>
        <ul class="list-group">
            <li class="list-group-item people headers">
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-2">
                        Username
                    </div>
                    <div class="col-2">
                        Display Name
                    </div>
                    <div class="col-3">
                        E-Mail
                    </div>
                    <div class="col-3">
                        Address
                    </div>
                    <div class="col-1 tracker">
                        
                    </div>
                </div>
            </li>

            <?php

            $arrayOfPeople = readFromFile('info2.json');
            $i=0;
            foreach($arrayOfPeople as $value){
                $fullname = $value['name'];
                $username = $value['username'];
                $email = $value['email'];
                $address = $value['address'];

                echo "<li class='list-group-item people'>
                        <div class='row'>
                            <div class='col-1'>
                                <!--<input type='checkbox' class='form-check-input userSelection' id ='selection$i' >-->
                            </div>
                            <div class='col-2 usernames'  id ='user$i'>
                                $username 
                            </div>
                            <div class='col-2'>
                                $fullname
                            </div>
                            <div class='col-3 ' style='word-wrap:break-word;'>
                                $email
                            </div>
                            <div class='col-3'>
                                $address
                            </div>
                            <div class='col-1 tracker'>
                                <a href='?delete=1&index=".$i."'><button type='button' class='btn btn-light'> <span class='material-icons'>  delete_outline </span></button> </a>
                                <a href='edituser.php?modify=1&index=".$i."'><button type='button' class='btn btn-light'><span class='material-icons'> create </span></button></a>
                            </div>
                        </div>
                    </li>";
                    $i++;
            }
            ?>
        </ul>
    </div>


<form action="edituser.php" method='POST'> 
    <!--Add/Edit/Delete Buttons-->
    <div class="AddEditDeleteButton">
        <div class="buttonPadding">
            <input type="submit" class="btn btn-outline-success" name = "addButton" value ="Add">
        </div>
    </div>
</form>

<!--Footer-->
<?php include('footer.php')?>

</body>

<!--Functionality of the Delete Button-->
<script src="Javascript/DeleteButton.js"></script>




</html>