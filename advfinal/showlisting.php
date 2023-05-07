<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
<title> VENDOR SHOP PAGE TITLE </title>
<style>
<?php include "connect.php"; ?>
<?php include "site.css"; ?>
<?php include "header.php"; ?>
<?php include "footer.php"; ?>
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
</head>
<body>
    <div class="topContent">
        <?php
            $sql = "SELECT productID, productName, bidPrice, salePrice, itemCategory, itemDesc FROM listing";
            $result = $conn->query($sql);

            if($result-> num_rows > 0){
                echo "<table><tr><th>ID</th><th>Name</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["productID"]."</td><td>".$row["productName"]." ".$row["bidPrice"]." ".$row["salePrice"]."</td></tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 results";
                }
        ?>
    </div>    
</body>
</html>