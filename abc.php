<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
	include 'vehicle.php'
	?>
</head>


<body>	

		

	
	<tr>
		<button onclick="Driving()" >Xe hơi</button>
		<p id="demo"></p>
	</tr>
	<tr>
	<button onclick="Flying()">Máy bay</button>
		<p id="demo1"></p>
	</tr>
		
	
	
	
	
	
	
	
	<script>
function Driving() {
  document.getElementById("demo").innerHTML = "<?php 
$vehicle =  new Vehicle(new GoByDrivingAlgorithm()); 
		$vehicle->go();  ?>";
}

function Flying() {
	 document.getElementById("demo1").innerHTML = "<?php   $vehicle->setGoAlgorithm(new GoByFlyingAlgorithm());
		 $vehicle->go();
		 ?>";
}
</script>
</body>
</html>