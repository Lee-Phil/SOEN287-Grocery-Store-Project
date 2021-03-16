//This code is used to calculate the total price, as well as the add to cart button for only the BROCCOLI

document.myForm.Quantity.onchange = getSubTotal;
//change the subtotal depending on the quantity
function getSubTotal(){
    var price = 0.99; //Special price for brocolli
    var quantity = parseFloat(document.myForm.Quantity.value);

    var subtotal1 = quantity * price;

    document.getElementById("subtotal").value = subtotal1.toFixed(2);
}


//Create alert saying the item has been added into the cart.
function addToCart(){
    var dom = document.getElementById("Quantity");
    if (dom.value < 1){
        alert("Invalid quantity. Please input a number greater than 0");
    }
    else{
        alert("This item has been added to the cart");
    }
}