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
	$usertype = $_POST['usertype'];

	function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	if(empty($fname) || empty($lname) || empty($email) || empty($username)){
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
	else{
		$sql = "SELECT * FROM tblusers WHERE userName = '$username' OR userEmail = '$email';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			header("Location: ../addstaff.php?error=usernametaken");
		}
		else{
			$password = randomPassword();
			$hashed_password = password_hash($password,PASSWORD_DEFAULT);
		$sql = "INSERT INTO tblusers (userName, userEmail, userPassword, userType, personnelFirstName, personnelLastName) VALUES ('$username', '$email', '$hashed_password', '$usertype', '$fname', '$lname');";

		mysqli_query($conn, $sql);

		$msg = "Hello, $username!\nHere are your Asset Management System account details:\nYour username is: $username\n Your password is: $password\nYou have the privileges of a: $usertype";
		$subject = "Anderson Group BPO Inc. - Your Asset Management System Account Details";
		$header = "<no-reply@andersonbpoinc.com>";
// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

// send email
		if(!mail($email,$subject,$msg,$header))
		{
			header("Location: ../addstaff.php?emailnotsent");
		}else {

			header("Location: ../addstaff.php?staffadded");
		
			exit();
		}

	}
	}
}