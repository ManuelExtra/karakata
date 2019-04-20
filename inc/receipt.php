<?php
    // we include the database and the format classes
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../config/config.php');
    include_once ($filepath.'/Database.php');
    
    class receipt{
        public function printReceipt($productId){ //$productId is the foreign key that maps both product table and product_order table
            $productDetails = $this->db->select("SELECT * FROM product INNER JOIN product_order ON product.product_id = product_order.product_order_id");
            if($product->num_rows == 1){
                
                echo "<table><tr> <th>#</th> <th></th> <th></th> <th></th> <th></th></tr>";
                while($viewDetails = $productDetails->fetch_assoc()){   
					echo "<tr><td>";
					echo $viewDetails['product.product_id'];
					echo "</td><td>";
					echo $viewDetails['product.product_name'];
					echo "</td><td>";
					echo $viewDetails['product.product_desc'];
					echo "</td><td>";
					echo $viewDetails['product.selling_price'];
					echo "</td><td>";
                }
                echo "</table>";

            }
        }
    }
?>