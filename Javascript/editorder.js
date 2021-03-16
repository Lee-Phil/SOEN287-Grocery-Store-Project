// Input validation for address fields.
document.getElementById("save").addEventListener("click", () => {
    // Define all patterns.
	const addressPattern = /^\d+( \w+)+$/g;
	const cityPattern = /^[a-zA-Z]+$/g;
	const provincePattern = /^[a-zA-Z]+$/g;
	const postalCodePattern = /^[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d$/g;

    // Define all input element's DOM objects.
	const addressElement = document.getElementById("address");
	const cityElement = document.getElementById("city");
	const provinceElement = document.getElementById("province");
	const postalCodeElement = document.getElementById("postalcode");

    // Create an array out of previously defined patterns and DOM elements.
	let inputArr = [
		{ pattern: addressPattern, element: addressElement },
		{ pattern: cityPattern, element: cityElement },
		{ pattern: provincePattern, element: provinceElement },
		{ pattern: postalCodePattern, element: postalCodeElement },
	];

    // Iterate through the array validating repective input fields.
	inputArr.forEach((input) => {
		if (!input.pattern.test(input.element.value)) {
			input.element.classList.remove("is-valid");
			input.element.classList.add("is-invalid");
		} else {
			input.element.classList.add("is-valid");
			input.element.classList.remove("is-invalid");
		}
	});
});


// Define JSON objects for test input.
let items = [
	{ price: 5.99, quantity: 2, name: "Banana" },
	{ price: 3.99, quantity: 1, name: "Milk" },
	{ price: 2.99, quantity: 1, name: "Cheerios" },
];

items.forEach((item) => {
    // Populate the item list with items based on "test-item" template.
	let listItem = document.getElementById("test-item").cloneNode(true);

	document.getElementsByClassName("list-group")[0].appendChild(listItem);
	listItem.querySelector("#item-name").innerHTML = item.name;
	let textInput = listItem.querySelector("#item-input");
	textInput.value = item.quantity;
	textInput.disabled = true;
	listItem.id = "";

    // Enable the input field of the respective item when edit button is clicked.
	listItem.querySelector("#item-edit").addEventListener("click", (e) => {
		textInput.disabled = false;
	});

    // Create an element for the price table for the item.
	let priceElement = document.createElement("tr");
	priceElement.innerHTML = `<td>${item.name}</td><td>${item.quantity}</td><td>${
		item.quantity * item.price
	}</td>`;

    // When the input changes validate it and update the price and quantity
    // in the price table.

	function validateInput() {
		if (/^\d+$/g.test(textInput.value)) {
            textInput.classList.remove("is-invalid");
			textInput.disabled = true;
			updatePrice(priceElement, textInput.value);
		} else textInput.classList.add("is-invalid");
	}


	textInput.addEventListener("change", () => validateInput());

	textInput.addEventListener("keypress", e => {
		// Prevents sumbiting form when you want to just submit the new quantity.
		if (e.key == "Enter") {
			e.preventDefault();
			validateInput();
		}
	})

    // Delete an item from both the item list and price table when the delete
    // button is click and update the price totals.
	listItem.querySelector("#item-delete").addEventListener("click", (e) => {
		listItem.remove();
		priceElement.remove();
		calculateTotal();
	});

    // Add the price element to the price table.
	document.getElementById("price-items").appendChild(priceElement);

    // Inital calcuation of total prices.
    calculateTotal();
});

// Function that updates the prices and quantities based on price element
// passed in as well as updated quantity.
function updatePrice(el, q) {
	const currentQuantity = parseFloat(el.children[1].innerHTML);
	const currentPrice = parseFloat(el.children[2].innerHTML);

	const unitPrice = currentPrice / currentQuantity;

	const newPrice = q * unitPrice;

	el.children[1].innerHTML = q;
	el.children[2].innerHTML = newPrice.toFixed(2);

    // Recalculate the total price
	calculateTotal();
}

// Function that calculates totals and populates totals in table.
function calculateTotal() {
	const subtotal = document.getElementById("subtotal");

	let priceSum = 0;

    // Itterate through all price items in table and sum them up.
	for (let item of document.getElementById("price-items").children) {
		priceSum += parseFloat(item.children[2].innerHTML);
	}
    // Round to two decimal places.
	subtotal.innerHTML = priceSum.toFixed(2);

	const qst = document.getElementById("qst");
	qst.innerHTML = (priceSum * 0.0975).toFixed(2);

	const gst = document.getElementById("gst");
	gst.innerHTML = (priceSum * 0.05).toFixed(2);

	const total = document.getElementById("total");
	total.innerHTML = (priceSum + priceSum * (0.0975 + 0.05)).toFixed(2);
}