<?php
    
	// we include the database and the format classes
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../config/config.php');
	include_once ($filepath.'/Database.php');
    
    class viewProduct{
        public function viewAllProduct($uid){	//This is displays all the products 
			$q = "SELECT * FROM product WHERE user_id= '$uid'";
			$getProducts = $this->db->select($q);
			if($getProducts->num_rows > 0){
				echo "<table><tr><th>#</th><th></th><th></th><th></th><th></th></tr>";
				while($row = $getProducts->fetch_assoc()){
					$p_id = $row['product_cat_id'];
					$q2 = "SELECT product_cat FROM product_cat WHERE product_cat_id= '$p_id'";
					$product_cat = $this->db->select($q2);
					echo "<tr><td>";
					echo $row['product_id'];
					echo "</td><td>";
					echo $row['product_name'];
					echo "</td><td>";
					echo $row['product_desc'];
					echo "</td><td>";
					echo $row['cost_price'];
					echo "</td><td>";
					echo $row['selling_price'];
					echo "</td><td>";
					echo $product_cat->fetch_assoc();
					echo "</td><td>";
					echo $row['date_created'];
					echo "</td><td>";
					echo $row['product_quantity'];
					echo "</td></tr>";
                }
                echo "</table>";
			} 
			else{
				echo "No products yet!";
			}
		}
		public function viewClickedProduct($pId){ //This displays just the product that was clicked on
			$q = "SELECT * FROM product WHERE product_id= '$pId'";
			$getClickedProducts = $this->db->select($q);
			if($getClickedProducts->num_rows > 0){
				echo "<table><tr><th>#</th><th></th><th></th><th></th><th></th></tr>";
				while($row = $getProducts->fetch_assoc()){
					$p_id = $row['product_cat_id'];
					$q2 = "SELECT product_cat FROM product_cat WHERE product_cat_id= '$p_id'";
					$product_cat = $this->db->select($q2);
					echo "<tr><td>";
					echo $row['product_id'];
					echo "</td><td>";
					echo $row['product_name'];
					echo "</td><td>";
					echo $row['product_desc'];
					echo "</td><td>";
					echo $row['selling_price'];
					echo "</td><td>";
					echo $product_cat->fetch_assoc();
					echo "</td><td>";
					echo $row['date_created'];
					echo "</td><td>";
					echo $row['product_quantity'];
					echo "</td></tr>";
                }
                echo "</table>";
			} 
			
		}
    }
?>