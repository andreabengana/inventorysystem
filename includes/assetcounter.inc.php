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
}		