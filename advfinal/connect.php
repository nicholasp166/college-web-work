<?php

//This file connects to a MySQL database located on the local server that the web page is running from
//This is the course sample page, students should update the database name and user information based on their given accounts

define("HOST", "localhost");     //Do not change this
define("USER", "root"); //Use the user assigned to you from your instructor
define("PASSWORD", "");  //Use the password assigned to you from your instructor
define("DATABASE","finalProjDB");

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  //If unable to connect show error
} 
//echo "Connection Successful --->" . "<br>";  //if connection success show message , testing purposes


?>