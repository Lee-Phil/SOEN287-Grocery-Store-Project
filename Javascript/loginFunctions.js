// Login functions


document.myForm.username.onblur = checkUsername;
document.myForm.password.onblur = checkPassword;

var node0 = document.getElementById("username");
var node1 = document.createElement("p");

node1.id = "warning";

function checkUsername() { // checks if username is empty or invalid

    var input = document.myForm.username.value;

    if (input == "") {
        node1.innerHTML = "Username cannot be empty.";
        document.myForm.username.classList.add("red");
        node0.appendChild(node1);
    }

    else {
        node0.removeChild(document.getElementById("warning"));
        document.myForm.username.classList.remove("red");
    }

}

var node5 = document.getElementById("password");
var node6 = document.createElement("p");

node6.id = "passwordIncorrect";

function checkPassword() { // checks if password is empty

    var input_password = document.myForm.password.value;
   
    if (input_password == "") {
        node6.innerHTML = "Password cannot be empty.";
        node5.appendChild(node6);
        document.myForm.password.classList.add("red");
    }
    else {
        node5.removeChild(document.getElementById("passwordIncorrect"));
        document.myForm.password.classList.remove("red");
    }

}
