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
    <div class="userLogForm">
        <fieldset>
            <form action="form-to-listing.php" method="POST" name="listingForm">
                <p>
                <span class="error"> * </span><label class ="listingForm">Product Name:</label>
                <input type="text" name= "productName" id="product" size = "20" maxlength = "50" aria-required="true"><br>
                <span class="error"> * </span><label class ="listingForm">Bid Price (0) For N/A:</label>
                <input type="text" name= "bidPrice" id="bidprice" size = "20" maxlength = "50" aria-required="true"><br>
                <span class="error"> * </span><label class ="listingForm">Sale Price:</label>
                <input type="text" name= "salePrice" id="saleprice" size = "20" maxlength = "50" aria-required="true">
                <label class ="listingForm">Category of item: </label>
                <input type="text" name= "category" id="itemcat" size = "20" maxlength = "50" aria-required="true">
                <label class= "listingForm" for="itemImg">Select Image to Upload:</label>
                <input type="file" id="image" name="productImg">
                <label class= "listingForm"> Product Description</label><br><br>
                <textarea name= "description" id="description" rows="6" cols = "40"></textarea>
                <br><input type="submit" value ="Submit All">
                </p>
            </form>
        </fieldset>
    </div>
</body>
</html>