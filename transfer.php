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
<link rel="stylesheet" type="text/css" href="design/additemdesign.css">
<div class="container">
			<div class="text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Back</a><h1 style="color: black; margin-right: 90px;">Transfer Asset</h1>
						<form action="includes/transfer.inc.php" method="POST">
							<label for="row1"><h3> Asset Details </h3></label>
  							<div class="form-row" id="row1" style="margin-top: 0px!important;">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">Device Type</label>
      								<select  class="form-control" placeholder="Device Type" name="productdesc">
      									<?php
      									$sql = "SELECT DISTINCT productDesc FROM tblproducts ORDER BY productDesc ASC;";
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
     								 	<?php
     								 	$sql = "SELECT DISTINCT productBrand FROM tblproducts ORDER BY productBrand ASC;";
     								 	$result = mysqli_query($conn, $sql);
     								 	while($row = mysqli_fetch_assoc($result)){
     								 		echo '<option>'.$row['productBrand'].'</option>';
     								 	}
     								 	?>
                    				</select>
    							</div>
  							</div>
                <div class="form-row" id="row2">
  								<div class="form-group col-md-6">
  									<label for="inputemail">Product Model</label>
  									<input type="text" name="code1" class="form-control" placeholder="-Product Code-">
  							  </div>
    							<div class="form-group col-md-6">
      								<label for="inputmlname">Quantity</label>
      								<input type="text" class="form-control"  placeholder="-Number of Products dispatched-" name="stocks">
    							</div>
                </div>
								<label for="row3"><h3>Existing Dispatch Details</h3></label>
                <div class="form-row" id="row3">
									<div class="form-group col-md-6">
											<label> Branch Assigned </label>
											<select class="form-control" name="branch">
													<option value="Cybergate">Cybergate, Mandaluyong</option>
													<option value="EcoTower">EcoTower, BGC</option>
													<option value="Wynsum">Wynsum, Ortigas</option>
											</select>
									</div>
									<div class="form-group col-md-6 mx-auto d-block">
										<label>Issued to?</label>
												<input type="text" class="form-control" name="department" placeholder="-Department Name-">  
                	</div>
                </div>
                <!-- <div class="form-group col-md-6 mx-auto d-block" style="margin-top: 20px;">
                  <label>Dispatch to?</label>
                      <input type="text" class="form-control" name="department" placeholder="-Department Name-">  
                </div> -->
								<div class="form-row" id="row4">
  								<div class="form-group col-md-6 mx-auto d-block">
  									<label for="dispatchToEmployee">Assign To Employee</label>
  									<input type="text" name="employeecode" class="form-control" placeholder="Employeee Code" name="employeedDispatch">
  							  </div>
    							<div class="form-group col-md-6">
      								<label for="Workstation">Workstation</label>
      								<input type="text" class="form-control"  placeholder="Workstation Code" name="dispatchToWorkstation">
    							</div>
                </div>

								<label for="row3"><h3>Transfer Details</h3></label>
                <div class="form-row" id="row3">
									<div class="form-group col-md-6">
											<label> Branch Assigned </label>
											<select class="form-control" name="newbranch">
													<option value="Cybergate">Cybergate, Mandaluyong</option>
													<option value="EcoTower">EcoTower, BGC</option>
													<option value="Wynsum">Wynsum, Ortigas</option>
											</select>
									</div>
									<div class="form-group col-md-6 mx-auto d-block">
										<label>Issued to?</label>
												<input type="text" class="form-control" name="newdepartment" placeholder="-Department Name-">  
                	</div>
                </div>
                <!-- <div class="form-group col-md-6 mx-auto d-block" style="margin-top: 20px;">
                  <label>Dispatch to?</label>
                      <input type="text" class="form-control" name="department" placeholder="-Department Name-">  
                </div> -->
								<div class="form-row" id="row4">
  								<div class="form-group col-md-6 mx-auto d-block">
  									<label for="dispatchToEmployee">Assign To Employee</label>
  									<input type="text" name="newemployeecode" class="form-control" placeholder="Employeee Code" name="employeedDispatch">
  							  </div>
    							<div class="form-group col-md-6">
      								<label for="Workstation">Workstation</label>
      								<input type="text" class="form-control"  placeholder="Workstation Code" name="newdispatchToWorkstation">
    							</div>
                </div>
 								
 								<button type="submit" class="btn btn-lg btn-success" name="transferbtn">Transfer Asset</button>
						</form>
			</div>
		</div>