<?php
session_start();

if(!isset($_SESSION['userUid'])){
  header("Location: login.php");
}
else{
  require 'includes/navbar.inc.php';
}
?>
<head>
  <link rel="stylesheet" type="text/css" href="design/additemdesign.css">
</head>
<body>
<div class="container">
			<div class="card-header text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Go Back</a><h1 style="color: black; margin-right: 90px;">Add Item</h1>
						<form id="form1" action="includes/addemployee.inc.php" method="POST">
							<label for="row1"><h3> Item Details </h3></label>
  							<div class="form-row" id="row1" style="margin-top: 0px!important;">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">Company</label>
      								<input type="text" class="form-control" id="inputfirstname" placeholder="Anderson Group BPO Inc." name="companyname">
    							</div>
    							<div class="form-group col-md-6">
     								 <label for="inputlastname">Brand</label>
     								 <input type="text" class="form-control" id="inputlastname" placeholder="Acer" name="productbrand">
    							</div>
  							</div>
                <div class="form-row" id="row2">
  								<div class="form-group col-md-6">
  									<label for="inputemail">Model</label>
  									<input type="text" name="email" id="inputmodel1" class="form-control" placeholder="-Product Code-">
  							</div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Repeat Model</label>
                    <input type="text" name="email" id="inputmodel2" class="form-control" placeholder="-Repeat Product Code-">
                </div>
              </div>  
  							<div class="form-row" id="row2">
  								<div class="form-group col-md-6">
      								<label for="inputmfirstname">Product Type</label>
      								<input type="text" class="form-control" id="inputmfirstname" placeholder="ex. Monitor, Keyboard, etc." name="mfname">
    							</div>
    							<div class="form-group col-md-6">
      								<label for="inputmlname">Number of Stocks</label>
      								<input type="text" class="form-control" id="inputmlname" placeholder="-Number of Product received-" name="mlname">
    							</div>
  							</div>
 								<button type="submit" class="btn btn-lg btn-success" name="signup-btn">Add Item</button>
						</form>
			</div>
		</div>
</body>
</html>