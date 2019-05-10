<?php

if (!isset($_SESSION['userUid'])) {
	header("Location: login.php");
}






?>
<!DOCTYPE html>
<html>
<head>
	<title> Assets | ANDERSON </title>
	<link rel="icon" type="image/png" href="../resources/agbilogo.png">
	<!-- Boostrap Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

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
		<a class="navbar-brand" href="https://www.facebook.com/ricopaulo.garcia"><img src="resources/agbilogo.png" style="height: 50px; width: 50px;"></a>
		<span class="navbar-text">Inventory System</span>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="homepage.php"><i class="fa fa-home"></i> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="addstaff.php"><i class="fa fa-plus"></i> Add Staff </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="additem.php"><i class="fa fa-plus"></i> Add Item </a>
			</li>
			 <li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          		<?php echo $_SESSION['fname']?>
        		</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-center" href="#">Dispatch</a>
          <a class="dropdown-item text-center" href="#">Transfer</a>
          <a class="dropdown-item text-center" href="includes/logout.inc.php">Log Out</a>
        </div>
      </li>
		</ul>
		</div>
	</nav>
<!-- END OF NAVBAR -->