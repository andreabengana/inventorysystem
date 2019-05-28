<?php  
	$connect = mysqli_connect("localhost", "root", "", "inventorysystem");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE tblproducts SET ".$column_name."='".$text."' WHERE productID= ".$id;  
	if(mysqli_query($connect, $sql)){  
		echo 'Data Updated';
		header("Location: ../return.php");

	} else{
		echo 'Data Not Updated'.$id." ".$text." ".$column_name." ";
		echo $sql; 
	}
?>