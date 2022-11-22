<?php
/*Reflection
● Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
● Reflection adalah materi yang sangat panjang dan banyak, sehingga disini kita hanya akan
membahas perkenalannya saja
● Reflection adalah fitur yang biasanya digunakan saat kita membuat framework
● https://www.php.net/manual/en/book.reflection.php

Studi Kasus : Membuat Validation Framework
● Sekarang kita akan coba melakukan studi kasus menggunakan Reflection
● Kita akan membuat validation framework menggunakan reflection
● Validation framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai
null atau tidak, kalo null atau belum di set, kita akan throw ValidationException
● Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual
*/

// require_once "../23_Exception/Exception.php";
require_once "./2_PHP_OOP/23_Exception/Exception.php";
// require_once "../../23_Exception/Exception.php";

echo "\n";
echo "Reflection \n";
class ValidateUtil
{
    //tanpa mengguanakan Reflection
    public static function validate(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->username)) {
            throw new ExceptionSendiri("username is null");
        } else if (!isset($loginRequest->password)) {
            throw new ExceptionSendiri("password is null");
        }
    }
    //mengguanakan Reflection
    public static function validateReflection($request) 
    {
        $reflection = new ReflectionClass($request);
        //get property in object
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property ) {
            if (!$property->isInitialized($request)) {
                throw new ExceptionSendiri("$property->name in not set");
            } else if (is_null($property->getValue($request))) {
                throw new ExceptionSendiri("$property->name is null");
            }
        }
    }
}

$login = new LoginRequest();
// ValidateUtil::validate($login);
ValidateUtil::validateReflection($login);
