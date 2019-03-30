<?php
//1. mendeklarasikan connection string
$servername = "localhost";
$database = "rumah_sakit";
$username = "root";
$password = "";

//2. melakukan connection database
$conn = mysqli_connect($servername, $database, $username, $password);

//5. menutup connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>