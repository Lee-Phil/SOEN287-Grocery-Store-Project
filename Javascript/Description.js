//This function implements the add to cart button

//Create alert saying the item has been added into the cart.
function addToCart(){
    var dom = document.getElementById("Quantity").value;
    // var p = document.getElementById("price").innerText;
    
    // Create pattern for a float.
    const floatPattern = /[.\d]+/g;

    // Get the price from the page.
    let price = document.getElementById("value").innerHTML;

    // Get only the float out of the price string.
    price = +floatPattern.exec(price);
    
    
    var name = document.getElementById("value").parentElement.innerText.split("\n")[0];
    var st = document.getElementById("subtotal").value;
    
    if (dom < 1){ //Negative numbers
        alert("Invalid quantity. Please input a number greater than 0");
    }
    else{
        $.post("PHP/addToCart.php", {submit: "Add To Cart", itemName: name, cost: parseFloat(price), quantity: parseInt(dom), subtotal: parseFloat(st)}, (d) => {
            alert(d)
        });
    }
}


