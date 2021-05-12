<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Shopvietduc.com</title>
      <meta name="viewport" content="width=device-width", initial-scare="1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link href="css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
     <?php
	   include 'include/header.php'
	   ?>
      <!--carousel img-->
      <div id="demo"  class="carousel slide" data-ride="carousel">
         <!-- The slideshow -->
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="img-responsive" src="img/heroku/hinh2.jpg" alt="Dream"width="100%" height="700">
               <div class="carousel-caption">
                  <h3>Việt Đức Shop</h3>
                  <p>0769619768 <br>
                     46 Làng Tăng Phú,TNPA,Q9
                  </p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/heroku/hinh3.jfif" alt="Sonic" width="100%" height="700">
               <div class="carousel-caption">
                  <h3>Việt Đức Shop</h3>
                  <p>0769619768 <br>
                     46 Làng Tăng Phú,TNPA,Q9
                  </p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/heroku/hinhnen.jpg"	 alt="Vario" width="100%" height="700">
               <div class="carousel-caption">
                  <h3>Việt Đức Shop</h3>
                  <p>0769619768<br>
                     46 Làng Tăng Phú,TNPA,Q9
                  </p>
               </div>
            </div>
         </div>
         <!-- Left and right controls -->
         <a class="carousel-control-prev" href="#demo" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#demo" data-slide="next">
         <span class="carousel-control-next-icon"></span>
         </a>
      </div>
      <div class="container-fluid">
         <div class="card border-0"  >
			
            <div class="card-header" style="background-color:rgba(249,6,10,0.80)">Sản phẩm bán chạy</div>
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
                              <div class="col-sm-2" >
                                 <div class="content" >
                                    <a href="product.php?proID=<?php echo $result ['productID']?>">
                                       <div class="content-overlay"></div>
                                       <img class="card-img-top content-image rounded " src="admin/uploads/<?php echo $result ['image']?>"alt="Card-image" width="100%" height="200">
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
						
                     </div>
                     <!-- Control -->
                     <a class="carousel-control-next control-next" href="#demo1" data-slide="next" >
                     <span class="carousel-control-next-icon "></span>
                     </a>
                  </div>
               </div>
	  
         </div>
      
         <!-- đồ chơi xe -->
         <div class="card border-0" >
            <div class="card-header" style="background-color:rgba(249,6,10,0.80)">
               Made by Việt Đức Shop
               <a href="" style="color:Yellow; float:right" >Xem tất cả</a>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-3 " >
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image"  width="60%" height="200" >
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">Bánh căm RCB chế cho Vario</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image" width="60%" height="200" >
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">Sh 150i Phuộc onlins nồi pô</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image" width="60%" height="200">
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">8 Cây RCB trắng cho Vario/Click</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image" width="60%" height="200">
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">Sonic 150R full option</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image"  width="60%" height="200">
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">Waye A dọn full kiểng</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image"  width="60%" height="200">
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">mâm 5cây Apido cho Exeiter</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded " src="img/heroku/hinh3.jfif" alt="Card image"  width="60%" height="200">
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">Honda CBR250RR bánh căm RCB</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
                  <div class="col-sm-3">
                     <div class="content">
                        <a href="product.php">
                           <div class="content-overlay"></div>
                           <img class="card-img-top rounded" src="img/heroku/hinh3.jfif" alt="Card image"  width="60%" height="200">
                           <div class="content-details fadeIn-bottom">
                              <h3 class="content-title">
                                 <button  href="product.php" type="button" class="btn btn-default">Liên hệ</button>
                              </h3>
                           </div>
                        </a>
                     </div>
                     <p class="card-title" align="center"><a class="card-link" href="product.php">Ducati Panigale full option</a></p>
                     <p class="card-text text-danger" align="center"></p>
                  </div>
               </div>
               <ul class="pagination justify-content-center" style="margin-top: 20px ">
                  <li class="page-item disabled"><a class="page-link" href="">Trước</a></li>
                  <li class="page-item"><a class="page-link" href="">1</a></li>
                  <li class="page-item"><a class="page-link" href="">2</a></li>
                  <li class="page-item"><a class="page-link" href="">3</a></li>
                  <li class="page-item"><a class="page-link" href="">...</a></li>
                  <li class="page-item"><a class="page-link" href="">Tiếp theo</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="brands" style="margin:40px 100px">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-3 mt-md-0 mt-3"style="width:160px">
                  <img src="img/unnamed.jpg" style="width: 100%;
                     cursor:default;
                      height:70px;background-color:white">
               </div>
               <div class="col-sm-3 mt-md-0 mt-3"style="width:160px">
                  <img src="img/1918-211530472-yss_logo.jpg" style="width: 100%;
                     cursor:default;
                     height:70px">
               </div>
               <div class="col-sm-3 mt-md-0 mt-3"style="width:160px">
                  <img src="img/tải xuống (1).png"style="width: 100%;
                     cursor:default;
                     height:70px">
               </div>
               <div class="col-sm-3 mt-md-0 mt-3" style="width:160px">
                  <img src="img/021f6ecb424b3f50799fbf87778b5bf4.png"style="width: 100%; cursor:default; height:70px; ">
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