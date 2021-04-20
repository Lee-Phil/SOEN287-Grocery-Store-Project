function toggleDescription() {
    let buttonText = document.getElementById('togglebutton');
    let description = document.getElementById('description');

    if (description.classList.contains("show")) buttonText.innerHTML = "More description"
    else if (!description.classList.contains("collapsing")) buttonText.innerHTML = "Less description"
      
  }

  function calculateSubtotal() {

    // Create pattern for a float.
    const floatPattern = /[.\d]+/g;

    // Get the price from the page.
    let price = document.getElementById("price").innerHTML;

    // Get only the float out of the price string.
    price = +floatPattern.exec(price);

    // Get the quantity from the page.
    let quantity = document.getElementById("Quantity").value;

    // Set the subtotal to the product of price and quantity fixed to 2 decimal places.
    document.getElementById("subtotal").value = (price * quantity).toFixed(2);
  }
  ["test", "other", "thing"]
  let obj = {test: "test", other:"thing"}
  obj.test //test
  obj.other //thing

  function addToCart() {
    $("#add").click(() => {
      $.post("addToCart.php", {name:"", price:document.getElementById("price").innerHTML}, (data) => {
        document.getElementById("price").innerHTML = data.split(", ")[0]; //10.9910.99test
      })
      $.post("modifyCart.php", {operation:"add", target:0}, (data) => {
        document.getElementById("quantity").innerHTML =  data;
      })
      $.post("modifyCart.php", {operation:"add", target:0}, (data) => {
        document.getElementById("quantity").innerHTML =  data;
      })
    })
  }