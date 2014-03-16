<?php
    class product{
    	
		public function get_products($category){
			
			include("connect.php");
			
			$find_products = $db->query("SELECT product_id, product_title, product_image, price FROM product WHERE category_id='".$category."'");
			$rows = $find_products->num_rows;
			
			if ($rows > 0){
			
			$i = 0;
			
				while($product = $find_products->fetch_assoc()){
					
					$i++;
					
					if(($i % 4)==1){
						
						echo '<div class="products-row">';
					}
					
					
					echo'
					<div class="product">
	    			
	    			<div class="product-image">
	    				<a href="product.php?id='.$product['product_id'].'">
	    					<img src="images/'.$product['product_image'].'" class="prodimg" />
	    				</a>
	    			</div>
	    			'.$product['product_title'].'
	    			<div class="price">£'.$product['price'].'</div>
	    			
	    			</div>
					
					';
					
					if(($i % 4)==0){;
						echo '</div>';
					
					}
					elseif($rows == $i){
						echo '</div>';
					}
				}
			}else{
				echo '<div class="noitems">Sorry, No items to display in this category.</div>';
			}
			
			
		}
		
		public function update_product($data){
		
			$product_id = $data["product_id"];
			$product_title = $data["product_title"];
			$product_description = $data["product_description"];
			$price = $data["price"];
			$stock = $data["stock"];
		
			include("connect.php");
			
			$update = $db->query("UPDATE product SET product_title ='".$product_title."', price='".$price."', stock='".$stock."'
			WHERE product_id='".$product_id."' ");
		
		}
		public function get_details($product_id){
		
			if(isset($product_id)){
				
				include("connect.php");
				
				$getdetails = $db->query("SELECT * FROM product WHERE product_id='".$product_id."' LIMIT 1");
				$product_details = $getdetails->fetch_assoc();
				
				$productstuff = array(
				
				"product_title" => $product_details["product_title"],
				"price" => $product_details["price"],
				"stock" => $product_details["stock"],
				
				);
				
				return $productstuff;
				
			}
			}
			
			
		public function get_sub_cats($category){
			
			include("connect.php");
			
			$get_cats = $db->query("SELECT * FROM category WHERE parent='".$category."'");
			
			while ($subcat = $get_cats->fetch_assoc()){
				
				echo '<li><a href="category.php?id='.$subcat['category_id'].'">'.$subcat['cat_name'].'</a></li>';
				
			} 
			
		}
		public function get_name($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT product_title FROM product WHERE product_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return $product["product_title"];
			
		}
		
		
		public function get_description($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT product_description FROM product WHERE product_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return $product["product_description"];
			
		}
		public function get_image($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT product_image FROM product WHERE product_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return $product["product_image"];
			
		}
		public function get_price($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT price FROM product WHERE product_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return "£".$product["price"];
			
		}
		public function stock_info($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT stock FROM product WHERE product_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			if($product['stock'] > 1){
				return '<span class="instock">In Stock</span>';
			}else if($product['stock'] == 1){
				return '<span class="instock">Only 1 left in stock</span>';
			}else{
				return '<span class="nostock">Out of Stock</span>';
			}
			
		}
		public function get_petname($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT pet_name FROM adoption WHERE adoption_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return $product["pet_name"];
			
		}
		public function get_petimage($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT image FROM adoption WHERE adoption_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return $product["image"];
			
		}
		public function get_petdescription($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT description FROM adoption WHERE adoption_id='".$id."'");
			$product = $find_product->fetch_assoc();
			
			return $product["description"];
			
		}
		
		public function get_user($id){
			
			include("connect.php");
			
			$find_product = $db->query("SELECT first_name FROM user;");
			$product = $find_product->fetch_assoc();
			
			return $product["first_name"];
			
			
			
			
		}
		
		public function get_adoption(){
			
			include("connect.php");
			
			$find_products = $db->query("SELECT * FROM adoption");
			$rows = $find_products->num_rows;
			
			if ($rows > 0){
			
			$i = 0;
			
				while($product = $find_products->fetch_assoc()){
					
					$i++;
					
					if(($i % 4)==1){
						
						echo '<div class="products-row">';
					}
					
					
					echo'
					<div class="product">
	    			
	    			<div class="product-image">
	    				<a href="adopt.php?id='.$product['adoption_id'].'">
	    					<img src="images/'.$product['image'].'" class="prodimg" />
	    				</a>
	    			</div>
	    			'.$product['pet_name'].'
	    			<div class="price">'.$product['age'].' Years old.</div>
	    			
	    			</div>
					
					';
					
					if(($i % 4)==0){
						
						echo '</div>';
					
					}
					if($rows == $i){
						echo '</div>';
					}
				}
			}else{
				echo '<div class="noitems">Sorry, No items to display in this category.</div>';
			}
			
			
		
			
			
		}
		
			
			
		
			
			
		

public function get_adoptionname(){
			
			include("connect.php");
			
			$find_products = $db->query("SELECT * FROM adoption ORDER BY pet_name");
			$rows = $find_products->num_rows;
			
			if ($rows > 0){
			
			$i = 0;
			
				while($product = $find_products->fetch_assoc()){
					
					$i++;
					
					if(($i % 4)==1){
						
						echo '<div class="products-row">';
					}
					
					
					echo'
					<div class="product">
	    			
	    			<div class="product-image">
	    				<a href="adopt.php?id='.$product['adoption_id'].'">
	    					<img src="images/'.$product['image'].'" class="prodimg" />
	    				</a>
	    			</div>
	    			'.$product['pet_name'].'
	    			<div class="price">'.$product['age'].' Years old.</div>
	    			
	    			</div>
					
					';
					
					if(($i % 4)==0){
						
						echo '</div>';
					
					}
					if($rows == $i){
						echo '</div>';
					}
				}
			}else{
				echo '<div class="noitems">Sorry, No items to display in this category.</div>';
			}
			
			
		
			
			
		}
		
			
			
		
			
			
		
		
    
	public function get_adoptionage(){
			
			include("connect.php");
			
			$find_products = $db->query("SELECT * FROM adoption ORDER BY age ASC");
			$rows = $find_products->num_rows;
			
			if ($rows > 0){
			
			$i = 0;
			
				while($product = $find_products->fetch_assoc()){
					
					$i++;
					
					if(($i % 4)==1){
						
						echo '<div class="products-row">';
					}
					
					
					echo'
					<div class="product">
	    			
	    			<div class="product-image">
	    				<a href="adopt.php?id='.$product['adoption_id'].'">
	    					<img src="images/'.$product['image'].'" class="prodimg" />
	    				</a>
	    			</div>
	    			'.$product['pet_name'].'
	    			<div class="price">'.$product['age'].' Years old.</div>
	    			
	    			</div>
					
					';
					
					if(($i % 4)==0){
						
						echo '</div>';
					
					}
					if($rows == $i){
						echo '</div>';
					}
				}
			}else{
				echo '<div class="noitems">Sorry, No items to display in this category.</div>';
			}
			
			
		
			
			
		}
		
			
			
		
			
			
		}
		
?>
		
    
	


