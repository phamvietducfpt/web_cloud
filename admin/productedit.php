
<?php include 'inc/header.php';?>

<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php'?>
<?php
	$product= new product();
if(!isset($_GET['productID']) || $_GET['productID'] ==NULL){
		echo "<script>window.location='productlist.php'</script>";
	}
	else{
		$id =$_GET['productID'];
		
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

		
		
		$update_product=  $product->update_product($_POST,$_FILES,$id);
		
	}

?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Product</h2>
        <div class="block">    
			<?php
				if(isset($update_product)){
					echo $update_product;
				}
			?>
			<?php
			$get_product_by_id= $product ->getproductbyid($id);
				if($get_product_by_id){
					while($result_product =$get_product_by_id-> fetch_assoc()){
				
			
			?>
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="productName" value="<?php echo $result_product['productName'] ?>" class="medium" >
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>Select Category</option>
							<?php
							$cat= new category ();
							$catlist =$cat -> show_category();
								if($catlist){
									while($result =$catlist ->fetch_assoc()){
								
								
							?>
                            <option
									<?php if($result['catID']==$result_product['catID']){echo 'selected';}?>
									value="<?php echo $result['catID']?>"><?php echo $result['catName']?></option>
                           <?php
									}
								}
							?>
                        </select>
                    </td>
                </tr>
			
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="product_desc" class="tinymce" <?php echo $result_product['product_desc'] ?> ></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo $result_product['price'] ?>" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price_KM</label>
                    </td>
                    <td>
                        <input type="text" name="price_KM" value="<?php echo $result_product['price_KM'] ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
						<img src="uploads/<?php echo $result_product ['image'] ?>"width="100" ><br>
                        <input type="file" name="image"></input>
                    </td>
                </tr>
				<tr>
					<tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
						
                       <select id="select" name="type">
						   <option>Product Type</option>
						   <?php if ($result_product['type'] ==0){
						   ?>
							
						<option selected value ="0">Non-Khuyến Mãi</option>
						<option  value ="1">Khuyến Mãi</option>
								<?php }else{
						   ?>
						   
						   <option   value ="0">Non-Khuyến Mãi</option>
						<option  selected value ="1">Khuyến Mãi</option>
						   <?php
							}
						   ?>
						</select> 
                    </td>
                </tr>
            
                    
                    <td >
                        <input type="submit" name="submit" Value="Update" />
                    </td>
					
                </tr>
            </table>
            </form>
			<?php
			}
			}
			?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';

?>
