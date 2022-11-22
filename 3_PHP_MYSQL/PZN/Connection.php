<?php

$host = "127.0.0.1";
$port = 3308;
$database = "clothes_app";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=clothes_app", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Succes Connection to database" . PHP_EOL;
    //menutup koneksi
    $connection = null;
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage() . PHP_EOL;
}
// phpinfo();