	<?php
	//include ('lib/test3.php');
	include( 'classes/category.php');
	include(  'lib/session.php');
	Session::init();
?>
<?php
 include 'lib/test.php';?>
 <?php // include 'helpers/format.php';?>
<?php 'lib/test2.php'?>
<?php spl_autoload_register(function($class){
	include_once "classes/".$class.".php";
	});

	$db = new Database();
	$fm = new Format();
	$ct = new cart();
	$us = new user();
	$product = new product();
	$cat = new category();
	

?> 
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!--navbar1-->
      <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top nav-tabs navbar-toggleable-sm bg-faded"  >
         <a class="navbar-brand" href="#">
         <img src="img/Việt Đức Shop.png" alt="logo" style="width:100px;">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="trangchu.php" >Trang Chủ</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="login.php">Thông tin</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.php">Liên hệ</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="baohanh.php">Chính sách bảo hành</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="cart.php">Giỏ Hàng</a>   
               </li>
            </ul>
         </div>
         <div class="navbar-right">
            <a class="user-link-login" href="login.php">Đăng nhập</a>
            <form class="form-inline" action="trangchu.php">
               <div class="input-group ">
                  <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" id="idproduct" name="idproduct"  required >
                  <div class="input-group-append">
                     <a class="input-group-text" href="trangchu.php"><i class="material-icons" >search</i></a>
                  </div>
               </div>
            </form>		
         </div>
      </nav>
      <!--navbar2-->
      <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top fixed-top-2 nav-tabs toggleable-sm bg-faded" >
    <div class="dropdown">
         <a class="nav-link dropdown-toggle drop-name"  id="navbardrop" data-toggle="dropdown"><span class="navbar-toggler-icon nav-item "></span> Danh sách sản phẩm</a>
         <div class="dropdown-menu">
				<?php
							$cat= new category ();
							$catlist =$cat -> show_category();
								if($catlist){
									while($result =$catlist ->fetch_assoc()){
								
								
							?>
                            <li><a class="card-link" href="productofcat.php?catID=<?php echo $result['catID']?>"><?php echo $result['catName']?></a></li>
                           <?php
									}
								}
							?>
         </div>
			  </div>
         <span class="navbar-text ">ĐC:46 Làng Tăng Phú,TNPA,Q9 / SĐT:0769619768</span><hr>
         <div class=" navbar-right">
            <a  class="cart-link">
            <i class="material-icons" >add_shopping_cart</i>
            <span><?php
				$check_quan_cart =$ct->check_quan_cart();
				if($check_quan_cart){
					$qty = Session::get('qty');
						echo $qty;
				}
				else{
					echo '0';
				}?>  item</span>
            </a>
         </div>
      </nav>