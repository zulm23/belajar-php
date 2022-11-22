<?php 
require_once __DIR__ ."/getConnection.php";

$connection = getConection();

//simulasi inputan user
$username = "admin";
$password = "admin";
// $connection->prepare()
// $username = "admin';"; //sanitasi dengan regex
// $password = "password salah";
//sql injection  Success Login : admin
//select * from admin where username = 'admin';' and password = 'password salah';

$sql = "select * from admin where username = '$username' and password = '$password';";
$statment = $connection->query($sql);
echo $sql . PHP_EOL;

$success = false;
$find_user = null;
foreach ($statment as $row ) {
    //sukses
    $success = true;
    $find_user = $row["username"];
    // var_dump($row);
}

if ($success) {
    echo "Success Login : $find_user" . PHP_EOL;
}else{
    echo "Gagal Login";
}

$connection = null;