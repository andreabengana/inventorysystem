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
	$row = mysqli_fetch_assoc($result); 
	$cybergateassets = $row['total_sum'];

	//Ecotower Counter
	$sql = "SELECT * FROM tblProducts WHERE productBranch = 'EcoTower';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$ecotowerassets = $row['total_sum'];

	//Total Counter
	$sql = "SELECT * FROM tblProducts;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$andersonassets = mysqli_num_rows($result);
}		