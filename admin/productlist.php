
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php';?>
<?php include_once'../helpers/format.php';?>
<?php 	$product =new product();
	$fm = new Format(); 
if(isset($_GET['productID'])){ 
		$id =$_GET['productID'];
		$del_pro=  $product->del_product($id);
	}
	
?>


<div class="grid_10">
    <div class="box round first grid">
        <h2>Post List</h2>
        <div class="block">
			
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>product ID</th>
					<th>product Name</th>
					<th>Category</th>
					<th>product_desc</th>
					<th>price</th>
					<th>price_KM</th>
					<th>Image</th>
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
					$productlist = $product -> show_product();
						if($productlist){
							$i=0;
							while($result = $productlist->fetch_assoc()){
								$i++;
						
				?>
				<tr class="odd gradeX">
					<td><?php echo $i?></td>
					<td><?php echo $result ['productName'] ?></td>
					<td><?php echo $result ['catName'] ?></td>
					<td><?php echo $fm->textShorten( $result ['product_desc'],50) ?></td>
					<td><?php echo $result ['price'] ?></td>
					<td><?php echo $result ['price_KM'] ?></td>
					<td><img src="uploads/<?php echo $result ['image'] ?>"width="80" ></td>
					<td><?php  
					if( $result ['type']==0){
						echo 'Non-Khuyến mãi';	
					}else{
								echo 'Khuyến mãi';
							}
							?></td>
					<td><a href="productedit.php?productID=<?php echo $result['productID']?>">	Edit</a> || <a onclick="return confirm('Are you want to delete?')" href="?productID=<?php echo $result ['productID'] ?>">Delete</a></td>
					
				</tr>
				<?php
							}
						}
				?>
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
