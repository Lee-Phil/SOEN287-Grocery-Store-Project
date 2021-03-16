// Create array of order objects which will be used as the info for the created elements.
let orders = [
    {date: "February 21, 2021", summary: [{name: "Banana", quantity: 2}, {name: "Milk", quantity: 1}, {name: "Cheerios", quantity: 1}], total: 14.91},
    {date: "February 14, 2021", summary: [{name: "Cheese", quantity: 1}, {name: "Lettuce", quantity: 1}], total: 5.36},
    {date: "January 11, 2021", summary: [{name: "Eggs", quantity: 2}, {name: "Bagels", quantity: 1}], total: 11.19}
]

// Iterate through each order.
orders.forEach(order => {

    // Clone the base order template.
    let base =  document.getElementById("test-order").cloneNode(true);

    // Remove test-order id, since it is not displayed.
    base.id = "";

    // Modify the date with the one in the data object.
    base.querySelector('#date').innerHTML = order.date;

    // Iterate through the products in each order an create an li element for each
    order.summary.forEach(({name, quantity}) => {
        let el = document.createElement("li");
        el.className = "list-group-item";

        el.innerHTML = `${quantity} x ${name}`;

        // Append the list element to the orders product list.
        base.querySelector('#summary').appendChild(el);
    })

    // Modify the total with the order total from the data object.
    base.querySelector("#total").innerHTML = `$${order.total}`;

    // Implement the delete button so that when it is clicked it deletes the order.
    base.querySelector("#delete").addEventListener("click", () => {
        base.remove();
    })

    // Append the order element to the order table.
    document.getElementById("order-table").appendChild(base);
})