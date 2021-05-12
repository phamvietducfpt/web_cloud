
<?php



include 'inc/header.php';
include 'inc/sidebar.php';
include '../classes/category.php'?>
<?php
	
	if(!isset($_GET['catID']) || $_GET['catID'] ==NULL){
		echo "<script>window.location='catlist.php'</script>";
	}
	else{
		$id =$_GET['catID'];
		
	}
	$cat= new category();
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$catName= $_POST['catName'];
		
		
		$update_cat=  $cat->update_category($catName,$id);
		
	}
	
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Edit New Category</h2>
				
               <div class="block copyblock"> 
				   <?php if(isset($update_cat)){
					echo $update_cat;}
					?>
						<?php
							$get_cate_name =$cat->getcatbyid($id);
						if($get_cate_name){
							while ($result= $get_cate_name->fetch_assoc()){
							
						?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName" placeholder="Edit product categories" class="medium" value="<?php echo $result['catName']?>" />
                            </td>
				
                        </tr>
						<tr> 
                            <td>
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
<?php include 'inc/footer.php';?>