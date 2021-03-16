// Define patterns for all fields.

let emailPattern = /^(\w+@[a-zA-Z]+\.[a-zA-Z]+)$/g;

// Password must be at least 5 characters
let passwordPattern = /^.{5,}$/g

let namePattern = /^[A-Z][a-zA-Z]+$/g;

let cardNumberPattern = /^(\d{4} ?){4}$/g;
let cvvPattern = /^\d{3}$/g;
let yearPattern = /^(\d{2})$|^(20\d{2,})$/g	

let addressPattern = /^\d+( \w+)+$/g;
let cityPattern = /^[a-zA-Z]+$/g;
let provincePattern = /^[a-zA-Z]+$/g;
let postalCodePattern = /^[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d$/g;

// Create array containing objects made up of the field id and it's pattern.
let inputArr = [
{id: "email", pattern: emailPattern},
{id: "password", pattern: passwordPattern},
{id: "firstname", pattern: namePattern},
{id: "lastname", pattern: namePattern},
{id: "cardnumber", pattern: cardNumberPattern},
{id: "cvv", pattern: cvvPattern},
{id: "year", pattern: yearPattern},
{id: "address", pattern: addressPattern},
{id: "city", pattern: cityPattern},
{id: "province", pattern: provincePattern},
{id: "postalcode", pattern: postalCodePattern}
]



// Iterate through all inputs in the array and validate them using the id and pattern.
function validateInput() {
inputArr.forEach((input) => { 
    let element = document.getElementById(input.id)
    element.classList.remove("is-valid");
    element.classList.remove("is-invalid");
    const pattern = new RegExp(input.pattern.source, "g")
    if (!pattern.test(element.value)) {
        element.classList.remove("is-valid");
        element.classList.add("is-invalid");
    } else {
        element.classList.add("is-valid");
        element.classList.remove("is-invalid");
    }
});
}

document.getElementById("save").addEventListener("click", validateInput)