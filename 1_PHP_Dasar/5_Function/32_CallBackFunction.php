<?php
/*Callback Function
● Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan
yang diberikan di argument
● Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
● Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
● Dan untuk memanggil callback function tersebut, kita bisa menggunakan function
call_user_func(callable, arguments)*/

echo "==Callback Function==\n\n";
function sayHello(string $name, callable $callableFunction)
{
    $finalName = call_user_func($callableFunction, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Menggunakan anonymous Function", function ($name): string {
    return strtoupper($name);
});
sayHello("Menggunakan Arroy Function", fn($name) => strtoupper($name));
sayHello("Menggunakan variable Function", "strtoupper");
