
<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<!-- Boostrap Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!-- Bootstrap Javascript-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="design/navbardesign.css">
</head>
	<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span> 
		</button>

		<div class="collapse navbar-collapse" id="collapse_target">
		<a class="navbar-brand" href="https://andersonbpoinc.com/"><img src="resources/agbilogo.png" style="height: 50px; width: 50px;"></a>
		<span class="navbar-text">Inventory System</span>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-home"></i> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-plus"></i> Add Staff </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="additem.php"><i class="fa fa-plus"></i> Add Item </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="includes/logout.inc.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a>
			</li>
		</ul>
		</div>
	</nav>
<!-- END OF NAVBAR -->