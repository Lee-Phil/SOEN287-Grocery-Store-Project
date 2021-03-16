// Signup functions

function validateInput() { // called when submit is clicked
  checkEmails();
  checkPasswords();
  verifyEmail();
  verifySecondEmail();
  firstPassword();
  secondPassword();
  checkFirstName();
  checkLastName();
}

// Email
var node0 = document.getElementById("emailFirst");
var node1 = document.createElement("p");

node1.id = "warningOne";

// Confirm Email
var node2 = document.getElementById("emailSecond");
var node3 = document.createElement("p");

node3.id = "warningTwo";

function verifyEmail() { // checks if email is empty or invalid
  
  var email = document.getElementById("email").value;

  var result = email.search(/\w+@\w+\.\w+/);

  if (result == -1) {
    node1.innerHTML = "Please enter a valid email.";
    node0.appendChild(node1);
    document.getElementById("email").classList.add("red");
  }
  else {
    node0.removeChild(document.getElementById("warningOne"));
    document.getElementById("email").classList.remove("red");
  }
  
}

function verifySecondEmail() { // checks if second email is empty or invalid
  
  var confirmEmail = document.getElementById("confirm-email").value;

  var result = confirmEmail.search(/\w+@\w+\.\w+/);

  if (result == -1) {
    node3.innerHTML = "Please enter a valid email.";
    node2.appendChild(node3);    
    document.getElementById("confirm-email").classList.add("red");
  }
  else {
    node2.removeChild(document.getElementById("warningTwo"));
    document.getElementById("confirm-email").classList.remove("red");
  }
  
}

function checkEmails() { // checks if emails are equal

  if (!(document.getElementById("email").value == document.getElementById("confirm-email").value)) {
    alert("Emails are not the same.");
    document.getElementById("email").classList.add("red");
    document.getElementById("confirm-email").classList.add("red");
  }

  else {
    document.getElementById("email").classList.remove("red");
    document.getElementById("confirm-email").classList.remove("red");
  }

}

// Password

node4 = document.getElementById("passwordOne");
node5 = document.createElement("p");
node5.id = "passwordFirst";

// Confirm password

node6 = document.getElementById("passwordTwo");
node7 = document.createElement("p");
node7.id = "passwordSecond";

function firstPassword() { // checks if password is valid

  var password = document.getElementById("password").value;
 
  if(password == "") {
    node5.innerHTML = "Please enter a valid password.";
    node4.appendChild(node5);
    document.getElementById("password").classList.add("red");
  }

  else if(password.length < 8 && password.length != 0) {
    node5.innerHTML = "Password is too short.";
    document.getElementById("password").classList.add("red");
  }
  else {
    node4.removeChild(document.getElementById("passwordFirst"));
    document.getElementById("password").classList.remove("red");
  }

}

function secondPassword() { // checks if password is valid

  var verifyPassword = document.getElementById("verifyPassword").value;
  
  if(verifyPassword == "") {
    node7.innerHTML = "Please enter a valid password.";
    document.getElementById("verifyPassword").classList.add("red");
    node6.appendChild(node7);
  }
  else if (verifyPassword.length < 8 && verifyPassword.length != 0) {
    node7.innerHTML = "Password is too short."
    document.getElementById("verifyPassword").classList.add("red");
  }
  else {
    node6.removeChild(document.getElementById("passwordSecond"));

    document.getElementById("verifyPassword").classList.remove("red");
  }

}

function checkPasswords() { // checks if passwords are equal

  if (document.getElementById("password").value != document.getElementById("verifyPassword").value) {
    alert("Passwords are incorrect.");
    document.getElementById("password").classList.add("red");
    document.getElementById("verifyPassword").classList.add("red");
  }

}

// validate first name

var nodeA = document.getElementById("firstName");

var nodeB = document.createElement("p");

nodeB.id = "warning";

function checkFirstName() { // checks if first name is empty

  var name = document.getElementById("first-name").value;

  if (name == "") {

    nodeB.innerHTML = "Please enter your first name.";
    nodeA.append(nodeB);
    document.getElementById("first-name").classList.add("red");

  }

  else {
    document.getElementById("firstName").removeChild(document.getElementById("warning"));
    document.getElementById("first-name").classList.remove("red");
  }

}

// validate last name

var nodeC = document.getElementById("lastName");

var nodeD = document.createElement("p");

nodeD.id = "warning";

function checkLastName() { // checks if last name is empty


  var name = document.getElementById("last-name").value;

  if (name == "") {

    nodeD.innerHTML = "Please enter your last name.";
    nodeC.append(nodeD);
    document.getElementById("last-name").classList.add("red");

  }

  else {
    document.getElementById("lastName").removeChild(document.getElementById("warning"));
    document.getElementById("last-name").classList.remove("red");
  }

}
