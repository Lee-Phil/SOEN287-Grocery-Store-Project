// Login functions

function validateInput() { // called when submit is clicked
    checkEmail();
    checkPassword();
}

var node0 = document.getElementById("email");
var node1 = document.createElement("p");

node1.id = "warning";

function checkEmail() { // checks if email is empty or invalid

    var input_email = document.myForm.email.value;

    if (input_email == "") {
        node1.innerHTML = "Email cannot be empty.";
        document.myForm.email.classList.add("red");
        node0.appendChild(node1);
    }

    else if (input_email.search(/\w+@\w+\.\w+/) == -1) {

        node1.innerHTML = "Invalid Email.";
        document.myForm.email.classList.add("red");
        node0.appendChild(node1);
    }


    else {
        node0.removeChild(document.getElementById("warning"));
        document.myForm.email.classList.remove("red");
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
