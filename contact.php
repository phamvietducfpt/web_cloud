<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Liên hệ-Vietducshop.com</title>
      <meta name="viewport" content="width=device-width", initial-scare="1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link href="css/loginstyle.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  

   </head>
   <body>
       <?php include'include/header.php'?>
      
	<div class="container">
		<h2>Live Support</h2>
		<p style="font-size:25px"><span>24/24h | all days of the week and of the year &nbsp;&nbsp; Live Technical Support</span></p>
		<a style="font-size:20px">All your questions will be answered by our consulting team as soon as possible.All your feedback is very important to us. We always listen to your comments in order to improve our services to bring you the best experience.
Please fill in the following information about your questions and experiences when shopping at VIETDUCSHOP</a>
		<div class="row" style="margin-top:40px;margin-bottom: 30px">
			<div class="col-sm-8">
			<h3><b>Contact US</b></h3>
		<form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">Name:</label>
		<div class=	"input-group">
			
			
			
      <input type="text" class="form-control" id="uname" placeholder="Enter yourname" name="uname" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			  <div class="form-group">
      <label for="uname">Email:</label>
		<div class=	"input-group">
			
      <input type="text" class="form-control" id="email" placeholder="Enter youremail" name="email" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			  <div class="form-group">
      <label for="uname">Your phone:</label>
		<div class=	"input-group">
			
      <input type="text" class="form-control" id="phone" placeholder="Enter yourphone" name="phone" required>
		
		</div>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
			<div class="form-group">
      <label for="comment">Comment:</label>
				<div class="input-group">
      <textarea class="form-control" rows="5" id="comment" name="text"  placeholder="Enter yourcomment" required></textarea>
					</div>
    </div>
			 <div class="form-group">
      <input type="file" class="form-control-file border" name="file">
    </div>
    
    
    <button type="submit" class="btn btn-outline-dark" align="center">Submit</button>
  </form>
			</div>
			<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
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
			<div class="col-sm-4" style="margin-top:40px">
				
				<h2>VIETDUCSHOP Information:</h2>
				Address:<a>46 Làng Tăng Phú street,Tăng Nhơn Phú A Ward,District 9,HCM City</a><br>
				Phone:<a>(+89)76 961 9768</a><br>
				Email:<a>ducpvbsaf190030@fpt.edu.vn</a><br>
				Follow on:<a  class="inf-link" href="" ><u>Facebook</u></a> , <a class="inf-link" href=""><u>Youtube</u></a>
			</div>
			</div>
	</div>
	  
	  <div class="w3-theme-border" style="position:fixed;padding:auto;bottom:30px;right:30px;max-width:450px;z-index:999">
<a href="#">
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