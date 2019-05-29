<?php 

	session_start();
	include "db.inc.php";
	$connect = mysqli_connect("localhost", "root", "", "inventorysystem");

	$sessionName = $_SESSION['userUid'];

	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	if($column_name == "reasonForReturn"){

		$sql = "SELECT userID FROM tblusers WHERE userName = '$sessionName'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		$sql = "INSERT INTO tblreturn (`userID`, `productID`, `reasonForReturn`) VALUES 
		(".$row['userID'].", '".$id."', '$text');";
		if(mysqli_query($connect, $sql)){  
			echo 'Data Updated';
			header("Location: ../return.php");
	
		} else{
			echo 'Data Not Updated'.$id." ".$text." ".$column_name." ";
			echo $sql; 
		}
	} else {
		$sql = "UPDATE tblproducts SET ".$column_name."='".$text."' WHERE productID= ".$id;
		
		//if INCOMING CHANGES is set FROM "Returned" or "Damaged" TO "Dispatched" or "Available"
		//to avoid manipulation of data
		if($text == "Dispatched" || $text == "Available"){
			echo 'Data Not Updated';
		} else {
			if(mysqli_query($connect, $sql)){  
				echo 'Data Updated';
				header("Location: ../return.php");
		
			} else{
				echo 'Data Not Updated'.$id." ".$text." ".$column_name." ";
				echo $sql; 
			}
		}
	}
	
	
?>