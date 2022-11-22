<?php

/*Function Argument
● Kita bisa mengirim informasi ke function yang ingin kita panggil
● Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function
yang sudah kita buat
● Cara membuat argument sama seperti cara membuat variabel
● Argument ditempatkan di dalam kurung () di deklarasi function
● Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma*/
echo "==Function Argument==\n";
function sayHello(string $name)
{
    echo "Hallo $name" . PHP_EOL;
}

sayHello("Dandi");
sayHello("Budi");

/*Default Argument Value
● PHP mendukung default argument value
● Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter,
kita bisa menentukan data default nya apa*/
echo "==Default Argument Value==\n";
function sayName(string $name = "Anonymous")
{
    echo "Hallo $name" . PHP_EOL;
}
sayName();
sayName(name:"kamu");
/*Kesalahan Default Argument Value
● Default argument value bisa disimpan argument manapun
● Namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter
awal, maka itu kurang berguna*/

/*Type Declaration
● Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
● Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang
menggunakan argument dengan tipe data tertentu
● Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan
pengecekan ketika kita mengirim value ke function tersebut
● Jika tipe data value tidak sesuai, maka akan terjadi error
● Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita
menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string
tersebut menjadi int*/
/*
Valid Types (1)
Type                    Keterangan
Class / Interface       Parameter harus tipe Class / Interface
self                    Parameter harus sama dengan Class dimana function ini dibuat
array                   Parameter harus array
callable                Parameter harus callable
bool                    Parameter harus boolean
float                   Parameter harus floating point
int                     Parameter harus integer number
string                  Parameter harus string
interable               Parameter harus array atau tipe Traversable
object                  Parameter harus sebuah object*/

echo "==Default Argument Value==\n";
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total Penjumlahan : $first + $last = $total" . PHP_EOL;
}

sum(10, 15);

/*Variable-length Argument List
● Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah
parameter yang menerima banyak value
● Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array,
namun kita tidak perlu manual mengirim array ke functionnya
● Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
● Untuk membuat variable-length argument list, kita bisa menggunakan tanda … (titik tiga kali)
sebelum nama argument*/
echo "==Variable-length Argument List==\n";

function sumAll(...$value)
{
    $total = 0;
    foreach ($value as $v) {
        $total += $v;
    }
    echo "Total " . implode(" + ", $value) . " = $total" . PHP_EOL;
}

sumAll(10, 10, 15, 25, 50, 75, 10);
