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
<div class="container" style="margin-top: 50px!important;">
			<div class="text-center">
				<a href="homepage.php" class="btn btn-danger float-left">Back</a><h1 style="color: black; margin-right:60px;">Add User</h1>
			</div>
						<form id="form1" action="includes/addstaff.inc.php" method="POST">
							<!-- <label for="row1"><h3> Tell me more about yourself! </h3></label> -->
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
  							<label for="row3"><h3>Account Details</h3></label>
  							<div class="form-row" id="row3">
									<div class="form-group col-md-6">
  										<label for="username"> Username </label>
  										<input type="text" name="username" id="username" class="form-control" placeholder="rocketwarrior">
									</div>
                    <div class="form-group col-md-6">
                      <label for="usertype"> Usertype </label>
                      <select name="usertype" id="usertype" class="form-control" placeholder="rocketwarrior">
                        <option> Admin Staff</option>
                        <option> Finance </option>
                        <option> IT </option>
                      </select>
                  </div>
  							</div>
 								<button type="submit" class="btn btn-lg btn-success mx-auto d-block" name="addstaffbtn">Add User</button>
						</form>
			</div>
</body>
</html>