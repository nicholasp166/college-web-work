<?php
include 'connect.php'; //Include the connection file
 
$error_msg = array();

if (!$conn){
        die("Connection failed: ". mysqli_error());
}


$sql = "CREATE TABLE Listing ( 
productID INT(3) PRIMARY KEY,
productName VARCHAR(30),
bidPrice VARCHAR(10),
salePrice VARCHAR(10),
itemCategory VARCHAR(30),
itemDesc VARCHAR(100),
itemImg VARCHAR(100)";

        if(mysqli_query($conn,$sql)){
                echo "Table made";
        } else {
                echo "error table". $mysqli_error($db);
        }

?>
