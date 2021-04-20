function calculateYogurtsubtotal(){
    yogurt.subtotal.value = (yogurt.quantity.value *1.99).toFixed(2);
}
function checkYogurtquantity(){
    if(yogurt.quantity.value == 0){
        alert("quantity cannot be zero");
    }
    else{
        alert("This item has been added to the cart");
    }
}

function calculateEggssubtotal(){
    eggs.subtotal.value = (eggs.quantity.value * 2.99).toFixed(2);
}

function checkEggsquantity(){
    if(eggs.quantity.value == 0){
        alert("quantity cannot be zero");
    }
    else{
        alert("This item has been added to the cart");
    }
}

function calculateCheesesubtotal(){
    cheesey.subtotal.value = (cheesey.quantity.value * 1.99).toFixed(2);
}

function checkCheesequantity(){
    if(cheesey.quantity.value == 0){
        alert("quantity cannot be zero");
    }
    else{
        alert("This item has been added to the cart");
    }
}
function calculateBeefsubtotal(){
    myForm.subtotal.value = (beef.quantity.value * 2.99).toFixed(2);
}

function calculateFishsubtotal(){
    fish.subtotal.value = (fish.quantity.value * 4.99).toFixed(2);
}
function calculateShrimpsubtotal(){
    shrimp.subtotal.value = (shrimp.quantity.value * 4.99).toFixed(2);
}