<?php
session_start();

if(!isset($_SESSION['userUid'])){
	header("Location: login.php");
}
else{
    require 'includes/db.inc.php';
	require 'includes/navbar.inc.php';
}
?>
    <link rel="stylesheet" type="text/css" href="design/showdevicedesign.css">
     <body>
     <div class="container" style="margin-top: 50px;">
        <div class="table-responsive">  
            <table id="employee_data" class="table table-bordered text-center">  
                <thead class="table-primary">  
                    <tr>  
                        <td>Product ID</td>  
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>  
                        <td>Product Count</td>
                        <td>Date Received </td>  
                    </tr>  
                </thead>
                <?php
                if ($_GET['device'] == 'monitor'){    
                $sql = "SELECT * FROM tblproducts WHERE productDesc = 'Monitor';";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productID"].'</td>  
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>  
                        <td>'.$row["productQuantity"].'</td>
                        <td>'.$row["dateAccepted"].'</td>
                    </tr>';
                }
                }
                elseif($_GET['device'] == 'keyboard'){
                $sql = "SELECT * FROM tblproducts WHERE productDesc = 'Keyboard';";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){ 
                    echo '<tr>  
                        <td>'.$row["productID"].'</td>  
                        <td>'.$row["productCompanyCode"].'</td>  
                        <td>'.$row["productBrand"].'</td>  
                        <td>'.$row["productModel"].'</td>  
                        <td>'.$row["productDesc"].'</td>  
                        <td>'.$row["productQuantity"].'</td>
                         <td>'.$row["dateAccepted"].'</td>
                    </tr>';
                }
                }
                elseif($_GET['device'] == 'mouse'){
                    $sql = "SELECT * FROM tblproducts WHERE productDesc = 'Mouse';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                            <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
                elseif($_GET['device'] == 'avr'){
                    $sql = "SELECT * FROM tblProducts WHERE productDesc = 'AVR';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                             <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
                elseif($_GET['device'] == 'headphones'){
                    $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Headphones';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                             <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
                elseif($_GET['device'] == 'systemunit'){
                    $sql = "SELECT * FROM tblProducts WHERE productDesc = 'System Unit';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                             <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
                elseif($_GET['device'] == 'telephones'){
                    $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Telephone';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                            <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
                elseif($_GET['device'] == 'table'){
                    $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Table';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                            <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
                elseif($_GET['device'] == 'chair'){
                    $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Chair';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                        echo '<tr>  
                            <td>'.$row["productID"].'</td>  
                            <td>'.$row["productCompanyCode"].'</td>  
                            <td>'.$row["productBrand"].'</td>  
                            <td>'.$row["productModel"].'</td>  
                            <td>'.$row["productDesc"].'</td>  
                            <td>'.$row["productQuantity"].'</td>
                             <td>'.$row["dateAccepted"].'</td>
                        </tr>';
                }
                }
            ?>
            </table>  
     </div>
</body>
</html>

