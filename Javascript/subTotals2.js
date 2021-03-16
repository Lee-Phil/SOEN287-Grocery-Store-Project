function calculateYogurtSubtotal(){
    yogurt.subTotal.value = (yogurt.Quantity.value *1.99).toFixed(2);
}
function checkYogurtQuantity(){
    if(yogurt.Quantity.value == 0){
        alert("Quantity cannot be zero");
    }
    else{
        alert("This item has been added to the cart");
    }
}

function calculateEggsSubtotal(){
    eggs.subTotal.value = (eggs.Quantity.value * 2.99).toFixed(2);
}

function checkEggsQuantity(){
    if(eggs.Quantity.value == 0){
        alert("Quantity cannot be zero");
    }
    else{
        alert("This item has been added to the cart");
    }
}

function calculateCheeseSubtotal(){
    cheesey.subTotal.value = (cheesey.Quantity.value * 1.99).toFixed(2);
}

function checkCheeseQuantity(){
    if(cheesey.Quantity.value == 0){
        alert("Quantity cannot be zero");
    }
    else{
        alert("This item has been added to the cart");
    }
}
function calculateBeefSubtotal(){
    beef.subTotal.value = (beef.Quantity.value * 2.99).toFixed(2);
}

function calculateFishSubtotal(){
    fish.subTotal.value = (fish.Quantity.value * 4.99).toFixed(2);
}
function calculateShrimpSubtotal(){
    shrimp.subTotal.value = (shrimp.Quantity.value * 4.99).toFixed(2);
}