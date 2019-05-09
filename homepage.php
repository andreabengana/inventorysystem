<?php
session_start();

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'includes/navbar.inc.php';
	require 'includes/assetcounter.inc.php';
}
?>
<link rel="stylesheet" type="text/css" href="design/homepagedesign.css">
<body>
	<label for="main-container" style="margin-left: 20px; margin-top: 20px;"><h3> Total Number of Assets: <?php echo $totalassets?></h3></label>
	 <div class="container" style="margin-top: 50px;" id="main-container">
	 	<div class="row">
	 		<div class="col">
	 			<div class="card" style="width: 18rem;">
	 				<a href="viewmonitordetail.php">
  					<img class="card-img-top mx-auto d-block" src="resources/monitor.png" style="width: 100px; height: 100px;" alt="Card image cap">
  					</a>
  						<div class="card-body">
   							 <p class="card-text text-center">Monitor Stock: <?php echo $monitorcount?></p>
  						</div>
				</div>
	 		</div>
	 		<div class="col">
	 			<div class="card" style="width: 18rem;">
  					<img class="card-img-top mx-auto d-block" src="resources/keyboard.png" style="width: 100px; height: 100px;" 
  					alt="Card image cap">
  						<div class="card-body">
   							 <p class="card-text text-center">Keyboard Stock: <?php echo $keyboardcount?></p>
  						</div>
				</div>
	 		</div>
	 		<div class="col">
	 			<div class="card" style="width: 18rem;">
  					<img class="card-img-top mx-auto d-block" src="resources/mouse.png" style="width: 100px; height: 100px;" alt="Card image cap">
  						<div class="card-body">
   							 <p class="card-text text-center">Mouse Stock: <?php echo $mousecount?></p>
  						</div>
				</div>
	 		</div>
	 		</div>
	 		<div class="row" style="margin-top: 50px;">
	 			<div class="col">
	 				<div class="card" style="width: 18rem;">
  					<img class="card-img-top mx-auto d-block" src="resources/avr.png" style="width: 100px; height: 100px;" alt="Card image cap">
  						<div class="card-body">
   							 <p class="card-text text-center">Power Source Stock: <?php?></p>
  						</div>
					</div>
	 			</div>
	 			<div class="col">
	 				<div class="card" style="width: 18rem;">
  					<img class="card-img-top mx-auto d-block" src="resources/headphones.png" style="width: 100px; height: 100px;" alt="Card image cap">
  						<div class="card-body">
   							 <p class="card-text text-center">Headphones Stock: <?php?></p>
  						</div>
					</div>
	 			</div>
	 			<div class="col">
	 				<div class="card" style="width: 18rem;">
  					<img class="card-img-top mx-auto d-block" src="resources/system-unit.png" style="width: 100px; height: 100px;" alt="Card image cap">
  						<div class="card-body">
   							 <p class="card-text text-center">System Unit Stock: <?php?></p>
  						</div>
					</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>