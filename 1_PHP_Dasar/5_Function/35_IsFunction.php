<?php
/*is Function
● PHP memiliki banyak sekali function dengan prefix is_
● Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
● https://www.php.net/manual/en/ref.var.php

Contoh Is Function
Function        Keterangan
is_string()     Apakah tipe data string
is_bool()       Apakah tipe data boolean
is_int()        Apakah tipe data number integer
is_float()      Apakah tipe data number floating point
is_array()      Apakah tipe data array
is_callable()   Apakah tipe data callable*/

$nama = "Sarimi";
$variableFunction = fn($tambahan)=> "hallo nama saya $nama yang $tambahan";
var_dump(is_string($nama));
var_dump(is_float($nama));
var_dump(is_int($nama));
var_dump(is_null($nama));
var_dump(is_callable($variableFunction));