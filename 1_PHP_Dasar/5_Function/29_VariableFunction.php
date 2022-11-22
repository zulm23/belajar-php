<?php
/*Variable Function
● PHP mendukung konsep yang bernama variable function
● Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di
sebuah variable
● Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika
ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)*/
echo "==Variable Function==\n";
function foo(){
    echo "FOO".PHP_EOL;
}
function bar(){
    echo "BAR".PHP_EOL;
}

//masukan nama fuction (string) ke variableFunction
$variableFunction = "foo";
//panggil function foo dengan variableFuntion dengan menggunakan ()
$variableFunction();
$varBar = "bar";
$varBar();

echo "==Variable Function example==\n";

function sayHello(string $name, $filterNamaFunction)
{
    $variableFuntion = $filterNamaFunction($name);
    echo "Hello $variableFuntion".PHP_EOL;
}
function ubahNama($name):string
{
    return "Nama saya sudah di ubah ke uppercase :". strtoupper($name);
}

echo sayHello("Summayah","ubahNama");
echo sayHello("Summayah","strtolower");
