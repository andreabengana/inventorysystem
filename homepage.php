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
            <caption style="caption-side:top;">List of Available Stocks at Wynsum, Ortigas Branch</caption>
                <thead class="table-primary">  
                    <tr>  
                        <td>Asset Tag</td>
                        <td>Supplier Code</td>  
                        <td>Brand</td>  
                        <td>Model/Serial Number</td>  
                        <td>Description</td>  
                        <td>Branch</td>
                        <td>Date Purchased</td>
                        <td>Date Received</td>  
                    </tr>  
                </thead>
          <?php 

          //check if the starting row variable was passed in the URL or not
      if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
        //we give the value of the starting row to 0 because nothing was found in URL
              $startrow = 0;
      //otherwise we take the value from the URL
            } else {
                $startrow = (int)$_GET['startrow'];
                }

                $sql = "SELECT * FROM tblProducts WHERE productBranch = 'Wynsum' AND productStatus = 'Available' LIMIT $startrow,10;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productTag"].'</td>   
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productBranch"].'</td>
                        <td></td>
                        <td>'.$row["dateAccepted"].'</td>
                    </tr>';
                }
                  //now this is the link..
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+10).'">
              <button class="btn btn-lg btn-primary pull-right">Next</button></a>';
  
              $prev = $startrow - 10;
  
              //only print a "Previous" link if a "Next" was clicked
              if ($prev >= 0)
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">
              <button class="btn btn-lg btn-primary">Prev</button></a>';
                ?>
    </table>


 
<div class="table-responsive">
            <table id="employee_data" class="table table-bordered text-center table-striped table-earning">  
            <caption style="caption-side:top;">Total Number of Available Stocks per Asset at Wynsum, Ortigas Branch</caption>
                <thead class="table-primary">  
                    <tr>
                        <td>Mouse</td>  
                        <td>Monitors</td>
                        <td>Keyboards</td>  
                        <td>AVR</td>  
                        <td>CPU</td>  
                        <td>Headphones</td>  
                        <td>Chair</td>
                        <td>Table</td> 
                    </tr>  
                </thead>
                    <tr>
                      <td><?php echo $mousewynsum ?></td>  
                      <td><?php echo $monitorwynsum ?></td>
                      <td><?php echo $keyboardwynsum?></td>  
                      <td></td>  
                      <td></td>  
                      <td></td>  
                      <td></td>
                      <td></td> 
                    </tr>
        
    </table>


    <div class="table-responsive">
            <table id="employee_data" class="table table-bordered text-center table-striped table-earning">  
            <caption style="caption-side:top;">List of Available Stocks at Cybergate, Mandaluyong Branch</caption>
                <thead class="table-primary">  
                    <tr>  
                        <td>Asset Tag</td>
                        <td>Supplier Code</td>  
                        <td>Brand</td>  
                        <td>Model/Serial Number</td>  
                        <td>Description</td>  
                        <td>Branch</td>
                        <td>Date Purchased</td>
                        <td>Date Received</td>  
                    </tr>  
                </thead>
          <?php 
            //check if the starting row variable was passed in the URL or not
      if (!isset($_GET['startrow2']) or !is_numeric($_GET['startrow2'])) {
        //we give the value of the starting row to 0 because nothing was found in URL
              $startrow2 = 0;
      //otherwise we take the value from the URL
            } else {
                $startrow2 = (int)$_GET['startrow2'];
                }

                $sql = "SELECT * FROM tblProducts WHERE productBranch = 'Cybergate' AND productStatus = 'Available' LIMIT $startrow2,10;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productTag"].'</td>   
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productBranch"].'</td>
                        <td>'.$row["dateAccepted"].'</td>
                    </tr>';
                }

                    //now this is the link..
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow2='.($startrow2+10).'#cybergatestocks">
              <button class="btn btn-lg btn-primary pull-right">Next</button></a>';
  
              $prev = $startrow2 - 10;
  
              //only print a "Previous" link if a "Next" was clicked
              if ($prev >= 0)
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow2='.$prev.'#cybergatestocks">
              <button class="btn btn-lg btn-primary">Prev</button></a>';
                ?>
    </table>

    <table class="table table-bordered text-center table-striped table-earning">  
                <thead class="table-primary"> 
                <caption style="caption-side:top;" id="ecotowerstocks">List of Available Stocks at EcoTower, BGC</caption> 
                    <tr>  
                        <td>Asset Tag</td>
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>
                        <td>Branch</td>
                        <td>Date Received </td>  
                    </tr>  
                </thead>
          <?php 

             //check if the starting row variable was passed in the URL or not
      if (!isset($_GET['startrow3']) or !is_numeric($_GET['startrow3'])) {
        //we give the value of the starting row to 0 because nothing was found in URL
              $startrow3 = 0;
      //otherwise we take the value from the URL
            } else {
                $startrow3 = (int)$_GET['startrow3'];
                }

                $sql = "SELECT * FROM tblProducts WHERE productBranch = 'EcoTower' AND productStatus = 'Available' LIMIT $startrow3,10;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productTag"].'</td>   
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productBranch"].'</td>
                        <td>'.$row["dateAccepted"].'</td>
                    </tr>';
                }
                      //now this is the link..
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow3='.($startrow3+10).'#ecotowerstocks">
              <button class="btn btn-lg btn-primary pull-right">Next</button></a>';
  
              $prev = $startrow3 - 10;
  
              //only print a "Previous" link if a "Next" was clicked
              if ($prev >= 0)
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow3='.$prev.'#ecotowerstocks">
              <button class="btn btn-lg btn-primary">Prev</button></a>';
                ?>
    </table>
</div>

	</div>

</body>
</html>