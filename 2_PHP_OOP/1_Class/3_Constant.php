<?php
/*Constant
● Properties di class bisa diubah, mirip seperti variable
● Di class juga kita membuat constant, data yang tidak bisa diubah
● Di materi PHP Dasar, kita belajar untuk membuat constant itu perlu menggunakan function
define()
● Namun sejak PHP 7.4, kita bisa menggunakan kata kunci const untuk membuat constant, mirip
seperti variable, namun tidak menggunakan karakter $*/
echo "==Constant== \n";
define("APPLICATION", "Belajar OOP");
const APP_VERSION = "1.100.1"; // VERSI TERBARU

echo APPLICATION. PHP_EOL;
echo APP_VERSION. PHP_EOL;
echo "==Constant di Class== \n";
class ConstantClass{
    const AUTHOR = "Pemograman OOP PHP";
    var string $name;
    var ?string $address = null;
    var string $country = "Indonseia";
}

$constantClass = new ConstantClass();
echo "Country :". $constantClass->country .PHP_EOL;
echo "Author :". ConstantClass::AUTHOR;
echo " \n";
