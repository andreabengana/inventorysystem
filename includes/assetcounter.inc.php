<?php

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'db.inc.php';
	//Wynsum Counter
	$sql = "SELECT SUM(productQuantity) AS total_sum FROM tblProducts WHERE productBranch = 'Wynsum';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$wynsumassets = $row['total_sum'];

	//Cybergate Counter
	$sql = "SELECT SUM(productQuantity) AS total_sum FROM tblProducts WHERE productBranch = 'Cybergate';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$cybergateassets = $row['total_sum'];

	//Ecotower Counter
	$sql = "SELECT SUM(productQuantity) AS total_sum FROM tblProducts WHERE productBranch = 'EcoTower';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$ecotowerassets = $row['total_sum'];

	//Total Counter
	$sql = "SELECT SUM(productQuantity) AS total_sum FROM tblProducts;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$andersonassets = $row['total_sum'];	
}		