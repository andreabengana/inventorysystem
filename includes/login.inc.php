<?php


if(isset($_POST['loginbtn'])){

require 'db.inc.php';

$mailuid = $_POST['uid'];
$password = $_POST['password'];

if(empty($mailuid) || empty($password)){
	header("Location: ../login.php?emptyfields");
	exit();
}
else{
	$sql = "SELECT * FROM users WHERE user_uid= '$mailuid' OR user_email= '$mailuid';";
	$result = mysqli_query($conn, $sql);
		if($row = mysqli_fetch_assoc($result)){
			$dbpassword = $row['user_password'];
			$pwdCheck = password_verify($password, $dbpassword);
			if($password !== $dbpassword AND $pwdCheck == false){
				header("Location: ../login.php?invalidpassword");
				exit();
			}
			else{
				session_start();
					$_SESSION['userUid'] = $row['user_uid'];
					$_SESSION['usertype'] = $row['user_type'];
					$_SESSION['fname'] = $row['user_fname'];
					$_SESSION['lname'] = $row['user_lname'];
					header("Location: ../homepage.php");
			}
		}
		else{
			header("Location:  ../login.php?nouser");
			exit();
		}
	}
}
else{
	header("Location: ../login.php");
	exit();
}