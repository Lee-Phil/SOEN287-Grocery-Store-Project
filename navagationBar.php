<div id="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Online Grocery Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aisles
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
                  $x = file_get_contents("allProducts.json");

                  $temp = json_decode($x);

              $database = $temp;

              $displayed = array();
              foreach ($database as $key => $item) {
                  if (!in_array($item->category, $displayed)) {
                      array_push($displayed, $item->category);
                          echo '<a class="dropdown-item" href="category.php?category='.$item->category.'">'.$item->category.'</a>';
                  }
              } 
              ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ProductList.php">All Products</a>
      	</li>
      	<li class="nav-item">
          <a class="nav-link" href="Users.php">All Users</a>
      	</li>
      <li class="nav-item">
          <a class="nav-link" href="orderlist.php">Orders</a>
      </li>
      </ul>
    </div>
  </nav>
</div>