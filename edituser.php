<!DOCTYPE html>
<html>

<head>
	<title>Edit User</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="CSS/useredit.css" />
</head>

<body>

  <?php
  include("navagationBar.php");
  ?>
	<form action="#">
		<fieldset class="outer">
			<legend>Edit User</legend>
			<div class="row">
				<div class="col">
					<fieldset>
						<legend>Login Information</legend>
						<label>Email: </label>
						<input id="email" type="text" class="form-control" placeholder="guy@williams.com" />
						<label>Password: </label>
						<input id="password" type="password" class="form-control" placeholder="*******" />
					</fieldset>
				</div>
				<div class="col">
					<fieldset>
						<legend>Personal Information</legend>
						<label>First name: </label>
						<input id="firstname" type="text" class="form-control" placeholder="Guy" />
						<label>Last name: </label>
						<input id="lastname" type="text" class="form-control" placeholder="Williams" />
					</fieldset>
				</div>
			</div>

			<fieldset>
				<legend>Payment Information</legend>
				<div class="row">
					<div class="col-md-8 col-lg-6">
						<label>Card Number: </label>
						<input id="cardnumber" type="text" class="form-control" placeholder="1234 5678 9876 5432" />
					</div>
					<div class="col-lg-2 col-md-auto">
						<label>CVV: </label>
						<input id="cvv" type="text" class="form-control" placeholder="123" />
					</div>
					<div class="col-auto">
						<label>Expiration Date: </label>
						<div class="input-group">
							<select class="form-select">
								<option value="1">01 (Jan)</option>
								<option value="2">02 (Feb)</option>
								<option value="3">03 (Mar)</option>
								<option value="4">04 (Apr)</option>
								<option value="5">05 (May)</option>
								<option value="6">06 (Jun)</option>
								<option value="7">07 (Jul)</option>
								<option value="8">08 (Aug)</option>
								<option value="9">09 (Sep)</option>
								<option value="10">10 (Oct)</option>
								<option value="11">11 (Nov)</option>
								<option value="12">12 (Dec)</option>
							</select>
							<div class="input-group-text">/</div>
							<input id="year" class="year form-control" type="text" placeholder="22" />
						</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Shipping Information</legend>
				<div class="row">
					<div class="col">
						<label>Address: </label>
						<input id="address" type="text" class="form-control" placeholder="12 Placeholder Rd." />
					</div>
					<div class="row">
						<div class="col">
							<label>City: </label>
							<input id="city" type="text" class="form-control" placeholder="Montreal" />
						</div>

						<div class="col">
							<label>Province: </label>
							<input id="province" type="text" class="form-control" placeholder="Quebec" />
						</div>
						<div class="col">
							<label>Postal Code: </label>
							<input id="postalcode" type="text" class="form-control" placeholder="A1B 2C3" />
						</div>
					</div>
				</div>
			</fieldset>

			<button id="save" class="btn btn-dark" type="submit">Save</button>
		</fieldset>
	</form>

	<!--Footer-->
    <?php include 'footer.php';?>
	<script src="Javascript/edituser.js"></script>
</body>

</html>