<?php

function getConection():PDO
{
    $host = "127.0.0.1";
    $port = 3308;
    $database = "clothes_app";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

