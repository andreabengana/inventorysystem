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
<body>
	 <div class="container" style="margin-top: 50px;">
	 	<div class="row">
	 		<div class="col">
	 			<div class="card" style="width: 18rem;">
  					<a href="viewmonitordetail.php"><img class="card-img-top" src="resources/monitor.jpg" alt="Card image cap"></a>
  						<div class="card-body">
   							<p class="card-text">Total Number of Monitors: <?php echo $monitorcount?></p>
  						</div>
				</div>
	 		</div>
	 		<div class="col">
	 			<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="resources/monitor.jpg" alt="Card image cap">
  						<div class="card-body">
   							<p class="card-text">Total Number of Keyboard: <?php echo $kybcount?></p>
  						</div>
				</div>
	 		</div>
	 		<div class="col">
	 			<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="resources/monitor.jpg" alt="Card image cap">
  						<div class="card-body">
   							<p class="card-text">Total Number of Monitors: <?php?></p>
  						</div>
				</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>