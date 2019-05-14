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
	$sql = "SELECT * FROM tblusers WHERE userName = '$mailuid' OR userEmail = '$mailuid';";
	$result = mysqli_query($conn, $sql);
		if($row = mysqli_fetch_assoc($result)){
			$dbpassword = $row['userPassword'];
			$pwdCheck = password_verify($password, $dbpassword);
			if($password !== $dbpassword AND $pwdCheck == false){
				header("Location: ../login.php?invalidpassword");
				exit();
			}
			else{
				session_start();
					$_SESSION['userUid'] = $row['userName'];
					$_SESSION['usertype'] = $row['userType'];
					$_SESSION['fname'] = $row['personnelFirstName'];
					$_SESSION['lname'] = $row['personnelLastName'];
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