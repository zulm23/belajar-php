<?php
/*Operator Penugasan
● Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan
karakter = (sama dengan)
● Operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variable
● Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika*/

/*Operator Penugasan Aritmatika
Penugasan   Keterangan
$a += $b    $a = $a + b
$a -= $b    $a = $a - b
$a *= $b    $a = $a * b
$a /= $b    $a = $a / b
$a %= $b    $a = $a % b*/

$total =0;

$fruit = 10_000;
$chicken =35_000;
$orangeJuice = 1_000;
echo "Total Fruit";
$total += $fruit;
echo (var_dump($total)."\n");
echo "Total Chicken";
$total += $chicken;
echo (var_dump($total)."\n");
echo "Total Orange Juice";
$total += $orangeJuice;
echo (var_dump($total));
