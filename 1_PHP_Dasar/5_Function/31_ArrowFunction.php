<?php
/*Arrow Function
● Arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih
sederhana pembuatannya
● Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
● Hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa
digunakan, tidak seperti di anonymous function yang harus disebutkan secara manual
menggunakan kata kunci use
● Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
● Arrow function di khususnya untuk pembuatan function yang sederhana*/

echo "==Arrow Function==\n\n";
$firstName = "Sumarti";
$lastName = "Putri";
echo "=Menggunakan Anonymous Function=\n";
$anonymousFunction = function ($tambahan) use ($firstName, $lastName): string {
    return "hello $firstName $lastName $tambahan\n";
};
echo $anonymousFunction("yang manis");

echo "\n";
echo "=MenggunakanArrow Function=\n";

$arrowFunction = fn(string $tambahan) => "hello $firstName $lastName $tambahan\n";

echo $arrowFunction("yang cantik");
// var_dump($arrowFunction("yang cantik vardump"));
