<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Trang đăng nhập-Vietducshop.com</title>
      <meta name="viewport" content="width=device-width", initial-scare="1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link href="css/loginstyle.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	  

   </head>
   <body>
	    <?php include'include/header.php'?>
	 <div class="container">
 <div class="row">
	 <div class="col-sm-5">
	 <h2 align="center">Đăng nhập</h2>
  
  <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">Username:</label>
		<div class=	"input-group">
			<div class="input-group-prepend">
			<span class="input-group-text"><i class="material-icons">account_circle</i></span>
			</div>	
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
		<div class="input-group">
			<div class="input-group-prepend">
			<span class="input-group-text"><i class="material-icons">lock</i></span>
			</div>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"  id="remember" name="remember" required> Remember me
        
      </label>
    </div>
    <button type="submit" class="btn btn-outline-dark" align="center">Login</button>
  </form>
	 </div>
	 <div class="col-sm-1">	
	 </div>
	 <div class="col-sm-6">
		 <h2 align="center">Đăng ký</h2>
		 <p align="center">Chưa có tài khoản,vui lòng bạn đăng ký</p>
		 <form action="/action_page.php" class="needs-validation" novalidate>
			<div class="form-group">
      <label for="uname">First and last name:</label>
		<div class=	"input-group">
			<div class="input-group-prepend">
			<span class="input-group-text"><i class="material-icons">account_circle</i></span>
			</div>	
      <input type="text" class="form-control" id="newuname" placeholder="Enter username" name="newuname" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			<label for="uname">Date of birth:</label>
			 <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy" name="newbirthday"> 
				 <div class="input-group">
					 <div class="input-group-prepend">
				 <span class="input-group-addon input-group-text"><i class="material-icons" style="font-size:20px">date_range</i></span></div><input class="form-control" readonly="" type="text">
				 </div>
				 </div>
			  <div class="form-group">
      <label for="uname">Address:</label>
		<div class=	"input-group">
			<div class="input-group-prepend">
			<span class="input-group-text"><i class="material-icons">home</i></span>
			</div>	
      <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			  <div class="form-group">
      <label for="uname">Email:</label>
		<div class=	"input-group">
				
      <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" required>
		 <div class="input-group-append">
      <span class="input-group-text">@gmail.com</span>
    </div>
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			 	  <div class="form-group">
      <label for="uname">Number Phone:</label>
		<div class=	"input-group">
			<div class="input-group-prepend">
			<span class="input-group-text"><i class="material-icons">phone_iphone</i></span>
			</div>	
      <input type="text" class="form-control" id="phone" placeholder="Enter your number phone" name="phone" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			 <div class="form-group">
      <label for="pwd">Password:</label>
		<div class="input-group">
			<div class="input-group-prepend">
			<span class="input-group-text"><i class="material-icons">lock</i></span>
			</div>
      <input type="password" class="form-control" id="newpwd" placeholder="Enter password" name="newpswd" required>
			</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			<button type="submit" class="btn btn-outline-dark" value="Submit">Submit</button>
		 </form>
	 </div>
</div>
		 <br>
<script type="text/javascript">
$(function () {  
$("#datepicker").datepicker({         
autoclose: true,         
todayHighlight: true 
}).datepicker('update', new Date());
});
</script>

		 <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
	function validateForm()  {
 
             var myField = document.getElementById("phone");
             var value = myField.value;
 
             if( value == "" || isNaN(value) || value < 0 || value > 10)  {
                alert("Invalid input!");
                myField.focus();
                return false;
             }
 
             
         }
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
		
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
 
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