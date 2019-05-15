<?php

if(isset($_POST['dispatchbtn'])){

	require 'db.inc.php';

	$device = $_POST['productdesc'];
	$brand = $_POST['productbrand'];
	$code = $_POST['code'];
	$quantity = $_POST['quantity'];
	$department = $_POST['department'];

	if (empty($device) || empty($brand) || empty($code) || empty($quantity) || empty($department)){
		header("Location: ../dispatch.php?error=empty");
	}





}
else{
	header("Location: ../login.php");
	exit();
}

?>