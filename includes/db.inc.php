<?php

$serverName = "localhost";
$dbuserName = "root";
$dbpassword = "";
$database = "inventorysystem";

$conn = mysqli_connect($serverName, $dbuserName, $dbpassword, $database);


if(!$conn){
	die("Connection failed");
}