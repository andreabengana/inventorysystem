<?php

if(isset($_POST['dispatchbtn'])){

	require 'db.inc.php';

	$device = $_POST['productdesc'];
	$brand = $_POST['productbrand'];
	$code = $_POST['code'];
	$quantity = $_POST['quantity'];
	$branch = $_POST['branch'];
	$employeecode = $_POST['employeecode'];
	$department = $_POST['department'];
	$dispatchtoworkstation = $_POST['dispatchToWorkstation'];
	

	$department = $_POST['department'];

	if (empty($device) || empty($brand) || empty($code) || empty($quantity) || empty($branch)  || empty($department)){
		header("Location: ../dispatch.php?error=empty");
	}
	else{
		$sql = "SELECT * FROM `tblproducts` WHERE productStatus = 'Available' AND productBrand = '$brand' AND productModel = '$code' AND productBranch = '$branch' ORDER by productTag ASC LIMIT 5";
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_array($result)){
			$tblproduct_array[] = $row;
		}

		for ($i=0; $i < $quantity; $i++) { 
			$tblproduct_array[$i]["productStatus"] = "Dispatched";
		}

	}





}
else{
	header("Location: ../login.php");
	exit();
}

?>