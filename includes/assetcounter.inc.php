<?php

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'db.inc.php';
	//Monitor Count
	$sql = "SELECT SUM(productStocks) AS value_sum FROM tblproducts WHERE productDesc = 'Monitor';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$monitorcount = $row['value_sum'];	

}