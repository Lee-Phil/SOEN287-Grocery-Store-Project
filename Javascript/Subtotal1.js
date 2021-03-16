//Calculates the subtotal of the item depending on its price and quantity.

document.myForm.Quantity.onchange = getSubTotal;
//change the subtotal depending on the quantity
function getSubTotal(){
    var price = parseFloat(document.getElementById("value").innerHTML);
    var quantity = parseFloat(document.myForm.Quantity.value);

    var subtotal1 = quantity * price;

    document.getElementById("subtotal").value = subtotal1.toFixed(2);
}
