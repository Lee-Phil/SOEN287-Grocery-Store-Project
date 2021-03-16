//This function is to check whether one of the fields are empty in the contact us form
//This will also check if the order number follow the correct format

function submitForm(){
    //Get each variable for each field
    var username = document.getElementById("username");
    var itemname = document.getElementById("itemname");
    var ordernumber = document.getElementById("ordernumber");
    var pattern = /^\#[0-9]{5}[A-Z]{2}/gm; //The pattern only follows #12345AB
    
    var questions = document.getElementById("questions");

    if (username.value == ''){ //checks if the username is empty
        alert("The username is empty, please enter a username");
    }

    else if (itemname.value == ''){ //checks if the itemname is empty
        alert("The item name is empty, please enter an item name");
    }

    else if (ordernumber.value == ''){ //checks if ordernumber is empty
        alert("The order number is empty, please enter an order number");
    }

    else if(ordernumber.value.length > 8 || !pattern.test(ordernumber.value)){ //Checks if in the correct format and less than 9 characters
        alert("Not good order number. Please make sure to follow the format")
    }
    else if (questions.value == ''){ //check if question field is empty
        alert("The question box is empty, please enter your questions");
    }

    else { //if everything is good, will send information
        alert("Your inquiry has been sent to us. Please allow 3-5 business days to respond.")
    }
}