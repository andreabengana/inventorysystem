<?php
session_start();

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'includes/navbar.inc.php';
	require 'includes/assetcounter.inc.php';
}
?>

</body>
</html>