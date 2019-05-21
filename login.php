<?php
session_start();

if(isset($_SESSION['userUid'])){
	header("Location: homepage.php");
}



?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login </title>   		
</head>
<body>
<!DOCTYPE html>
<html>
<head>
   <!--Made with love by Gerald Anderson -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="design/logindesign.css">
</head>
<body>
<div class="container-fluid">
	<div class="d-flex h-100 justify-content-start">
		<div class="card">
			<div class="brand_logo_container">
				<a href="https://andersonbpoinc.com/">
				<img src="resources/agbilogo.png" class="mx-auto d-block" style="height:70px; width: 70px; margin-top: 10px;">
				</a>
			</div>
			<div class="card-body">
				<form action="includes/login.inc.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control inputfield" placeholder="Username/Email" name="uid">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control inputfield" placeholder="Password" name="password">
					</div>

					
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<hr>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary" name="loginbtn"> Login </button>
				</form>
					</div>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
</div>
</div>
</body>
</html>