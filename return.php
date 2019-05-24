<?php
session_start();

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
	require 'includes/db.inc.php';
	require 'includes/navbar.inc.php';
	require 'includes/assetcounter.inc.php';

?>
<head>
  <link rel="stylesheet" type="text/css" href="design/additemdesign.css">
</head>
<body>
<div class="container">
			<div class="text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Back</a><h1 style="color: black; margin-right: 90px;">Return Asset</h1>
						<form action="includes/dispatch.inc.php" method="POST">
							<label for="row1"><h3> Asset Details </h3></label>
  							<div class="form-row" id="row1" style="margin-top: 0px!important;">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">Asset Tag</label>
      								<input type="text" name="assetTag" class="form-control" placeholder="-Asset Tag-">
    							</div>
                  <div class="form-group col-md-6">
      								<label for="inputfirstname">Asset Tag</label>
      								<input type="text" name="assetTag" class="form-control" placeholder="-Asset Tag-">
    							</div>
    							
  							</div>
                
 								<button type="submit" class="btn btn-lg btn-success" name="dispatchbtn">Dispatch Asset</button>
                
						</form>

			
			</div>
		</div>
    

		</div>
</body>
</html>

