<?php

if(isset($_POST['dispatchbtn'])){

	require 'db.inc.php';

	$code = $_POST['code'];
	$quantity = $_POST['quantity'];
	$department = $_POST['department'];





}
else{
	header("Location: ../login.php");
	exit();
}

?>