// cart functions

calculateSubtotal(); // calculate subtotal on load
calculateTotal(); // calculate total on load

function doThis(node) { // call all functions when submit is clicked
    changeQuantity(node);
    updateSummary(node);
    calculateSubtotal();
    calculateTotal();
}

function deleteThis(node) { // delete an item from the cart

    var toBeDeleted = node.parentNode.parentNode.parentNode;

    var item = node.parentNode.parentNode.parentNode.getAttribute("id");

    console.log(item);  

    document.getElementsByClassName(item)[0].parentNode.remove();

    toBeDeleted.remove();

    calculateSubtotal();
    calculateTotal();

}

function changeQuantity(node) { // increase or decrease items in cart

    var quantity = parseFloat(node.parentNode.childNodes[3].value);

    var operand = node.value;

    if (operand === "increase") {
        quantity += 1;
    }
    else if (operand === "decrease") {
        if (quantity > 1) 
            quantity -= 1;
    }

    if (quantity > 0) {
        node.parentNode.childNodes[3].value = quantity;
    }

}

function updateSummary(node) { // change summary when cart is changed

    var quantity = parseFloat(node.parentNode.childNodes[3].value);

    var price = parseFloat(node.parentNode.parentNode.childNodes[1].childNodes[3].value);

    var subtotal = quantity * price;
   
    var item = node.parentNode.parentNode.parentNode.getAttribute("id");

    var x = 0;

    if (item === "potatoes")
        x = 0;
    else if (item === "tomatoes")
        x = 1;
    else if (item === "pumpkin")
        x = 2;
    else {
        x = 3;
    }


    document.getElementsByClassName("summaryItem")[x].innerHTML = subtotal;

}



function calculateSubtotal() { // calculates subtotal

    var sum = 0;

    var array_items = document.getElementsByClassName("summaryItem");

    for (var i = 0; i < array_items.length; i++) {
        
        sum += parseFloat(array_items[i].innerHTML);

    }

    document.getElementById("subtotalCost").innerHTML = Math.round(sum * 100) / 100;
    document.getElementById("subtotalCost").style.fontWeight = "bold";

}

function calculateTotal() { // calculates total

    var subtotal = parseFloat(document.getElementById("subtotalCost").innerHTML);

    var qst = subtotal * (5/100);

    var gst = subtotal * (9.9/100);

    var total = subtotal + qst + gst;

    document.getElementById("totalCost").innerHTML = Math.round(total * 100) / 100;

}
