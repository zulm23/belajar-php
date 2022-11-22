<?php
/*Increment dan Decrement
● PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number
sejumlah 1 angka
● Ini bisa mempersingkat kita ketika ingin menaikkan data

Operator Increment dan Decrement
Contoh      Name                Efek
$a++        Post increment      Kembalikan $a lalu naikkan 1 angka
++$a        Pre increment       Naikkan $a satu angka, lalu kembalikan $a
$a--        Post decrement      Kembalikan $a lalu turunkan 1 angka
--$a        Pre decrement       Turunkan $a satu angka, lalu kembalikan $a*/
echo "==Post increment==\n";
$a = 10;
$b = $a++;
// $b = $a;
// $a = $a+1;
var_dump($a); //11
var_dump($b); //10
echo"\n";

echo "==Pre increment==\n";
$a = 10;
$b = ++$a;
// $a = $a+1;
// $b = $a;
var_dump($a);
var_dump($b);