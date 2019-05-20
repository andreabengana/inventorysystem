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
		<div class="col-lg-3">
		<div class="card bg-primary mb-3" style="max-width: 18rem;">
  			<i class="fa fa-map-pin fa-3x mx-auto d-block" aria-hidden="true" style="margin-top: 20px;"></i><div class="card-header text-center">Wynsum, Ortigas</div>
  			<div class="card-body">
    		<h5 class="card-title text-center">Total Available Assets: </h5>
    		<h1 class="text-center"> <?php echo $wynsumassets?> </h1>
  			</div>
  		</div>
		</div>
		<div class="col-lg-3">
		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
		<i class="fa fa-map-pin fa-3x mx-auto d-block" aria-hidden="true" style="margin-top: 20px;"></i><div class="card-header text-center">Cybergate, Boni</div>
  			<div class="card-body">
    		<h5 class="card-title text-center">Total Available Assets: </h5> 
    		<h1 class="text-center"><?php echo $cybergateassets?></h1>
  			</div>
  		</div>
		</div>
		<div class="col-lg-3">
		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
		<i class="fa fa-map-pin fa-3x mx-auto d-block" aria-hidden="true" style="margin-top: 20px;"></i><div class="card-header text-center">EcoTower, BGC</div>
  			<div class="card-body">
    		<h5 class="card-title text-center">Total Available Assets: </h5>
    		<h1 class="text-center"> <?php echo $ecotowerassets?></h1>
  			</div>
  	</div>
		</div>
    <div class="col-lg-3">
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <i class="fa fa-building-o fa-3x mx-auto d-block" aria-hidden="true" style="margin-top: 20px;"></i><div class="card-header text-center">Anderson Group</div>
        <div class="card-body">
        <h5 class="card-title text-center">Total Available Assets: </h5>
        <h1 class="text-center"> <?php echo $andersonassets?></h1>
        </div>
    </div>
    </div>

	</div>
<div class="table-responsive">
            <table id="employee_data" class="table table-bordered text-center table-striped table-earning">  
                <thead class="table-primary">  
                    <tr>  
                        <td>Product ID</td>  
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>  
                        <td>Asset tag</td>
                        <td>Branch</td>
                        <td>Date Received </td>  
                    </tr>  
                </thead>
          <?php 
                $sql = "SELECT * FROM tblProducts WHERE productBranch = 'Wynsum' AND productStatus = 'Available';";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productID"].'</td>  
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productTag"].'</td>   
                        <td>'.$row["productBranch"].'</td>
                        <td>'.$row["dateAccepted"].'</td>
                    </tr>';
                }
                ?>
    </table>
</div>

	</div>

</body>
</html>