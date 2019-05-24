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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
			<div class="text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Back</a><h1 style="color: black; margin-right: 90px;">Add Asset</h1>
						<form action="includes/additem.inc.php" method="POST">
							<label for="row1"><h3> Asset Details </h3></label>
  							<div class="form-row" id="row1" style="margin-top: 0px!important;">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">Supplier</label>
      								<input type="text" class="form-control" placeholder="Anderson Group BPO Inc." name="suppliername">
    							</div>
    							<div class="form-group col-md-6">
     								 <label for="inputlastname">Brand</label>
     								 <input list="brands" class="form-control" placeholder="-Brand Name-" name="productbrand">
                     <datalist id="brands">
                        <option value="Acer">Acer</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Apple">Apple</option>
                        <option value="Logitech">Logitech</option>
                        <?php
                        $sql = "SELECT DISTINCT productBrand FROM tblproducts;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<option value='.$row['productBrand'].'>'.$row['productBrand'].'</option>';
                        }
                        ?>
                        <script>
                        var usedNames = {};
                        $("datalist[id='brands'] > option").each(function () {
                            if(usedNames[this.text]) {
                                $(this).remove();
                            } else {
                                usedNames[this.text] = this.value;
                            }
                        });
                        </script>
                     </datalist>
    							</div>
  							</div>
                <div class="form-row" id="row2">
  								<div class="form-group col-md-6">
  									<label for="inputemail"> Asset Model</label>
  									<input type="text" name="code1" class="form-control" placeholder="-Product Code-">
  							</div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Repeat Asset Model</label>
                    <input type="text" name="code2" class="form-control" placeholder="-Repeat Product Code-">
                </div>
              </div>  
  							<div class="form-row" id="row2">
  								<div class="form-group col-md-6">
      								<label for="inputmfirstname">Asset Type</label>
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
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label> Assign to which branch? </label>
                    <select class="form-control" name="branch">
                        <option value="Cybergate">Cybergate, Mandaluyong</option>
                        <option value="EcoTower">EcoTower, BGC</option>
                        <option value="Wynsum">Wynsum, Ortigas</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label> Date Purchased </label>
                    <input type="date" class="form-control" name="datepurchased">
                  </div>
                </div>
  <!-- EDITING STARTS HERE-->
 							<!--	<button type="submit" class="btn btn-lg btn-success" name="additembtn">Add Item</button> -->

                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" name="additemmodal" data-target="#myModal">Add Asset</button>

      <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Confirm Asset Entries</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Please take your time to check the asset entries before adding it.</p>
          <p>Supplier: </p>
          <p>Brand: </p>
          <p>Asset Model: </p>
          <p>Asset Type: </p>
          <p>Quantity: </p>
          <p>Branch Assigned: </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" name="additembtn">Confirm</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
      </div>
      
    </div>
  </div>

            
</div>
<!-- EDITING ENDS HERE -->

						</form>
			</div>
		</div>
</body>
</html>