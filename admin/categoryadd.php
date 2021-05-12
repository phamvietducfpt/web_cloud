<?php
   include('include/header.php');
   include '../classes/category.php';
   ?>
         <div class="row tm-edit-product-row">
          
            <div class="col-xl-6 col-lg-6 col-md-12">
                  <form action="add-product.php" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                     <div class="form-group mb-3">
                        <label
                           for="name"
                           >Product Name
                        </label>
                        <input
                           
                           name="productName"
                           type="text"
                           class="form-control validate"
                           required
                           placeholder="Enter Product Name..."
                           />
                     </div>
                       <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
                     </div>
                 </form>
             </div>
   <?php include 'include/footer.php';?>
