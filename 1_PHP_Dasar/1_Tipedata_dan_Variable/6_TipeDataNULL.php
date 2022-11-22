<?php
/*Data NULL
● Nilai NULL merepresentasikan sebuah variable tanpa nilai.
● Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa
menggunakan NULL untuk mengosongkan variable tersebut
● Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)*/
$name = "Summayah";
$name = null;

$age = null;

echo "Nama = ".$name."\n";
echo "Age = ".$age;
echo "\n";
/*Mengecek Apakah Data NULL
● Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
● Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function
is_null($variable)*/
echo "is Name null ? ";
echo is_null($name);
echo "\n";
/*Menghapus Variable
● Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan
menggunakan function unset($variable)
● Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut,
bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
● Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengeccek apakah sebuah
variable ada dan nilainya tidak NULL*/
$contoh = "Summayah";
unset($contoh);
// var_dump($contoh); //error undefine variable

//gunakan isset true jika variable ada dan tidak null
var_dump(isset($contoh));