function deleteUser(){
    var listOfItems = document.getElementsByClassName("userSelection");
    var theEntireList = document.getElementsByClassName("list-group");
    var itemsToDelete = [];

    for(var i in listOfItems){
        if (listOfItems[i].checked){
            var itemToBeDeleted = listOfItems[i].parentElement.parentElement.parentElement;
            itemsToDelete.push(itemToBeDeleted);
        }
    }
    for(var i in itemsToDelete){
        theEntireList[0].removeChild(itemsToDelete[i]);
    }
}

function deleteProduct(){
    var listOfItems = document.getElementsByClassName("form-check-input");
    var theEntireList = document.getElementsByClassName("list-group");
    var itemsToDelete = [];

    for(var i in listOfItems){
        if (listOfItems[i].checked){
            var itemToBeDeleted = listOfItems[i].parentElement.parentElement.parentElement;
            itemsToDelete.push(itemToBeDeleted);
        }
    }
    for(var i in itemsToDelete){
        theEntireList[0].removeChild(itemsToDelete[i]);
    }
}