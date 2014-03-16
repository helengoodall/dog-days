<?php
if(session_id() == '') {
    session_start();
}


class user{
	
	public function user_id(){
		
		return $_SESSION['user_id'];
		
	}
	
	public function is_loggedin(){
		
			if(isset($_SESSION['user_id'])){
				
				return true;
				
			}else{
				
				return false;
				
			}
		
	}
	public function user_email(){
		
			if(isset($_SESSION['user_id'])){
				
				$user_id = $_SESSION['user_id'];
				
				include("connect.php");
				$get = $db->query("SELECT email FROM user WHERE user_id='".$user_id."'");
				$querydata = $get->fetch_assoc();
				
				return $querydata["email"];
				
			}
		
	}
	public function update_user($data){
		
		$user_id = $data["user_id"];
		$email = $data["email"];
		$first_name = $data["first_name"];
		$last_name = $data["last_name"];
		$addr1 = $data["addr1"];
		$addr2 = $data["addr2"];
		$city = $data["city"];
		$postcode = $data["postcode"];
		$country = $data["country"];
		
		include("connect.php");
		
		$update = $db->query("UPDATE user SET first_name='".$first_name."', last_name='".$last_name."', email='".$email."',
		address1='".$addr1."', address2='".$addr2."', city='".$city."', postcode='".$postcode."',
		country='".$country."' WHERE user_id='".$user_id."' ");
		
	}
	public function get_details($user_id){
		
			if(isset($user_id)){
				
				include("connect.php");
				
				$getdetails = $db->query("SELECT * FROM user WHERE user_id='".$user_id."' LIMIT 1");
				$user_details = $getdetails->fetch_assoc();
				
				$userstuff = array(
				
				"email" => $user_details["email"],
				"first_name" => $user_details["first_name"],
				"last_name" => $user_details["last_name"],
				"user_group" => $user_details["user_group"],
				"address1" => $user_details["address1"],
				"address2" => $user_details["address2"],
				"city" => $user_details["city"],
				"postcode" => $user_details["postcode"],
				"country" => $user_details["country"]
				
				);
				
				return $userstuff;
				
			}
		
	}
	public function is_admin(){
		
			if(isset($_SESSION['user_id'])){
				
				$user = $_SESSION['user_id'];
				include("connect.php");
				
				$finduser = $db->query("SELECT user_group FROM user WHERE user_id='".$user."'");
				
				
				if($finduser->num_rows > 0){
					
					$user = $finduser->fetch_assoc();
					
					if($user['user_group'] >= 5){
						
						return true;
						
					}
					
				}else{
					
					return false;
						
				}
				
			}else{
				
				return false;
				
			}
		
	}
	
	public function register_user($userdata){
		
		$email = $userdata['email'];
		$fname = $userdata['fname'];
		$lname = $userdata['lname'];
		$pass = $userdata['pass'];
		
		if(isset($email)&&isset($fname)&&isset($lname)&&isset($pass)){
			
			include("connect.php");
			
			$checkemail = $db->query("SELECT email FROM user WHERE email='".$email."'");
			
			if($checkemail->num_rows < 1){
				
				$pass = hash('sha256', $pass);
				$fname = $db->real_escape_string($fname);
				$lname = $db->real_escape_string($lname);
				
				$regUser = $db->query("INSERT INTO user (first_name, last_name, email, password) VALUES ('".$fname."','".$lname."','".$email."','".$pass."')");
				
				return true;
				
			}
			else{
				return false;	
			}
			
		}else{
			return false;	
		}
		
		
		
	}
	public function login_user($email, $pass){
		
		if($email!=""&&$pass!=""){
			
			include("connect.php");
			
			$getdetails = $db->query("SELECT user_id, user_group, email, password FROM user WHERE email='".$email."'");
			$dbuser = $getdetails->fetch_assoc();
			
			$pass = hash('sha256', $pass);
			
			if($dbuser['email']==$email&&$dbuser['password']==$pass){
				
				$test = 1;
				
				$_SESSION['user_id'] = $dbuser['user_id'];
				
				if($dbuser['user_group']>=5){
					return "admin";
				}else{
				
					return $test;
				
				}
			
		}else{
			$test = 3;
			
			return 	$test;
		}
		}else{
			$test = 2;
			
			return 	$test;
		}
		
	}
	public function get_user_name(){
		
		$user_id = $_SESSION["user_id"];
		
		include("connect.php");
		
		$get_name = $db->query("SELECT first_name, last_name FROM user WHERE user_id='".$user_id."'");
		$get_name = $get_name->fetch_assoc();
		
		$name = $get_name["first_name"]." ".$get_name["last_name"];
		
		return $name;
		
	}
	public function get_first_name(){
		
		$user_id = $_SESSION["user_id"];
		
		include("connect.php");
		
		$get_name = $db->query("SELECT first_name FROM user WHERE user_id='".$user_id."'");
		$get_name = $get_name->fetch_assoc();
		
		$name = $get_name["first_name"];
		
		return $name;
		
	}
	public function get_last_name(){
		
		$user_id = $_SESSION["user_id"];
		
		include("connect.php");
		
		$get_name = $db->query("SELECT last_name FROM user WHERE user_id='".$user_id."'");
		$get_name = $get_name->fetch_assoc();
		
		$name = $get_name["last_name"];
		
		return $name;
		
	}
	public function get_basket_amount(){
		
		if(isset($_SESSION['user_id'])){
		
		$user_id = $_SESSION["user_id"];
		
		include("connect.php");
		
		$get_basket = $db->query("SELECT * FROM basket WHERE user_id='".$user_id."'");
		
		$price = 0;
		
		while ($basket = $get_basket->fetch_assoc()) {
			
			$get_price = $db->query("SELECT price FROM product WHERE product_id='".$basket['product_id']."'");
			$get_price2 = $get_price->fetch_assoc();
			
			$price2 = $get_price2['price'] * $basket['quantity'];
			
			$price = $price + $price2;
			
		}
		
		return number_format($price, 2);
		
		} 
		if(isset($_SESSION['bag'])){
			
			include("connect.php");
			
			$bag = $_SESSION['bag'];
			$price = 0;
			
			for ($i = 0; $i < count($bag); $i++) {
				
				$qtyb = $bag[$i]["quantity"];
				
				$get_price = $db->query("SELECT price FROM product WHERE product_id='".$bag[$i]['product_id']."'");
				$get_price2 = $get_price->fetch_assoc();
			
				$price2 = $get_price2['price'] * $qtyb;
			
				$price = $price + $price2;
				
			}
			
			return number_format($price, 2);
			
		}
		return "0.00";
		
	}
	
	public function get_basket_number(){
		
		if(isset($_SESSION['user_id'])){
		
		$user_id = $_SESSION["user_id"];
		
		include("connect.php");
		
		$get_basket = $db->query("SELECT * FROM basket WHERE user_id='".$user_id."'");
		
		$qty = 0;
		
		while ($basket = $get_basket->fetch_assoc()) {
			
			$qty = $qty + $basket['quantity'];
			
			
		}
		
		return $qty." Items";
		
		} 
		if(isset($_SESSION['bag'])){
			
			$bag = $_SESSION['bag'];
			$qty = 0;
			
			for ($i = 0; $i < count($bag); $i++) {
				
				$qtyb = $bag[$i]["quantity"];
				
				$qty = $qty + $qtyb;
				
			}
			
			return $qty." Items";
			
		}
		
		return "0 Items";
		
	}
	public function display_basket(){
		
		if(isset($_SESSION['user_id'])){
			
			$user_id = $_SESSION["user_id"];
		
			include("connect.php");
			
			$get_basket = $db->query("SELECT * FROM basket WHERE user_id='".$user_id."'");
			
			if(($get_basket->num_rows) > 0){
				
				echo '
				<table class="basket">
        
        	<thead>
            	<tr>
                	<th colspan="2" class="basket-desc">Item Description</th>
                    <th class="basket-iprice">Item Price</th>
                    <th class="basket-qty">Quantity</th>
                    <th class="basket-price">Total</th>
                </tr>
            </thead>
            <tbody>
				';
				
				while($basket = $get_basket->fetch_assoc()){
					
					$getproduct = $db->query("SELECT * FROM product WHERE product_id='".$basket['product_id']."'");
					$product = $getproduct->fetch_assoc();
					
					$total = $basket["quantity"] * $product['price'];
					$total = number_format($total, 2);
					
					if($product['stock']>0){
						$stock = "In Stock";
					}
					
					echo'<tr>
						<td class="basket-img"><img src="images/'.$product['product_image'].'" class="basketimg" /></td>
						<td class="basket-desc">'.$product['product_title'].'<div class="basket-instock">'.$stock.'</div></td>
						<td class="basket-iprice">£'.$product['price'].'</td>
						<td class="basket-qty">
							<button class="qty-btn">-</button> '.$basket['quantity'].' <button class="qty-btn">+</button>
						</td>
						<td class="basket-price">£'.$total.'</td>
                	</tr>';
					
				}
				echo '</tbody>
        
        		</table>';
				
			}else{
				return '<div class="noitems">Sorry, There are no items in your bag.</div>';	
			}
			
			
		}else{
			if(isset($_SESSION['bag'])){
				
				include("connect.php");
				
				$bag = $_SESSION['bag'];
				
				if(count($bag) > 0){
				
					echo '
					<table class="basket">
			
					<thead>
						<tr>
							<th colspan="2" class="basket-desc">Item Description</th>
							<th class="basket-iprice">Item Price</th>
							<th class="basket-qty">Quantity</th>
							<th class="basket-price">Total</th>
						</tr>
					</thead>
					<tbody>
						';
					
					for ($i = 0; $i < count($bag); $i++) {
						
						$getproduct = $db->query("SELECT * FROM product WHERE product_id='".$bag[$i]["product_id"]."'");
						$product = $getproduct->fetch_assoc();
						
						$total = $bag[$i]["quantity"] * $product['price'];
						$total = number_format($total, 2);
						
						if($product['stock']>0){
							$stock = "In Stock";
						}
						
						echo'<tr>
							<td class="basket-img"><img src="images/'.$product['product_image'].'" class="basketimg" /></td>
							<td class="basket-desc">'.$product['product_title'].'<div class="basket-instock">'.$stock.'</div></td>
							<td class="basket-iprice">£'.$product['price'].'</td>
							<td class="basket-qty">
								<button class="qty-btn">-</button> '.$bag[$i]['quantity'].' <button class="qty-btn">+</button><br/>
								<a href="Javascript: remove(\''.$bag[$i]["product_id"].'\')" class="basket-remove">Remove</a>
							</td>
							<td class="basket-price">£'.$total.'</td>
						</tr>';
						
					}
					
					echo '</tbody>
			
					</table>';
				
				}else{
					
					return '<div class="noitems">Sorry, There are no items in your bag.</div>';	
						
				}
				
				
				
			}else{
				
				return '<div class="noitems">Sorry, There are no items in your bag.</div>';
				
			}
		}
		
	}
	public function user_level_name($level){
		
		if($level == 1){
			
			return "Customer";
			
		}elseif($level > 2){
			
			return "Administrator";
			
		}
		
	}
	

}

?>