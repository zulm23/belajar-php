<?php
/*Variable Scope
Di PHP, kita bisa membuat variable dimanapun yang kita mau
Scope variable adalah dibagian mana saja sebuah variable bisa diakses
PHP memiliki tiga jenis variable scope
● global
● local
● static*/

/*Global Scope
● Variable yang dibuat diluar function memiliki scope global
● Variable di scope global hanya bisa diakses dari luar function
● Artinya di dalam function, kita tidak bisa mengakses variable di global scope*/
echo "=Global Scope=\n";
$name = "Suroyyah"; //global scope
function sayName(){
    // echo $name; //error
}
sayName();
/*Local Scope
● Variable yang dibuat di dalam function memiliki scope local
● Variable di scope local hanya bisa diakses dari dalam function itu sendiri
● Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain*/
echo "=Local Scope=\n";

function createName(){
    $nameCreate = "sumbing"; //local scope
}
createName();
// echo $nameCreate; error

/*global Keyword
● Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
● Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global
scope dari dalam function*/
echo "=global Keyword=\n";

function sayNameGlobal(){
    global $name; //global keyword
    echo "Hallo $name\n";
}

sayNameGlobal();

/*$GLOBAL Variable
● Selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis
akan disimpan di dalam array $GLOBAL oleh PHP
● Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function
jika ingin mengakses global variable
● $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun*/
echo "=\$Super GLOBAL Variable=\n";
function sayNameSuperGlobal()
{
    echo "Hallo super global {$GLOBALS["name"]}\n";
}

sayNameSuperGlobal();

var_dump($GLOBALS["_SERVER"]["HOSTNAME"]);
/*Static Scope
● Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
● Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
● PHP memiliki scope yang bernama static
● Static scope hanya bisa di set ke local variable
● Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti
ketika sebuah function selesai dieksekusi
● Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya*/
echo "\n";
echo "=Static Scope=\n";
function increment(){
   static $counter = 1;
    echo "Counter : $counter".PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();