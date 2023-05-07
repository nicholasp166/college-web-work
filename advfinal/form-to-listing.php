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

<?php
    $listNumber = rand(1,988);
    $pName = $bPrice = $sPrice = $desc = "";
    $cat = $time = $pImg = "";
    $validated = true;
    $errorString = "Error: The following fields are empty:";
    $flag = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pName = htmlspecialchars($_POST['productName']);
        $bPrice = htmlspecialchars($_POST['bidPrice']);
        $sPrice = htmlspecialchars($_POST['salePrice']); 
        $cat = htmlspecialchars($_POST['category']);
        $pImg = htmlspecialchars($_POST['productImg']);
        $desc = htmlspecialchars($_POST['description']);
        
        $bPrice = strval($bPrice);
        $sPrice = strval($sPrice);

        if(empty($pName)){
                $errorString = $errorString. "<br>". "Product Name";
                $flag = 1;
        }
        if(!ctype_digit($bPrice)){
                $errorString = $errorString. "<br>". "Bid Price";
                $flag = 1;
        }
        if(!ctype_digit($sPrice)){
                $errorString = $errorString. "<br>". "Sale Price";
                $flag = 1;
        }

        if($flag == 1){
            $validated = false;
        }

        if($validated){
            $insertSql="INSERT INTO listing (productID , productName, bidPrice , salePrice , itemCategory, itemDesc, itemImg)
                                VALUES ('$listNumber', '$pName', '$bPrice', '$sPrice', '$cat', '$desc', '$pImg')";

            if($conn->query($insertSql) === TRUE){
                //echo "New Record created";
            } else {
                //echo "Error: ". $insertSql . "<br>". $conn->error;
            }
        }
    }
    //$conn->close();
    
?>
    <div class="topContent">
        <?php
        if($validated == true){
            echo "<p class='errorText'>"."LISTING CREATED PLEASE RETURN TO HOME PAGE"."</p>";
        } else {
            echo "<p class='errorText'>".$errorString."</p>";
        }
        ?>
        <h3><a href="main.php">RETURN TO HOME PAGE</a></h2>
        <h3><a href="createlisting.php">FILL OUT ANOTHER FORM </a></h2>
        <h3><a href="userlistings.php">BROWSE USER LISTINGS</a></h3>
    </div>
        
</body>
</html>