<?php
/*Anonymous Function
● Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
● Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
● Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya*/
echo "==Anonymous Function==\n";
$sayHello = function (string $name) {
    echo "Hallo $name" . PHP_EOL;
};

$sayHello("Surrayyah");
$sayHello("Putri");

echo "==Anonymous Function Sebagai Argument==\n";
function sayGoodBye(string $name, $anoFuction)
{
    $finalName = $anoFuction($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

echo "==Menggunakan Function==\n";
function variableFunction(string $name){
    return strtolower($name);
}
sayGoodBye("Karomah","variableFunction");


echo "==Menggunakan Variable Function==\n";
$variableFunction = function (string $name){
    return strtolower($name);
};
sayGoodBye("Karomah",$variableFunction);


echo "==Menggunakan Anonymous Function==\n";
sayGoodBye("Karomah", function (string $name) {
    return strtoupper($name);
});
/*Mengakses Variable di Luar Closure
● Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
● Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara
explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita
gunakan*/
echo "==Mengakses Variable di Luar Closure==\n";
$firstName = "Sumarti";
$lastName = "Putri";
$sayHelloSumarti = function() use($firstName, $lastName)
{
echo "Hello $firstName $lastName\n";
};
$sayHelloSumarti();