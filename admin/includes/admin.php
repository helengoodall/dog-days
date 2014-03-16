<?php


class admin{
	
	private function getDb(){
		
        include("../includes/database.php");
		
		return $db;
		
    }
	public function is_active($page_link){
		
		$page = $_SERVER["REQUEST_URI"];
		$page_link = $page_link.".php";
				
		$page = explode("/", $page);
		$page = end($page);
		
		if($page == $page_link){
			
			return true;
			
		}else{
			
			return false;
		}
		
	}
	public function nav_class($page_link){
		
		$page = $_SERVER["REQUEST_URI"];
		$page_link = $page_link.".php";
				
		$page = explode("/", $page);
		$page = end($page);
		
		if($page == $page_link){
			
			return 'class="active"';
			
		}
		
	}
	public function total_products(){
		
		
		
	}
	public function test1(){
		
		$find = $this->getDb()->db->query("SELECT * FROM user WHERE user_id='1'");
		$rows = $find->num_rows;
		
		return $rows;
		
	}
	
}

?>