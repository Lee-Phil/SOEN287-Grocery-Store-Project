<!DOCTYPE html>
<html>

<head>
	<title>Edit User</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="CSS/orderedit.css" />
</head>

<body>

  <?php
  include("navagationBar.php");
  ?>
	<form action="#">
		<fieldset class="outer">
			<legend>Edit Order</legend>
			<div class="row">
				<div class="col">
					<fieldset>
						<legend>Order Items</legend>
						<ul class="list-group">
							<li id="test-item" class="list-group-item">
								<div class="row">
									<div id ="item-name" class="col">Banana</div>
									<div class="col-lg-4 col-md-12 buttons">
										<div class="input-group input-group-sm">
											<input id="item-input" class="form-control" type="text" value="2" disabled />
											<div id="item-edit" class="btn btn-outline-dark">
												<span class="material-icons">create</span>
											</div>
											<div id="item-delete" class="btn btn-outline-dark">
												<span class="material-icons">delete</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</fieldset>
				</div>
			</div>

			<fieldset>
				<legend>Order Summary</legend>
				<div class="row">
					<table id="price-table">
						<tr>
							<th>Item</th>
							<th>Quantity</th>
							<th>Price($)</th>
						</tr>
						<tbody id="price-items">
						</tbody>
						<tr>
							<td class="subtotal">Subtotal</td>
							<td class="subtotal"></td>
							<td id="subtotal" class="subtotal">12.97</td>
						</tr>
						<tr>
							<td class="tax">QST</td>
							<td></td>
							<td id="qst" class="tax">1.29</td>
						</tr>
						<tr>
							<td class="tax">GST</td>
							<td></td>
							<td id="gst" class="tax">0.65</td>
						</tr>
						<tr>
							<td class="total">Total</td>
							<td class="total"></td>
							<td id="total" class="total">14.91</td>
						</tr>
					</table>
				</div>
			</fieldset>

			<fieldset>
				<legend>Shipping Information</legend>
				<div class="row">
					<label>Payment Method:</label>
					<select>
						<option>**** **** **** 5432</option>
					</select>
				</div>
				<br />
				<div class="row">
					<div class="col">
						<label>Address: </label>
						<input id="address" type="text" class="form-control" value="12 placeholder rd" />
						<div class="invalid-feedback">Please input a valid address.</div>
					</div>
					<div class="row">
						<div class="col">
							<label>City: </label>
							<input id="city" type="text" class="form-control" value="Montreal" />
							<div class="invalid-feedback">Invalid City.</div>
						</div>

						<div class="col">
							<label>Province: </label>
							<input id="province" type="text" class="form-control" value="Quebec" />
							<div class="invalid-feedback">Invalid Province.</div>
						</div>
						<div class="col">
							<label>Postal Code: </label>
							<input id="postalcode" type="text" class="form-control" value="A1B 2C3" />
							<div class="invalid-feedback">Invalid Postal Code.</div>
						</div>
					</div>
				</div>
			</fieldset>

			<button id="save" class="btn btn-dark" type="submit">Save</button>
		</fieldset>
	</form>

	<!--Footer-->
    <?php include 'footer.php';?>
	<script src="Javascript/editorder.js"></script>
</body>

</html>