		<div class="well sidebar-nav">
            <ul class="nav nav-list">
            
              <li class="nav-header">Orders</li>
              <li><a href="#">Orders</a></li>
              <li><a href="#">Payment</a></li>
              <li><a href="#">Packing</a></li>
              <li><a href="#">Dispatch</a></li>
              
              <li class="nav-header">Products</li>
              <li><a href="#">Categories</a></li>
              <li <?php echo $admin->nav_class("products"); ?>>
              	<a href="products.php">Products</a>
              </li>
              <li <?php echo $admin->nav_class("stock"); ?>><a href="stock.php">Stock</a></li>
              
              <li class="nav-header">Users</li>
              <li <?php echo $admin->nav_class("view_user"); ?>><a href="view_user.php">Users</a></li>
              <li <?php echo $admin->nav_class("view_admin"); ?>><a href="view_admin.php">Administrators</a></li>
              
            </ul>
          </div>