<?php 
require_once __DIR__."/Database.php";

$conn = new Database();
// create table 
$fieldName = <<<namatag
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname varchar(250) not null,
lastname varchar(250) not null,
email varchar(250)
namatag;
// $conn->createTable('user_w3school',$fieldName);

// insert data
// $key ="firstname, lastname, email";
// $value = "'Summyah', 'Albarkah', 'summayah@gmail.com'";
// $conn->insertData('user_w3school',$key, $value);

//insert data and get last id
//New record created successfully. Last insert ID is : 5
// $key = "firstname, lastname, email";
// $value = "'Kurdi', 'Albarkah', 'kurdi@gmail.com'";
// $conn->getLastID('user_w3school', $key, $value);

// $conn->insertDataWithPrepared("eddy", "Putra", "email@gmail.com");

// $conn->selectDataWithPrepared();

// $conn->selectDataOne('user_w3school',"id='5'");

// $conn->deleteData('user_w3school',9);

$conn->updateData('user_w3school', 9);


