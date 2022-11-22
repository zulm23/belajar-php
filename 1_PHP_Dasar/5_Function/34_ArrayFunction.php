<?php
/*Array Function
● Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi
data Array
● https://www.php.net/manual/en/ref.array.php

Contoh Array Function
Function        Keterangan
array_keys()    Mengambil semua keys milik array
array_values()  Mengambil semua values milik array
array_map()     Mengubah semua data array dengan callback
sort()          Mengurutkan array
rsort()         Mengurutkan array terbalik
shuffle()       Mengubah posisi data di array secara random*/

$data = [1, 3, 2, 5, 6, 8, 4, 7, 9];
$dataMapArray = [
    "id"=> 12,
    "nama"=> "Summayah",
    "alamat" => "Kp. Jati"
];
$dataBaru = array_map(fn($data) => "$data * 2", $data);
var_dump($dataBaru);
var_dump(array_keys($dataBaru));
var_dump(array_values($dataBaru));
var_dump(array_keys($dataMapArray));
var_dump(array_values($dataMapArray));
sort($data);
var_dump($data);
rsort($data);
var_dump($data);
shuffle($data);
var_dump($data);
