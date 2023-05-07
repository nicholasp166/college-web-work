<!DOCTYPE html>
<html lang="en">
<head>
<title> VENDOR SHOP PAGE TITLE </title>
<?php require "connect.php";?>
<style>
<?php include "connect.php";?>
<?php include "site.css"; ?>
<?php include "header.php";?>
<?php include "footer.php";?>
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
</head>
<body>
        </div>
        <div class= "topContent">
        <?php
            $sql = "SELECT productID, productName, bidPrice, salePrice, itemCategory, itemDesc, itemImg FROM listing";
            $result = $conn->query($sql);

            if($result-> num_rows > 0){
                echo "<table><tr><th>ID</th><th>Listing Name</th><th>Bidding Price</th><th>Sale Price</th><th>Description</th></tr>";
                while($row = $result->fetch_assoc()) {
                    if($row["productID"] < 988){
                    echo "<tr><td>".'<img class="listImg" src ="blankimg.png" width="200" height= "180">'."</td>";
                    echo "<td>".'<a href="">'.$row["productName"].'</a>'."</td>";
                    echo "<td>".$row["bidPrice"]."$"."</td>";
                    echo "<td>".$row["salePrice"]."$"."</td>";
                    echo "<td>".$row["itemDesc"]."</td></tr>";
                    }
                  }
                  echo "</table>";
                } else {
                  echo "0 results";
                }
        ?>
        </div>
    </div>

</body>
</html>