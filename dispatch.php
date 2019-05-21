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
				<a href="homepage.php" class="btn btn-danger float-left">Back</a><h1 style="color: black; margin-right: 90px;">Dispatch Asset</h1>
						<form action="includes/dispatch.inc.php" method="POST">
							<label for="row1"><h3> Asset Details </h3></label>
  							<div class="form-row" id="row1" style="margin-top: 0px!important;">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">Device Type</label>
      								<select  class="form-control" placeholder="Device Type" name="productdesc">
      									<?php
      									$sql = "SELECT DISTINCT productDesc FROM tblproducts ORDER BY productDesc ASC;";
      									$result = mysqli_query($conn, $sql);
      									while ($row = mysqli_fetch_assoc($result)){
      									echo '<option value='.$row['productDesc'].'>'.$row['productDesc'].'</option>';
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
     								 		echo '<option value='.$row['productBrand'].'>'.$row['productBrand'].'</option>';
     								 	}
     								 	?>
                    </select>
    							</div>
  							</div>
                <div class="form-row" id="row2">
  								<div class="form-group col-md-6 mx-auto d-block">
  									<label for="inputemail">Product Model</label>
  									<input type="text" name="code" class="form-control" placeholder="-Product Code-">
  							  </div>
    							<div class="form-group col-md-6">
      								<label for="inputmlname">Quantity</label>
      								<input type="text" class="form-control"  placeholder="-Number of Products dispatched-" name="quantity">
    							</div>
                </div>
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
 								<button type="submit" class="btn btn-lg btn-success" name="dispatchbtn">Dispatch Asset</button>
                
						</form>

			
			</div>
		</div>
    <div class="table-responsive" style="color:black;">
            <table id="employee_data_wynsum" class="table table-bordered text-center table-striped table-earning" href="#wynsumtable">  
            <caption style="caption-side:top;" id="wynsumtable">List of Dispatched Items at Wynsum, Ortigas Branch</caption>
                <thead class="table-primary">  
                    <tr>  
                        <!--<td>Product ID</td> --> 
                        <td>Asset Tag</td>
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>  
                        <td>Branch</td>
                        <td>Assigned Department</td>
												<td>Assigned Employee</td>
												<td>Assigned Workstation</td>
												<td>Status</td>
                        <td>Dispatch Date</td>  
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
                $sql = "SELECT tblproducts.productTag, tblproducts.productCompanyCode, tblproducts.productBrand, tblproducts.productModel, tblproducts.productDesc, tblproducts.productBranch, tbldispatch.dispatchToDepartment, tblproducts.employeeAssigned, tblproducts.workstationAssigned, tblproducts.productStatus, tbldispatch.dispatchDate 
                FROM tblproducts
                INNER JOIN tbldispatch
                   ON tblproducts.productID = tbldispatch.productID
                WHERE productBranch='Wynsum' AND productStatus = 'Dispatched'
                ORDER BY tbldispatch.dispatchID
                LIMIT $startrow,10";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productTag"].'</td>  
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productBranch"].'</td>
                        <td>'.$row["dispatchToDepartment"].'</td>
												<td>'.$row["employeeAssigned"].'</td>
												<td>'.$row["workstationAssigned"].'</td>
												<td>'.$row["productStatus"].'</td>
                        <td>'.$row["dispatchDate"].'</td>
                    </tr>
                    ';
                }
              //now this is the link..
              echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+10).'#wynsumtable">
            <button class="btn btn-lg btn-primary pull-right">Next</button></a>';

            $prev = $startrow - 10;

            //only print a "Previous" link if a "Next" was clicked
            if ($prev >= 0)
            echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'#wynsumtable">
            <button class="btn btn-lg btn-primary">Prev</button></a>';
              ?>
            
    </table>
		<table id="employee_data" class="table table-bordered text-center table-striped table-earning">  
            <caption style="caption-side:top;" id="cybergatetable">List of Dispatched Items at Cybergate, Boni Branch</caption>
                <thead class="table-primary">  
                    <tr>  
                        <!--<td>Product ID</td> -->  
                        <td>Asset Tag</td>
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>  
                        <td>Branch</td>
                        <td>Assigned Department</td>
												<td>Assigned Employee</td>
												<td>Assigned Workstation</td>
												<td>Status</td>
                        <td>Dispatch Date</td>  
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
                $sql = "SELECT tblproducts.productTag, tblproducts.productCompanyCode, tblproducts.productBrand, tblproducts.productModel, tblproducts.productDesc, tblproducts.productBranch, tbldispatch.dispatchToDepartment, tblproducts.employeeAssigned, tblproducts.workstationAssigned, tblproducts.productStatus, tbldispatch.dispatchDate 
                FROM tblproducts
                INNER JOIN tbldispatch
                   ON tblproducts.productID = tbldispatch.productID
                WHERE productBranch='Cybergate' AND productStatus = 'Dispatched'
                ORDER BY tbldispatch.dispatchID
                LIMIT $startrow2,10";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                         <td>'.$row["productTag"].'</td>   
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productBranch"].'</td>
                        <td>'.$row["dispatchToDepartment"].'</td>
												<td>'.$row["employeeAssigned"].'</td>
												<td>'.$row["workstationAssigned"].'</td>
												<td>'.$row["productStatus"].'</td>
                        <td>'.$row["dispatchDate"].'</td>
                    </tr>';
                }
                //now this is the link..
                echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow2='.($startrow2+10).'#cybergatetable">
                <button class="btn btn-lg btn-primary pull-right">Next</button></a>';

                $prev = $startrow2 - 10;

                //only print a "Previous" link if a "Next" was clicked
                if ($prev >= 0)
                echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow2='.$prev.'#cybergatetable">
                <button class="btn btn-lg btn-primary">Prev</button></a>';

                ?>
    </table>

		<table id="employee_data" class="table table-bordered text-center table-striped table-earning">  
            <caption style="caption-side:top;">List of Dispatched Items at EcoTower, BGC Branch</caption>
                <thead class="table-primary">  
                    <tr>  
                        <!--<td>Product ID</td> -->  
                        <td>Asset Tag</td>
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>  
                        <td>Branch</td>
                        <td>Assigned Department</td>
												<td>Assigned Employee</td>
												<td>Assigned Workstation</td>
												<td>Status</td>
                        <td>Dispatch Date</td>  
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
                $sql = "SELECT tblproducts.productTag, tblproducts.productCompanyCode, tblproducts.productBrand, tblproducts.productModel, tblproducts.productDesc, tblproducts.productBranch, tbldispatch.dispatchToDepartment, tblproducts.employeeAssigned, tblproducts.workstationAssigned, tblproducts.productStatus, tbldispatch.dispatchDate 
                FROM tblproducts
                  INNER JOIN tbldispatch
                      ON tblproducts.productID = tbldispatch.productID
                  WHERE productBranch='EcoTower' AND productStatus = 'Dispatched'
                ORDER BY tbldispatch.dispatchID
                LIMIT $startrow3,10";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productTag"].'</td>   
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>
                        <td>'.$row["productBranch"].'</td>
                        <td>'.$row["dispatchToDepartment"].'</td>
												<td>'.$row["employeeAssigned"].'</td>
												<td>'.$row["workstationAssigned"].'</td>
												<td>'.$row["productStatus"].'</td>
                        <td>'.$row["dispatchDate"].'</td>
                    </tr>';
                }
               //now this is the link..
               echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow3='.($startrow3+10).'#cybergatetable">
               <button class="btn btn-lg btn-primary pull-right">Next</button></a>';
               
               $prev = $startrow3 - 10;
               
               //only print a "Previous" link if a "Next" was clicked
               if ($prev >= 0)
                   echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow3='.$prev.'#cybergatetable">
                   <button class="btn btn-lg btn-primary">Prev</button></a>';
                
                ?>
    </table>

		</div>
</body>
</html>

