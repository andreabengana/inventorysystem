<?php
include "includes/db.inc.php";

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM tblproducts 
	WHERE productBranch LIKE '%".$search."%'
	OR productDesc LIKE '%".$search."%' 
	OR productTag LIKE '%".$search."%' 
    OR productBrand LIKE '%".$search."%' 
    OR productModel LIKE '%".$search."%' 
    OR productCompanyCode LIKE '%".$search."%'
    OR dateAccepted LIKE '%".$search."%'
    OR productStatus LIKE '%".$search."%'
    OR datePurchased LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tblproducts ORDER BY productID";
}
$result = mysqli_query($conn, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Asset Tag</th>
							<th>Branch</th>
                            <th>Brand</th>
                            <th>Model/Serial Number</th>
							<th>Supplier</th>
                            <th>Description</th>
                            <th>Date Accepted</th>
                            <th>Status</th>
                            <th>Date Purchased</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["productTag"].'</td>
				<td>'.$row["productBranch"].'</td>
                <td>'.$row["productBrand"].'</td>
                <td>'.$row["productModel"].'</td>
				<td>'.$row["productCompanyCode"].'</td>
                <td>'.$row["productDesc"].'</td>
                <td>'.$row["dateAccepted"].'</td>
                <td contenteditable>'.$row["productStatus"].'</td>
                <td contenteditable>'.$row["datePurchased"].'</td>
			</tr>
		';
	}
    echo $output;
}
else
{
	echo 'Data Not Found';
}


?>