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
				<a href="homepage.php" class="btn btn-danger float-left">Go Back</a><h2 style="color: white;">Add Item</h2>
						<form id="form1" action="includes/addemployee.inc.php" method="POST">
							<label for="row1"><h3> Tell me more about yourself! </h3></label>
  							<div class="form-row" id="row1">
    							<div class="form-group col-md-6">
      								<label for="inputfirstname">First Name</label>
      								<input type="text" class="form-control" id="inputfirstname" placeholder="Juan" name="fname">
    							</div>
    							<div class="form-group col-md-6">
     								 <label for="inputlastname">Last Name</label>
     								 <input type="text" class="form-control" id="inputlastname" placeholder="dela Cruz" name="lname">
    							</div>
  							</div>
  								<div class="form-group">
  									<label for="inputemail"> Email </label>
  									<input type="text" name="email" class="form-control" placeholder="someone@example.com">
  							</div>
  							<label for="row2"><h3>Who's your Manager?</h3></label>
  							<div class="form-row" id="row2">
  								<div class="form-group col-md-6">
      								<label for="inputmfirstname">Manager's First Name</label>
      								<input type="text" class="form-control" id="inputmfirstname" placeholder="John Mark" name="mfname">
    							</div>
    							<div class="form-group col-md-6">
      								<label for="inputmlname">Last Name</label>
      								<input type="text" class="form-control" id="inputmlname" placeholder="Causing" name="mlname">
    							</div>
  							</div>
  							<label for="row3"><h3>Account Details</h3></label>
  							<div class="form-row" id="row3">
									<div class="form-group col-md-12">
  										<label for="username"> Username </label>
  										<input type="text" name="username" id="username" class="form-control" placeholder="rocketwarrior">
									</div>
									<div class="form-group col-md-6">
  										<label for="password1"> Password </label>
  										<input type="password" name="password1" id="password1" class="form-control">
									</div>
									<div class="form-group col-md-6">
  										<label for="password2"> Repeat Password </label>
  										<input type="password" name="password2" id="password2" class="form-control">
									</div>
  							</div>
  							<label for="position">Sign Up as</label>
  							<select class="form-control" name="position" value="staff">
                <option>Staff</option>
                </select> 								
                <br>
 								<button type="submit" class="btn btn-lg btn-success btn-block" name="signup-btn">Add Employee</button>
						</form>
			</div>
		</div>
</body>
</html>