<?php 

if(isset($_POST['additembtn'])){
	require 'db.inc.php';

	
	$companyname = $_POST['companyname'];
	$brand = $_POST['productbrand'];
	$code1 = $_POST['code1'];
	$code2 = $_POST['code2'];
	$producttype = $_POST['producttype'];
	$stocks = $_POST['stocks'];
		

if(empty($companyname) || empty($brand) || empty($code1) || empty($code2) || empty($producttype) || empty($stocks)){
	header("Location: ../additem.php?error=empty");
	exit();
}
elseif($code1 !== $code2){
	header("Location: ../additem.php?error=productcode");
}
else{
			$sql = "INSERT INTO tblproducts (productID, productCompanyCode, productBrand, productModel, productDesc, productStocks) VALUES ($code, $companyname, $brand, $code1, $producttype, $stocks)";
			
			mysqli_query($conn, $sql);
			header("Location: ../additem.php?itemadded");
			/* Prepared Statements
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../additem.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "ssssss",$code, $companyname, $brand, $code1, $producttype, $stocks);
				mysqli_stmt_execute($stmt);
				header("Location: ../additem.php?itemadded");
				exit();
			}*/
		}
	}	
else{
	header("Location: login.php");
}
mysqli_close($conn);




?>