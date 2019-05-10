<?php
session_start();

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'includes/db.inc.php';
	require 'includes/navbar.inc.php';
}
?>
<head>
  <link rel="stylesheet" type="text/css" href="design/additemdesign.css">
</head>
<body>
<div class="container">
			<div class="text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Go Back</a><h1 style="color: black; margin-right: 90px;">Dispatch Item</h1>
						<form action="includes/dispatchitem.inc.php" method="POST">
							<label for="row1"><h3> Item Details </h3></label>
  							<div class="form-row" id="row1" style="margin-top: 0px!important;">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">Supplier</label>
      								<select  class="form-control" placeholder="Device Type" name="productdesc">
      									<?php
      									$sql = "SELECT DISTINCT productDesc FROM tblproducts;";
      									$result = mysqli_query($conn, $sql);
      									while ($row = mysqli_fetch_assoc($result)){
      									echo '<option>'.$row['productDesc'].'</option>';
      								}
      									?>
      								</select>
    							</div>
    							<div class="form-group col-md-6">
     								 <label for="inputlastname">Brand</label>
     								 <select class="form-control" placeholder="-Brand Name-" name="productbrand">
                    				</select>
    							</div>
  							</div>
                <div class="form-row" id="row2">
  								<div class="form-group col-md-6">
  									<label for="inputemail">Product Model</label>
  									<input type="text" name="code1" class="form-control" placeholder="-Product Code-">
  							</div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Repeat Product Model</label>
                    <input type="text" name="code2" class="form-control" placeholder="-Repeat Product Code-">
                </div>
              </div>  
  							<div class="form-row" id="row2">
  								<div class="form-group col-md-6">
      								<label for="inputmfirstname">Product Type</label>
      								<input list="devices" class="form-control" placeholder="ex. Monitor, Keyboard, etc." name="producttype">
                      <datalist id="devices">
                          <option value="Monitor">
                          <option value="Keyboard">
                          <option value="AVR">
                          <option value="Headphone">
                          <option value="Mouse">
                          <option value="Chair">
                          <option value="Table">
                          <option value="System Unit">
                          <option value="Telephone">
                      </datalist>
    							</div>
    							<div class="form-group col-md-6">
      								<label for="inputmlname">Quantity</label>
      								<input type="text" class="form-control"  placeholder="-Number of Product received-" name="stocks">
    							</div>
  							</div>
 								<button type="submit" class="btn btn-lg btn-success" name="additembtn">Add Item</button>
						</form>
			</div>
		</div>
</body>
</html>

