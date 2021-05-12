 
<?php include'include/header.php'?>
	   	 
 <?php
	if(isset($_GET['cartID'])){ 
		$cartID =$_GET['cartID'];
		$del_cart= $ct-> del_cart_product($cartID);
	}
	
	
	   if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['update_cart'])){
		   $cartID =$_POST['cartID'];
		 $quantity =$_POST['quantity'];
		$quantity_update_cart=$ct->quantity_update_cart($cartID,$quantity);
			
	}
			 ?>
<?php if(!isset($_GET['id'])){echo "<meta http-equiv='refresh' content='0,URL=?id=live'>";}?>

<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Giỏ hàng</title>
      <meta name="viewport" content="width=device-width", initial-scare="1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link href="css/cartstyle.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
     
	 <div class="container"> 
		 <?php
	if(isset($quantity_update_cart)){
		echo $quantity_update_cart;
		
	}
		 if(isset($del_cart)){
			 echo $del_cart;
			 
		 }
		
?>
		
 <table id="cart" class="table table-hover table-condensed"> 
	 
  <thead> 
   <tr> 
    <th style="width:40%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th>
	   <th style="width:10%">Giá KM</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead>
	 
	 <?php
	 $get_product_cart =$ct ->get_product_cart();
	   if($get_product_cart){
		   $subtotal =0;
		   $qty=0;
		   while($result=$get_product_cart->fetch_assoc()){
		   
	   
	 ?>
	
  <tbody>
	<tr>	<form action="" method="post"> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="admin/uploads/<?php echo $result['image']?>" alt="Sản phẩm 1" class="img-responsive" width="100%" name="image">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $result['productName']?></h4> 

     </div> 
    </div> 
   </td> 
   <td data-th="Price" name="price"><?php echo $result['price']?></td>
	<td data-th="Price_KM" name="price_KM"><?php echo $result['price_KM']?></td> 
    
		<td >
		
	    <input type="hidden" class="form-control text-center" name="cartID" value="<?php echo $result['cartID']?>" min="1">
	   <input class="form-control text-center" name="quantity" value="<?php echo $result['quantity']?>" type="number" min="1">
		
   </td> 
			<td data-th="Subtotal" class="text-center" name="totalprice"><?php 
		 $totalkm1= $result['price_KM'] + $result['price'];
		$totalkm2=$totalkm1 * $result['quantity'];
			  $totalnonkm=$result['price']*$result['quantity'];
			   $total=$totalkm2-$totalnonkm;
			   if(isset($total)){
				   echo $total;
				   
			   }
		
	   ?></td> 
   
   <td>
  		 	<button class="	btn btn-info btn-sm" name="update_cart"><i class="fa fa-edit"></i></button></form>  
  		<a href="?cartID=<?php echo $result['cartID']?>" >
    <button class="btn btn-danger btn-sm"  onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fa fa-trash-o"></i>
    </button></a>
   </td>
 		
  </tr><?php
	$qty= $qty + $result['quantity'];?>
  </tbody> <?php
	  	Session::set('qty',$qty);
	   ?>
	 <?php
			   $subtotal+=$total;
	   }
	   }
	 ?>
	  
	   

    <td><a href="trangchu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền: <?php  if(isset($subtotal)){
				   echo $subtotal;
				   
			   }?></strong>
    </td>
	   
    <td><a href="" class="btn btn-success btn-block btn-tt ">Thanh toán<i class="fa fa-angle-right"></i></a>
    </td>	  
   </tr> 
  </tfoot>
 </table>
    <span  style="font-size:30px; color:rgba(18,43,21,1.00); "><?php if($check_quan_cart){}else{echo'Thích thì mua mà không thích thì mua';}?></span>
  	
</div>
	  
	  <div class="w3-theme-border" style="position:fixed;padding:auto;bottom:30px;right:30px;max-width:450px;z-index:999">
<a href="contact.php">
	 <button type="button" class="btn2 btn-success2 btn-circle"style="width: 70px;    
height: 70px;  
border-radius: 35px;
background-color:rgba(37,0,235,1.00);border:rgba(37,0,235,1.00)" data-toggle="tooltip" data-placement="left" title="Ấn để liên hệ">
 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
           <i class="material-icons" style="font-size:30px">call</i>

</button> 
        </a>
</div>
	    <?php include'include/footer.php'?>
   </body>
</html>

