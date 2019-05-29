<?php

session_start();

if(isset($_POST['dispatchbtn'])){

	require 'db.inc.php';

	$sessionName = $_SESSION['userUid'];

	$device = $_POST['productdesc'];
	$brand = $_POST['productbrand'];
    $code = $_POST['code1'];
    $quantity = $_POST['stocks'];
    
    //existing
    $branch = $_POST['branch'];
    $department = $_POST['department'];
	$employeecode = $_POST['employeecode'];
    $dispatchtoworkstation = $_POST['dispatchToWorkstation'];
    
    $newbranch = $_POST['newbranch'];
    $newdepartment = $_POST['newdepartment'];
	$newemployeecode = $_POST['newemployeecode'];
    $newdispatchtoworkstation = $_POST['newdispatchToWorkstation'];
	

	if (empty($device) || empty($brand) || empty($code) || empty($branch)  || empty($department)){
		header("Location: ../dispatch.php?error=empty");
	}
	else{
		$sql = "SELECT productID FROM `tblproducts` WHERE productStatus = 'Dispatched' AND productBrand = '$brand' AND productModel = '$code' AND productBranch = '$branch' ORDER by productTag ASC LIMIT ".$stocks;
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_array($result)){
			$tblproduct_array[] = $row;
		}
		
		for ($i=0; $i < $quantity; $i++) { 

			$sql = "UPDATE tblproducts SET productStatus = 'Dispatched', employeeAssigned = '$newemployeecode', workstationAssigned = '$newdispatchtoworkstation' WHERE productID = ".$tblproduct_array[$i]["productID"];
			$result = mysqli_query($conn, $sql);
			
		}

	}

}
else{
	header("Location: ../login.php");
	exit();
}

?>