//This function implements the add to cart button

//Create alert saying the item has been added into the cart.
function addToCart(){
    var dom = document.getElementById("Quantity");
    if (dom.value < 1){ //Negative numbers
        alert("Invalid quantity. Please input a number greater than 0");
    }
    else{
        alert("This item has been added to the cart");
    }
}


