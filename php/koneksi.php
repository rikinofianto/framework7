<?php

$host = 'localhost';
$db = 'rumah_sakit';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db";

try{
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    echo $e->getMessage();
}