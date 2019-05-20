<?php
require 'includes/db.inc.php';

// $device = $_POST['productdesc'];
// $brand = $_POST['productbrand'];
// $code = $_POST['code'];
// $quantity = $_POST['quantity'];
// $branch = $_POST['branch'];
// $employeecode = $_POST['employeecode'];
// $department = $_POST['department'];
// $dispatchtoworkstation = $_POST['dispatchToWorkstation'];


// $department = $_POST['department'];


$sql = "SELECT * FROM `tblproducts` WHERE productStatus = 'Available' AND productBrand = 'A4Tech' AND productModel = '12345' AND productBranch = 'Cybergate' ORDER by productTag ASC LIMIT 5";



//$array[row][column]

$result = mysqli_query($conn, $sql);
$log_qry_cnt = mysqli_num_rows($result);
while($row2 = mysqli_fetch_array($result))
{
    $log_array[] = $row2;
}

for ($i=0; $i < 5; $i++) { 
    echo $log_array[$i]["productStatus"].$log_array[$i]["productTag"].$log_array[$i]["productID"]."<br>";
}

for ($i=0; $i < 5; $i++) { 
    $log_array[$i]["productStatus"] = "Dispatched";
}

for ($i=0; $i < 5; $i++) { 
    echo $log_array[$i]["productStatus"].$log_array[$i]["productTag"]."<br>";
}

?>