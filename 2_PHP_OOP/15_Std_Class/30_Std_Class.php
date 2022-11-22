<?php
/*stdClass
● stdClass adalah class kosong bawaan dari PHP
● stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
● stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis*/

echo "==stdClass==\n";

$array = [
    "first" => "Surroyah",
    "Middle" => "Cahyani",
    "Last" => "Putri",
];
echo "==akses sebagai array==\n";
echo $array["first"] . PHP_EOL;
echo $array["Middle"] . PHP_EOL;
echo $array["Last"] . PHP_EOL;


$object = (object)$array;
echo "==Array menjadi object==\n";
var_dump($object);
echo "\n";
echo "==akses sebagai property==\n";

echo $object->first . PHP_EOL;
echo $object->Middle . PHP_EOL;
echo $object->Last . PHP_EOL;

echo "==Object di ubah ke array==\n";
$arrrayBaru = (array)$object;
var_dump($arrrayBaru);
