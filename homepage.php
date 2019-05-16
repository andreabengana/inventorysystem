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
	<div class="container mx-auto d-block">
		<div class="row">
		<div class="col">
		<div class="card bg-primary mb-3" style="max-width: 18rem;">
  			<div class="card-header text-center">Wynsum, Ortigas</div>
  			<div class="card-body">
    		<h5 class="card-title">Total Assets: </h5>
    		<h1 class="text-center"> <?php echo $wynsumassets?> </h1>
  			</div>
  		</div>
		</div>
		<div class="col">
		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  			<div class="card-header text-center">Cybergate, Boni</div>
  			<div class="card-body">
    		<h5 class="card-title">Total Assets: </h5> 
    			<h1 class="text-center"><?php echo $cybergateassets ?></h1>
    		<p class="card-text"></p>
  			</div>
  		</div>
		</div>
		<div class="col">
		<div class="card text-white bg-primary mb-3 col-lg-3" style="max-width: 18rem;">
  			<div class="card-header text-center">EcoTower, BGC</div>
  			<div class="card-body">
    		<h5 class="card-title">Total Assets: </h5>
    		<p class="card-text"> <?php echo $ecotowerassets ?></p>
  			</div>
  		</div>
		</div>
	</div>
	</div>

</body>
</html>