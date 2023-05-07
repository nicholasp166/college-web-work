<!DOCTYPE html>
<html lang="en">
<head>
<title> VENDOR SHOP PAGE TITLE </title>
<style>
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
        <form action="form-to-acc.php" method="POST" name="signUpForm">
            <p>
                <label class ="inputForm" for="eAddress"> Email: </label>
                <input type="text" name= "eAddress" id="eAddress" size = "20" maxlength = "50" autocomplete="email" aria-required="true">
                <span class="error"> * </span>
                <label class ="inputForm" for="username"> Username:</label>
                <input type="text" name= "fname"  id= "fname" size = "20" maxlength = "35" autocomplete="given-name" aria-required="true">
                <span class="error"> * </span>
                <label class ="inputForm" for="password"> Password: </label>
                <input type="text" name= "password"  id= "password" size = "20" maxlength = "35" autocomplete="family-name" aria-required="true">
                <span class="error"> * </span>
            </p>
        </form>
        </fieldset>
    </div>
</body>
</html>