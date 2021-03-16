// forgot password functions

function validateInput() { // called when submit is clicked
    checkEmail();
    checkPassword();
}

node0 = document.getElementById("email-section");

node1 = document.createElement("p");

node1.id = "to-be-removed-email";

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
        document.getElementById("to-be-removed-email").remove();
        document.myForm.email.classList.remove("red");
    }

}




var node3 = document.createElement("p");

function checkPassword() { // checks if password is invalid

    var node2 = document.getElementById("passwordSection");

    var input_password = document.myForm.password.value;

    node3.id = "to-be-removed";

    if (input_password == "") {
        node3.innerHTML = "Password cannot be empty.";
        document.myForm.password.classList.add("red");
        node2.appendChild(node3);
    }
    else if (input_password.length < 8) {
        node3.innerHTML = "Password is too short.";
        document.myForm.password.classList.add("red");
        node2.appendChild(node3);
    }
    else {
        document.getElementById("to-be-removed").remove();
        document.myForm.password.classList.remove("red");
    }

}
