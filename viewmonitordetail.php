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
<body>
	 <div class="container" style="margin-top: 50px;">
        <div class="table-responsive">  
            <table id="employee_data" class="table table-striped table-bordered">  
                <thead>  
                    <tr>  
                        <td>Product ID</td>  
                        <td>Company Code</td>  
                        <td>Brand</td>  
                        <td>Model</td>  
                        <td>Description</td>  
                        <td>Stock Count</td>  
                    </tr>  
                </thead>  
                <?php
                
                $view = $_REQUEST['view'];
                if(isset($view)) {
                    if($view == 'monitor'){
                        $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Monitor';";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '  
                            <tr>  
                                <td>'.$row["productID"].'</td>  
                                <td>'.$row["productCompanyCode"].'</td>  
                                <td>'.$row["productBrand"].'</td>  
                                <td>'.$row["productModel"].'</td>  
                                <td>'.$row["productDesc"].'</td>  
                                <td>'.$row["productStocks"].'</td>
                            </tr>  
                            ';
                        }
                    } else if($view == 'keyboard'){
                        $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Keyboard';";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '  
                            <tr>  
                                <td>'.$row["productID"].'</td>  
                                <td>'.$row["productCompanyCode"].'</td>  
                                <td>'.$row["productBrand"].'</td>  
                                <td>'.$row["productModel"].'</td>  
                                <td>'.$row["productDesc"].'</td>  
                                <td>'.$row["productStocks"].'</td>
                            </tr>  
                            ';
                        }
                    }
                }
                else {
                    echo "job name is not set";
                }
                // $sql = "SELECT * FROM tblProducts WHERE productDesc = 'Monitor';";
                // $result = mysqli_query($conn, $sql);
                // while ($row = mysqli_fetch_assoc($result)){
                //     echo '  
                //     <tr>  
                //         <td>'.$row["productID"].'</td>  
                //         <td>'.$row["productCompanyCode"].'</td>  
                //         <td>'.$row["productBrand"].'</td>  
                //         <td>'.$row["productModel"].'</td>  
                //         <td>'.$row["productDesc"].'</td>  
                //         <td>'.$row["productStocks"].'</td>
                //     </tr>  
                //     ';
                // }
                ?>  
            </table>  
	 </div>
</body>
</html>