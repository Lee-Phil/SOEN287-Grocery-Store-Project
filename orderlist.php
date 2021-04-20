<!DOCTYPE html>
<html lang="en">

<head>
	<title>Order List</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="CSS/styles.css" />
	<link rel="stylesheet" href="CSS/orderlist.css" />
</head>

<body>
  <?php
  include("navagationBar.php");
  ?>

	<div class="container">
		<div class="row">
			<h1>Order List</h1>
		</div>

		<div class="row">
			<table id="order-table">
				<tr>
					<th>Order Date</th>
					<th>Order Summary</th>
					<th>Order Total</th>
					<th class="buttons">Functions</th>
				</tr>
				<tr id="test-order">
					<td id="date">February 21st, 2021</td>
					<td>
						<ul id="summary" class="list-group">
						</ul>
					</td>
					<td id="total" class="total">$14.91</td>
					<td class="buttons">
						<button id="delete" class="delete">
							<span class="material-icons"> delete_outline </span></button><a
							href="editorder.php"><button class="edit">
								<span class="material-icons"> create </span>
							</button></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="row">
			<a href="editorder.php"><button class="add btn btn-dark">Add Order</button></a>
		</div>
	</div>

<!--Footer-->
    <?php include 'footer.php';?>

	<script src="Javascript/orderlist.js"></script>
</body>

</html>