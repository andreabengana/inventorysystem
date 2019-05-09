<?php

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'db.inc.php';
	//Asset Counter
	$sql = "SELECT SUM(productStocks) AS total_sum FROM tblProducts;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$totalassets = $row['total_sum'];

	//Monitor Counter
	$sql = "SELECT SUM(productStocks) AS value_sum FROM tblproducts WHERE productDesc = 'Monitor';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$monitorcount = $row['value_sum'];	

	//Keyboard Counter
	$sql = "SELECT SUM(productStocks) AS value_sum FROM tblproducts WHERE productDesc = 'Keyboard';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$keyboardcount = $row['value_sum'];

	//Mouse Counter
	$sql = "SELECT SUM(productStocks) AS value_sum FROM tblproducts WHERE productDesc = 'Mouse';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$mousecount = $row['value_sum'];

	//Headphones Counter
	$sql = "SELECT SUM(productStocks) AS value_sum FROM tblproducts WHERE productDesc = 'Headphones';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$headphonecount = $row['value_sum'];

}		