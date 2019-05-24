<?php

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
	require 'db.inc.php';
	//Wynsum Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum';";
	$result = mysqli_query($conn, $sql);
	$wynsumassets = mysqli_num_rows($result);


	//Cybergate Counter
	$sql = "SELECT * FROM tblProducts WHERE productBranch = 'Cybergate';";
	$result = mysqli_query($conn, $sql);
	$cybergateassets = mysqli_num_rows($result);

	//Ecotower Counter
	$sql = "SELECT * FROM tblProducts WHERE productBranch = 'EcoTower';";
	$result = mysqli_query($conn, $sql);
	$ecotowerassets = mysqli_num_rows($result);

	//Total Counter
	$sql = "SELECT * FROM tblProducts;";
	$result = mysqli_query($conn, $sql);
	$andersonassets = mysqli_num_rows($result);

	//Wynsum Mouse Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Mouse' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$mousewynsum = mysqli_num_rows($result);

	//Wynsum Monitor Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Monitor' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$monitorwynsum = mysqli_num_rows($result);

	//Wynsum Keyboard Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Keyboard' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$keyboardwynsum = mysqli_num_rows($result);

	//Wynsum AVR Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'AVR' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$avrwynsum = mysqli_num_rows($result);
	
	//Wynsum CPU Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'CPU' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$cpuwynsum = mysqli_num_rows($result);
	
	//Wynsum Headphones Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Headphone' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$headphoneswynsum = mysqli_num_rows($result);
	
	//Wynsum Chair Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Chair' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$chairwynsum = mysqli_num_rows($result);
	
	//Wynsum Table Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Wynsum' AND productDesc = 'Table' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$tablewynsum = mysqli_num_rows($result);




	//Cybergate Mouse Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'Mouse' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$mousecybergate = mysqli_num_rows($result);

	//Cybergate Monitor Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'Monitor' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$monitorcybergate = mysqli_num_rows($result);

	//Cybergate Keyboard Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'Keyboard' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$keyboardcybergate = mysqli_num_rows($result);

	//Cybergate AVR Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'AVR' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$avrcybergate = mysqli_num_rows($result);
	
	//Cybergate CPU Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'CPU' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$cpucybergate = mysqli_num_rows($result);
	
	//Cybergate Headphones Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'Headphone' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$headphonescybergate = mysqli_num_rows($result);
	
	//Cybergate Chair Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'Chair' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$chaircybergate = mysqli_num_rows($result);
	
	//Cybergate Table Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'Cybergate' AND productDesc = 'Table' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$tablecybergate = mysqli_num_rows($result);




		//EcoTower Mouse Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'Mouse' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$mouseecotower = mysqli_num_rows($result);

	//EcoTower Monitor Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'Monitor' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$monitorecotower = mysqli_num_rows($result);

	//EcoTower Keyboard Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'Keyboard' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$keyboardecotower = mysqli_num_rows($result);

	//EcoTower AVR Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'AVR' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$avrecotower = mysqli_num_rows($result);
	
	//EcoTower CPU Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'CPU' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$cpuecotower = mysqli_num_rows($result);
	
	//EcoTower Headphones Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'Headphone' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$headphonesecotower = mysqli_num_rows($result);
	
	//EcoTower Chair Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'Chair' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$chairecotower = mysqli_num_rows($result);
	
	//EcoTower Table Counter
	$sql = "SELECT * FROM tblproducts WHERE productBranch = 'EcoTower' AND productDesc = 'Table' AND productStatus = 'Available';";
	$result = mysqli_query($conn, $sql);
	$tableecotower = mysqli_num_rows($result);
}		