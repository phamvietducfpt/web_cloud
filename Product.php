   <?php include'include/header.php'?>
<?php if(!isset($_GET['proID']) || $_GET['proID'] ==NULL){
		echo "<script>window.location='404.html'</script>";
	}
	else{
		$id =$_GET['proID'];
		
	}
	   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
		 $quantity =$_POST['quantity'];
		$add_cart=  $ct-> add_cart($id,$quantity);
		
	}
			 ?>
   <?php 
		  $get_product_infor= $product->get_product_infor($id);
		  if($get_product_infor){
			  while($result_infor= $get_product_infor -> fetch_assoc()){
		  
		  ?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title><?php echo $result_infor['productName']?>-Vietducshop.com</title>
      <meta name="viewport" content="width=device-width", initial-scare="1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link href="css/Product.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
	
   <body>

     
	    
	   
	 
      <div class="container-fluid">
		 
         <img src="img/Xanh da trời Nhạt Thời trang Ảnh bìa Facebook (1).png" height="170px" width="100%">
         <div class="breakcumb">
            <ul>
               <li>
                  <a  href="trangchu.php" title="Trang Chủ">Trang Chủ</a>
                  <span> < </span>
               </li>
               <li><a  href="" title="Mâm-Căm Đùm Niềng"><?php echo $result_infor['catName']?></a><span> < </span></li>
               <li><a  href="" title="Căm Đùm Niềng"><?php echo $result_infor['productName']?></a>
               </li>
            </ul>
         </div>
         <div class="title">
            <h1><?php echo $result_infor['productName']?> </h1>
            <hr size="10">
         </div>
         <div class="del"></div>
         <div class="row">
            <div class="col-sm-10">
               <div class="row">
					<div class="preview col-md-7">
        
   <div class="preview-pic tab-content">
            
      <div class="tab-pane active" id="pic-1"><img src="admin/uploads/<?php echo $result_infor['image']?>" width="100px" height="500px" >
      </div>
            
      <div class="tab-pane" id="pic-2"><img src="img/EXCEL-TAKASAGO-RIM-ASIA-5.jpg">
               
      </div>
            
      <div class="tab-pane" id="pic-3"><img src="img/takasago-excel-rim-2019-Black-1.6-1.85-5.jpg">
               
      </div>
            
      <div class="tab-pane" id="pic-4"><img src="img/takasago-excel-rim-2019-blue.jpg">
               
      </div>
            
      <div class="tab-pane" id="pic-5"><img src="img/TAKASAGO-EXCEL-RIM-ASIA-VIET-NAM-ORANGE-1.jpg">
               
      </div>
	   
           
   </div>
        
   <ul class="preview-thumbnail nav nav-tabs">
      
      
            
      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/TAKASAGO-EXCEL-RIM-ASIA-VIET-NAM-ALL-COLOR-4.jpg"></a>
               
      </li>
            
      <li><a data-target="#pic-2" data-toggle="tab"><img src="img/EXCEL-TAKASAGO-RIM-ASIA-5.jpg"></a>
               
      </li>
            
      <li><a data-target="#pic-3" data-toggle="tab"><img src="img/takasago-excel-rim-2019-Black-1.6-1.85-5.jpg"></a>
               
      </li>
            
      <li><a data-target="#pic-4" data-toggle="tab"><img src="img/takasago-excel-rim-2019-blue.jpg"></a>
               
      </li>
            
      <li><a data-target="#pic-5" data-toggle="tab"><img src="img/TAKASAGO-EXCEL-RIM-ASIA-VIET-NAM-ORANGE-1.jpg"></a>
               
      </li>
	   
           
   </ul>
       
</div>
                  <div class="col-sm-5">
                     <div class="infor" style="margin-top:40px">
                        <h2><b>Nhà sản xuất:</b>EXCEl ASIA</h2>
                        <br>
                        <h2><b>Tình Trạng:</b>Full Box-Mới 100%</h2>
                        <br>
                        <h2><b>Bảo hành:</b> 24Tháng</h2>
                        <br>
                        <h2><b>Màu:</b> 7 màu</h2>
                        <br>
                        <a style="font-size:20px"> Giá cũ:<del><?php echo $result_infor ['price']?><u>đ</u></del></a><br>
                        <a style="font-size:30px">
                           Giá KM:
                           <a2 style="color:red"><?php echo $result_infor ['price_KM']?><u>đ</u></a2>
                        </a>
                        <span class="badge badge-danger">-25%</span><br>
                        <form action="" method="post">
						 <p>Số lượng:  
                        <input class="form-control text-center" value="1" type="number" name="quantity" min="1">
                        </p>
                        <input type="submit" name="submit" class="btn btn-success" value="Đặt hàng"> </input>
						
						 
							</form>
					   <?php
						if(isset($add_cart)){
							echo $add_cart;
							exit;
						}		 	
			  
						 ?>
					 
				
					
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-2">
               <img   src="img/pint (1).png" height="600px" width="100%">
				
			</div>
			
			 	
			
         </div>
         <hr size="5px">
         <div class="row">
            <div class="col-sm-8">
               <h2>Đặc điểm nổi bật của bánh căm</h2>
               <div class="img" style="margin-top:50px">
                  <img src="img/117321970_1164181460625534_7181966660855807633_o.jpg" width="800px" height="500px"><br>
                  <div class="review">
                     <h3 >Thoải mái hơn khi di chuyển</h3>
                     <a style="text-indent:20px;">Việc lắp bánh căm khiến cho xe bạn trở nên nhẹ hơn bánh mâm rất nhiều. Giúp cho xe di chuyển trở nên nhẹ nhàng,uyển chuyển hơn.Những cây căm nối từ đùm với vành xe, có độ đàn hồi tốt, giúp cho xe di chuyển những đoạn đường gồ ghề sẽ êm hơn và không bị tê tay. Bánh căm giúp cho phản lực từ mặt đường lên cổ lái sẽ giảm, nó sẽ hoạt động như 1 phần của hệ thống treo.</a>
                  </div>
                  <img style="margin-top:10px" src="img/117203031_1675533172612872_4221194890309760343_o.jpg"width="800px" height="700px"><br>
                  <div class="review">
                     <h3 >Giúp cho xe trở nên sáng hơn</h3>
                     <a style="text-indent:20px;">Giúp cho chiếc xe của bạn trở nên sáng,nhỏ gọn và nổi bật hơn rất nhiều so với bánh mâm thông thường.Bánh căm tạo ra 1 kiểu dáng hoài cổ nên những người thích hoài cổ sẽ ưa chuộng loại này</a>
                  </div>
                  <img src="img/110207176_2705698386196592_1470612933196188962_o.jpg" width="800px" height="500px" style="margin-top:10px"><br>
                  <span class="badge badge-primary"><i class="material-icons" style="font-size:12px">thumb_up</i>Like</span>
                  <span class="badge badge-primary"><i class="material-icons" style="font-size:12px">share</i>Share</span>
               </div>
            </div>
            <div class="col-sm-4">
				<div class="product-infor">
               <table class="table ">
                  <thead>
                     <tr>
                        <th>Thông số kỹ thuật</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Hãng SX niềng:</td>
                        <td>Excel Asia</td>
                     </tr>
                     <tr>
                        <td>Hãng SX căm:</td>
                        <td>Nova </td>
                     </tr>
                     <tr>
                        <td>Size niềng:</td>
                        <td>1.4 1.6</td>
                     </tr>
                     <tr>
                        <td>Năm SX:</td>
                        <td>2020</td>
                     </tr>
                     <tr>
                        <td>Màu:</td>
                        <td>Trắng Đen Đỏ Cam Vàng Xanh Xám</td>
                     </tr>
                     <tr>
                        <td>Thời gian bảo hành:</td>
                        <td>24 Tháng</td>
                     </tr>
                  </tbody>
               </table>
					</div>
				<div class="poster-covid">
				 <img src="img/Thiết kế không tên.png"width="300px" height="900px">
				</div>
            </div>
         </div>
         <div class="img-sale">
            <img src="img/Phuộc onlins dành cho tay ga.png" width="100%" height="500px">
         </div>
		   <?php
			  }
		  }
		  ?>
         <div class="product-same">
            <h2>Sản phẩm tương tự</h2>
            <div class="card boder-0">
               <div class="card-body" >
                  <div id="demo1" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                      <div class="carousel-inner">
						 			   
                        <div class="carousel-item active">
							 
                           <div class="row">
				<?php $get_product_KM= $product ->getproduct_khuyenmai();
			 	if ($get_product_KM){
					while($result =$get_product_KM->fetch_assoc()){
				
			 ?>
                              <div class="col-sm-2">
                                 <div class="content">
                                    <a href="product.php?proID=<?php echo $result ['productID']?>">
                                       <div class="content-overlay"></div>
                                       <img class="card-img-top content-image rounded " src="admin/uploads/<?php echo $result ['image']?>"alt="Card image" width="100%" height="200">
                                       <div class="content-details fadeIn-bottom">
                                          <h3 class="content-title">
                                             <button  href="cart.php" type="button" class="btn btn-default">Đặt hàng</button>
                                          </h3>
                                       </div>
                                    </a>
                                 </div>
                                 <p class="card-title " align="center"><a class="card-link" href="product.php?proID=<?php echo $result ['productID']?>"</a><?php echo $result ['productName']?></p>
								  <div class="card-text" align="center">
                                 <a style="font-size:20px"> <del><?php echo $result ['price']?><u>đ</u></del></a><br>
                        <a style="font-size:30px">
                         
                           <a2 style="color:red"><?php echo $result ['price_KM']?><u>đ</u></a2>
                        </a>
                        <span class="badge badge-danger">-25%</span>
                              </div>
							   </div>
                            <?php }} ?>
                           </div>
						
                        </div>
                        <div class="carousel-item">
                           <div class="row">
							   <?php $get_product_KM= $product ->getproduct_khuyenmai();
			 	if ($get_product_KM){
					while($result =$get_product_KM->fetch_assoc()){
				
			 ?>
								
                              <div class="col-sm-2">
                                 <div class="content">
                                    <a href="Product.php?proID=<?php echo $result ['productID']?>">
                                       <div class="content-overlay"></div>
                                       <img class="card-img-top rounded" src="admin/uploads/<?php echo $result ['image']?>"alt="Card image" width="100%"alt="Card image"  width="100%" height="200">
                                       <div class="content-details fadeIn-bottom">
                                          <h3 class="content-title">
                                             <button  href="cart.php" type="button" class="btn btn-default">Đặt hàng</button>
                                          </h3>
                                       </div>
                                    </a>
                                 </div>
                                  <p class="card-title " align="center"><a class="card-link" href="Product.php?proID=<?php echo $result ['productID']?>"</a><?php echo $result ['productName']?></p>
                                 <p class="card-text" align="center">
									 <a style="font-size:20px"><del><?php echo $result ['price']?><u>đ</u></del></a>
                        <a style="font-size:25px"><br>
                          
                           <a2 style="color:red"><?php echo $result ['price_KM']?><u>đ</u></a2>
                        </a><span class="badge badge-danger">-10%</span>
								  
								  </p>
                              </div>
                           
							      <?php }} ?>
                           </div>
                        </div>
						
                     </div>
                     <!-- Control -->
                     <a class="carousel-control-next control-next" href="#demo1" data-slide="next" >
                     <span class="carousel-control-next-icon "></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
		 
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