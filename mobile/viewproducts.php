<?php

require_once("includes/global.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>
<div id="nav-wrap">
	<?php include("includes/nav.php"); ?>
</div>

<div id="container">

    <div class="content">
    
   <h1> All Products </h1> 	
<h4>
<?php
$con=mysqli_connect("localhost","petsuk","petsuk1*","petsuk_main");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM product");

echo "<table border='1'>
<tr>
<th>product_id</th>
<th>product_title</th>
<th>price</th>
<th>stock</th>
<th>product_description</th>
<th>product_image</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
    echo "<td>" . $row['product_id'] . "</td>";
  echo "<td>" . $row['product_title'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
	echo "<td>" . $row['product_description'] . "</td>";
	echo "<td>" . $row['product_image'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
  </h5>  
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>