
<?php 

include'inc/header.php';
include'inc/sidebar.php';
 include'../classes/category.php'?>
<?php
	$cat= new category();
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$catName= $_POST['catName'];
		
		
		$insert_cat=  $cat->insert_category($catName);
		
	}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
				
               <div class="block copyblock"> 
                 <form action="catadd.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName" placeholder="Add product categories" class="medium" />
                            </td>
				
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
						<?php if(isset($insert_cat)){
					echo $insert_cat;}
					?>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>