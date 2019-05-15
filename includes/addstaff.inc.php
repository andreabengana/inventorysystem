<?php

if(!isset($_POST['addstaffbtn'])){
	header("Location: ../login.php");
	exit();
}
else{
	require 'db.inc.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$usertype = $_POST['usertype'];

	if(empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password1) || empty($password2)){
		header("Location: ../addstaff.php?error=empty");
		exit();
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../addstaff.php?error=invalidemail");
		exit();
	}
	elseif(!preg_match("/^[a-zA-z0-9]*$/", $username)) {
		header("Location: ../addstaff.php?error=invalidusername");
	}
	elseif($password1 !== $password2){
		header("Location: ../addstaff.php?error=password");
	}
	else{
		$sql = "SELECT * FROM tblusers WHERE userName = '$username' OR userEmail = '$email';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			header("Location: ../addstaff.php?error=usernametaken");
		}
		else{
		$hashedpwd = password_hash($password1, PASSWORD_DEFAULT);
		$sql = "INSERT INTO tblusers (userName, userEmail, userPassword, userType, personnelFirstName, personnelLastName) VALUES ('$username', '$email', '$hashedpwd', '$usertype', '$fname', '$lname');";

		mysqli_query($conn, $sql);
		header("Location: ../addstaff.php?staffadded");
		exit();
	}
	}
}