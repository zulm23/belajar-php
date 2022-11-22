<?php 
require_once __DIR__ . "/getConnection.php";

$connection = getConection();
//tidak direkomendasikan menggunakan *
$sql = "SELECT id, name, email FROM pzn_customers";
$pdoStatmaent = $connection->query($sql);
foreach ($pdoStatmaent as $row ) {
    echo PHP_EOL;
    echo "==\$pdoStatmaent as \$row" . PHP_EOL;
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    echo "id : $id".PHP_EOL;
    echo "name : $name".PHP_EOL;
    echo "email : $email".PHP_EOL;

    // echo PHP_EOL;
    // echo "==PDOStatment row". PHP_EOL;
    // var_dump($row);
}

echo PHP_EOL;
echo "==PDOStatment";
var_dump($pdoStatmaent);
$connection = null;