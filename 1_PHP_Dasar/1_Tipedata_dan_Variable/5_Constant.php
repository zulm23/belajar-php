<?php
/*
Constant
● Variable di PHP sifatnya mutable, artinya bisa dirubah
● Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan
di PHP
● Sebagai gantinya, terdapat fitur yang namanya constant
● Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
● Untuk membuat constant kita bisa menggunakan function define()
● Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
*/

define("AUTHOR", "Belajar Pemograman PHP");
define("APP_VERSION", 100);
echo AUTHOR."\n";
echo APP_VERSION."\n";


