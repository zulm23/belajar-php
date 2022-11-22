<?php
require_once __DIR__ . "/getConnection.php";

$connection = getConection();

$sql = <<<QUERYSQL
 INSERT INTO pzn_customers(name, email)
 VALUES('Kurdi', 'kurdi@gmial.com')
QUERYSQL;
//insert data
$connection->exec($sql);
$connection= null;