<?php

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'db.inc.php';
	//Wynsum Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum';";
	$result = mysqli_query($conn, $sql);
	$wynsumassets = mysqli_num_rows($result);


	//Cybergate Counter
	$sql = "SELECT * FROM tblProducts WHERE productBranch = 'Cybergate';";
	$result = mysqli_query($conn, $sql);
	$cybergateassets = mysqli_num_rows($result);

	//Ecotower Counter
	$sql = "SELECT * FROM tblProducts WHERE productBranch = 'EcoTower';";
	$result = mysqli_query($conn, $sql);
	$ecotowerassets = mysqli_num_rows($result);

	//Total Counter
	$sql = "SELECT * FROM tblProducts;";
	$result = mysqli_query($conn, $sql);
	$andersonassets = mysqli_num_rows($result);

	//Wynsum Mouse Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Mouse' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$mousewynsum = mysqli_num_rows($result);

	//Wynsum Monitor Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Monitor' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$monitorwynsum = mysqli_num_rows($result);

	//Wynsum Keyboard Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Keyboard' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$keyboardwynsum = mysqli_num_rows($result);

	//Wynsum AVR Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'AVR' AND productStatus = 'Available';";
	

	//Wynsum CPU Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'CPU' AND productStatus = 'Available';";
	

	//Wynsum Headphones Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Headphone' AND productStatus = 'Available';";
	
	//Wynsum Chair Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Chair' AND productStatus = 'Available';";
	

	//Wynsum Table Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Table' AND productStatus = 'Available';";
}		