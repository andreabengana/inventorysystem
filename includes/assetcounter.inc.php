<?php

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'db.inc.php';
	//Monitor Count
	$sql = "SELECT * FROM tblproducts WHERE productDesc = 'Monitor';";
	$result = mysqli_query($conn, $sql);
	$monitorcount = mysqli_num_rows($result);
}