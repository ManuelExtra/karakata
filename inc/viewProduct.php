<?php
    
	// we include the database and the format classes
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../config/config.php');
	include_once ($filepath.'/Database.php');
    
    class viewProduct{
        public function viewAllProduct($cat){	//This is displays all the products 
			if($this->db->select('SELECT * FROM product join product_cat on product.product_id = $cat')){
			    $q = 'SELECT * FROM product join product_cat on product.product_id = $cat';
			    $getProducts = $this->db->select($q);
			    return $getProducts;
			}
			else{
				echo "No products yet!";
			}
		}
		public function viewClickedProduct($pId){ //This displays just the product that was clicked on
			//After clicking the button for product's info
			$q = "SELECT * FROM product WHERE product_id= '$pId'";
			$getClickedProduct = $this->db->select($q);
			return $getClickedProduct;
		}
    }
?>