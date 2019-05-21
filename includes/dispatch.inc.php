<?php

session_start();

if(isset($_POST['dispatchbtn'])){

	require 'db.inc.php';

	$sessionName = $_SESSION['userUid'];

	$device = $_POST['productdesc'];
	$brand = $_POST['productbrand'];
	$code = $_POST['code'];
	$branch = $_POST['branch'];
	$employeecode = $_POST['employeecode'];
	$department = $_POST['department'];
	$dispatchtoworkstation = $_POST['dispatchToWorkstation'];
	

	$department = $_POST['department'];

	if (empty($device) || empty($brand) || empty($code) || empty($branch)  || empty($department)){
		header("Location: ../dispatch.php?error=empty");
	}
	else{
		$sql = "SELECT productID FROM `tblproducts` WHERE productStatus = 'Available' AND productBrand = '$brand' AND productModel = '$code' AND productBranch = '$branch' ORDER by productTag ASC LIMIT 5";
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_array($result)){
			$tblproduct_array[] = $row;
		}

		$sql = "SELECT dispatchID FROM `tbldispatch` ORDER BY dispatchID DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$maxDispatchID = mysqli_fetch_assoc($result);

		$maxDispatchID["dispatchID"] += 1;

		echo $maxDispatchID["dispatchID"];
		
		for ($i=0; $i < $quantity; $i++) { 
			// $tblproduct_array[$i]["productStatus"] = "Dispatched";
			// $tblproduct_array[$i]["employeeAssigned"] = $employeecode;
			// $tblproduct_array[$i]["workstationAssigned"] = $dispatchtoworkstation;

			$sql = "UPDATE tblproducts SET productStatus = 'Dispatched', employeeAssigned = '$employeecode', workstationAssigned = '$dispatchtoworkstation' WHERE productID = ".$tblproduct_array[$i]["productID"];
			$result = mysqli_query($conn, $sql);

			

			$sql = "SELECT userID FROM tblusers WHERE userName = '$sessionName'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			$sql = "INSERT INTO tbldispatch (`dispatchID`, `userID`, `productID`, `dispatchToDepartment`) VALUES 
			(".$maxDispatchID["dispatchID"].", ".$row['userID'].", '".$tblproduct_array[$i]["productID"]."', '$department');";
			$result = mysqli_query($conn, $sql);
			
		}

	}





}
else{
	header("Location: ../login.php");
	exit();
}

?>