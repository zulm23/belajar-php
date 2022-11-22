<?php
/*Operator Array
● Di PHP, Array memiliki operator khusus
● Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbeda

Operator Array
Contoh      Nama            Keterangan
$a + $b     Union           Menggabungkan array $a dan $b
$a == $b    Equality        true jika $a dan $b memiliki key-value sama
$a === $b   Identity        true jika $a dan $b memiliki key-value sama dan posisi sama
$a != $b    Inequality      true jika $a dan $b tidak sama
$a <> $b    Inequality      true jika $a dan $b tidak sama
$a !== $b   Nonidentity     true jika $a dan $b tidak identik*/

echo "==Union==\n";
$first = [
    "first_name" => "eko",
];
$last = [
    "last_name" => "Khaneddy",
];

$full = $first + $last;
var_dump($full);
echo "\n";
echo "==Equality==\n";
$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy",
];
$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko",
];
var_dump($a == $b);
var_dump($a === $b);
