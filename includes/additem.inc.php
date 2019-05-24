<?php 

/*if(isset($_POST['additemmodal'])){
	$companyname = $_POST['suppliername'];
	$brand = $_POST['productbrand'];
	$code1 = $_POST['code1'];
	$code2 = $_POST['code2'];
	$producttype = $_POST['producttype'];
	$count = $_POST['stocks'];
	$branch = $_POST['branch'];
	$status = "Available";	

	if(empty($companyname) || empty($brand) || empty($code1) || empty($code2) || empty($producttype) || empty($branch)){
		header("Location: ../additem.php?error=empty");
		exit();
	}
	elseif($code1 !== $code2){
		header("Location: ../additem.php?error=productcode");
		exit();
	}else{

	}
}
else*/ if(isset($_POST['additembtn'])){
	require 'db.inc.php';

	
	$companyname = $_POST['suppliername'];
	$brand = $_POST['productbrand'];
	$code1 = $_POST['code1'];
	$code2 = $_POST['code2'];
	$producttype = $_POST['producttype'];
	$count = $_POST['stocks'];
	$branch = $_POST['branch'];
	$datepurchased = $_POST['datepurchased'];
	$status = "Available";	

if(empty($companyname) || empty($brand) || empty($code1) || empty($code2) || empty($producttype) || empty($branch) || empty($datepurchased)){
	header("Location: ../additem.php?error=empty");
	exit();
}
elseif($code1 !== $code2){
	header("Location: ../additem.php?error=productcode");
	exit();
}
else{
	if($branch == 	'Wynsum'){
		$sql = "SELECT productTag FROM tblproducts WHERE productBranch = '$branch' ORDER BY productID  DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$tagExplode = explode("-", $row['productTag']);
		$serialNum = (int)$tagExplode[3];
		for($i=0; $i < $count; $i++) {
			
			$code = "AGBI-FF-01-".str_pad($serialNum+=1, 4, "0", STR_PAD_LEFT)."-W";
			$sql = "INSERT INTO tblproducts (productCompanyCode, productBrand, productModel, productDesc, productTag, productBranch, datePurchased) 
			VALUES 
			('$companyname', '$brand', '$code1', '$producttype', '$code', '$branch', '$datepurchased');";
			mysqli_query($conn, $sql);
		}
		header("Location: ../additem.php?itemadded");
	}
	elseif ($branch == 'Cybergate') {
		$sql = "SELECT productTag FROM tblproducts WHERE productBranch = '$branch' ORDER BY productID  DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if(empty($row['productTag'])){
			$serialNum = 0000;
			for($i=0; $i < $count; $i++) {
			
				$code = "AGBI-FF-01-".str_pad($serialNum+=1, 4, "0", STR_PAD_LEFT)."-C";
				$sql = "INSERT INTO tblproducts (productCompanyCode, productBrand, productModel, productDesc, productTag, productBranch, datePurchased) 
				VALUES 
				('$companyname', '$brand', '$code1', '$producttype', '$code', '$branch', '$datepurchased');";
				mysqli_query($conn, $sql);
			}
		} else{
			$tagExplode = explode("-", $row['productTag']);
			$serialNum = (int)$tagExplode[3];
			for($i=0; $i < $count; $i++) {
			
				$code = "AGBI-FF-01-".str_pad($serialNum+=1, 4, "0", STR_PAD_LEFT)."-C";
				$sql = "INSERT INTO tblproducts (productCompanyCode, productBrand, productModel, productDesc, productTag, productBranch, productStatus, datePurchased) 
				VALUES 
				('$companyname', '$brand', '$code1', '$producttype', '$code', '$branch','$status', '$datepurchased');";
				mysqli_query($conn, $sql);
			}
		}
		header("Location: ../additem.php?itemadded");
	}
	elseif ($branch == 'EcoTower') {
		$sql = "SELECT productTag FROM tblproducts WHERE productBranch = '$branch' ORDER BY productID  DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if(empty($row['productTag'])){
			$serialNum = 0000;
			for($i=0; $i < $count; $i++) {
			
				$code = "AGBI-FF-01-".str_pad($serialNum+=1, 4, "0", STR_PAD_LEFT)."-E";
				$sql = "INSERT INTO tblproducts (productCompanyCode, productBrand, productModel, productDesc, productTag, productBranch, productStatus, datePurchased) 
				VALUES 
				('$companyname', '$brand', '$code1', '$producttype', '$code', '$branch','$status', '$datepurchased');";
				mysqli_query($conn, $sql);
			}
		} else{
			$tagExplode = explode("-", $row['productTag']);
			$serialNum = (int)$tagExplode[3];
			for($i=0; $i < $count; $i++) {
			
				$code = "AGBI-FF-01-".str_pad($serialNum+=1, 4, "0", STR_PAD_LEFT)."-E";
				$sql = "INSERT INTO tblproducts (productCompanyCode, productBrand, productModel, productDesc, productTag, productBranch, productStatus, datePurchased) 
				VALUES 
				('$companyname', '$brand', '$code1', '$producttype', '$code', '$branch','$status', '$datepurchased');";
				mysqli_query($conn, $sql);
			}
		}
		header("Location: ../additem.php?itemadded");
	}
}
}	
else{
	header("Location: login.php");
}
mysqli_close($conn);

?>