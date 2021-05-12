<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath. '/../lib/database.php');
include_once ($filepath. '/../helpers/format.php');
?>

<?php
/**
 *
 */
class cart
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
	public function add_cart($id,$quantity){
		$quantity = $this ->fm->validation($quantity);
		$quantity= mysqli_real_escape_string($this
            ->db->link,$quantity);
        $id = mysqli_real_escape_string($this
            ->db->link, $id);
		$sID =session_id();
		$query = "SELECT* FROM tbl_product WHERE productID='$id'";
		    $result = $this
                ->db
                ->select($query)-> fetch_assoc();
		
		$productName = $result['productName'];
		$price = $result['price'];
		$price_KM = $result['price_KM'];
		$image = $result['image'];

						//check cart
			$check_cart = "SELECT* FROM tbl_cart WHERE productID='$id'AND sID='$sID'";
		 $result_check = $this->db->select($check_cart); 
			if($result_check){
			
			$test =('<script>
  			if (confirm("Sản phẩm đã có trong cửa hàng \n Bạn muốn đến đó hơm !")) {
   		   location.replace("cart.php");
		  
  			} else {
    				location.replace("#");
  			}</script>');
							echo $test;
				
				
			}else{
				$query_insert = "INSERT INTO tbl_cart(productID,sID,productName,price,price_KM,quantity,image) VALUES('$id','$sID','$productName','$price','$price_KM','$quantity','$image')";
            $insert_cart = $this
                ->db
                ->insert($query_insert);
            if ($result)
            {
				header('Location:cart.php');
  				
            }
            else
            {
              header('Location:404.html');
				
            }
				
	}
		
	

			

		
	}
		public function get_product_cart(){
			$sID =session_id();
			$query="SELECT* FROM tbl_cart WHERE sID='$sID'";
			$result= $this ->db->select($query);
			return $result;
		}
	public function quantity_update_cart($cartID,$quantity){
	
        $cartID = mysqli_real_escape_string($this
            ->db->link, $cartID);	
			$quantity= mysqli_real_escape_string($this
            ->db->link,$quantity);
		$query = "UPDATE tbl_cart SET quantity='$quantity' WHERE cartID='$cartID'";
		$result = $this->db->update($query); 
		if($result){
			
			header('Location:cart.php');
			
				
			}else{
			$alert="<span style='
		
		font-size:30px;
		color:red;
	'>Update số lượng sản phẩm thất bại</span>";	
			return $alert;
	}
		}
		
	
	public function del_cart_product($cartID){
		$cartID= mysqli_real_escape_string($this
            ->db->link,$cartID);
		$query = "DELETE FROM tbl_cart WHERE cartID='$cartID'";
		$result =$this->db->delete($query); 
		if($result){header('Location:cart.php');}
		
	}
	public function check_quan_cart(){
		$sID =session_id();
			$query="SELECT* FROM tbl_cart WHERE sID='$sID'";
			$result= $this ->db->select($query);
		return $result;

	}
	
}
?>
