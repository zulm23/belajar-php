<?php
/*
Tipe Data Array
● Array adalah tipe data yang berisikan kosong atau banyak data
● Array di PHP bisa berisikan data dengan jenis berbeda-beda
● Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array
sebanyak-banyaknya, tidak dibatasi kapasitasnya*/
$value = array(1, 2, 3, 4);
var_dump($value);
$name = ["Summayah", "putri", "Kuldi", 23, true];
var_dump($name);
/*Operasi Array
Operasi Keterangan
$array[index] => Mengakses data di array pada nomor index
$array[index] = value => Mengubah data di array pada nomor index dengan value
baru
$array[] = value => Menambah data di array pada posisi paling belakang
unset($array[index]) => Menghapus data di array, index otomatis hilang dari array
count($array) => Mengambil total panjang  data di array*/
echo "\n";
echo "==Operasi Array==\n";
var_dump($name[0]);
$name[0] = "Santiang"; // mengubah data array ke index
var_dump($name[0]);
unset($name[1]); // menghapus data array ke index
var_dump($name);
$name[1] = "data baru di tambah di index ke 1"; //menambah data baru di index ke array
$name[] = "data baru di tambah"; //menambah data baru di belakang array
var_dump($name);
var_dump(count($name)); //panjang array

/*Array Sebagai Map
● Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi
antara key dan value
● Namun di PHP, Map bisa dibuat menggunakan Array
● Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas
memasukkan data ke dalam Array
● Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa
gunakan tipe data lain, seperti string misal nya
● Hal tersebut terlihat seperti Map di bahasa pemrograman lain*/
$eko = array(
    "id" => "0899",
    "name" => "Kurniawan",
    "age" => 29,
);
$budi = [
    "id" => "0889",
    "name" => "Budi Nugraha",
    "age" => 55,
];
echo "\n";
echo "==Array Sebagai Map==\n";
var_dump($eko);
var_dump($eko["name"]);
echo "\n";

var_dump($budi);
var_dump($budi["name"]);

/*Array di dalam Array
● Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
● Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan*/
echo "\n";
echo "==Array di dalam Array==\n";

$dataSiswa = array(
    "eko" => array(
        "id" => "0899",
        "name" => "Kurniawan",
        "age" => 29,
    ),
    "budi" => [
        "id" => "0889",
        "name" => "Budi Nugraha",
        "age" => 55,
    ],
);
var_dump($dataSiswa["budi"]["name"]);