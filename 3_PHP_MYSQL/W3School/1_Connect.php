<?php
$host = "127.0.0.1";
$port = 3308;
$database = "clothes_app";
$username = "root";
$password = "";

try {
    //connect to database
    $conn = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $err) {
    echo "Connection failed : {$err->getMessage()}";
}

//close database
$conn = null;