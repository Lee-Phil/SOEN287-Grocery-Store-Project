//This function will allow us to change the price of the weekly deal to whatever we want.

//this function will find the exact location to input the special prices
function setText(id, text) {
    var element = document.getElementById(id);
    if (element) {
        element.textContent = text;
    }
    return element;
}
setText("item1", "$5.99 each"); //Watermelon, normal price is $6.99
setText("item2", "$4.99 / lb"); //Chicken, normal price is $5.99
setText("item3", "$3.99 (4L bag)"); //Milk, normal price is $4.99
setText("item4", "$0.99 each"); //Broccoli, normal price is $1.99

