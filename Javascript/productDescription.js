// product description pages

var quantity = parseFloat(document.myForm.quantity.value);

function changeQuantity(node) { // increase or decrease quantity

    var operand = node.value;
    
    if (operand === "increase") {
        quantity += 1;
    }
    else if (operand === "decrease") {
        if (quantity > 0) 
            quantity -= 1;
    }

    if (quantity >= 0) {
        document.myForm.quantity.value = quantity;
    }
}

function displayTotal() { // calculates subtotal and displays it

    var price = document.getElementById("size").value;
    var quantity = document.myForm.quantity.value;

    var subtotal = price * quantity;

    document.myForm.subtotal.value = subtotal;

}

function doThis(node) {
    changeQuantity(node);
    displayTotal();
}


function validateItem() { // checks if item quantity is 0

    if (document.myForm.subtotal.value == 0) {

      alert("Quantity cannot be 0. Please select a valid quantity.")

    }
    else {
      alert("This item has been added to your cart.")
    }

}

function moreDescriptionCarrot() { // displays description

    var carrot = "Fresh farm carrots from Ontario, rich in antioxidants and nutrients.";

    document.getElementById("more-description-carrot").innerHTML = carrot;


}

function moreDescriptionSpinach() { // displays description

    var spinach = "Fresh spinach from Quebec, great for maintaining heart health.";

    document.getElementById("more-description-spinach").innerHTML = spinach;

}

function moreDescriptionCauliflower() { // displays description

    var cauliflower = "Fresh cauliflowers from Ontario, a great source of vitamins and antioxidants.";

    document.getElementById("more-description-cauliflower").innerHTML = cauliflower;


}
