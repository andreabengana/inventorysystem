<?php
session_start();
if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
session_unset();
session_destroy();
header("Location: ../login.php");
}
exit();