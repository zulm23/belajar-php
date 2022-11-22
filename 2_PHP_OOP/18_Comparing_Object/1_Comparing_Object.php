<?php
/*Comparing Object
● Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan
operator == (equals) dan === (identity)
● Operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap
properties juga akan dibandingkan menggunakan operator == (equals)
● Sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya
mengacu ke object yang sama*/
echo "==Comparing Object==\n";
class ComparingObj
{
    public string $id;
    public string $name;
    public int $value;
}

$comparingObj = new ComparingObj();
$comparingObj->id = "1";
$comparingObj->name = "Suroyah";
$comparingObj->value = 100;

$comparingObj1 = new ComparingObj();
$comparingObj1->id = "1";
$comparingObj1->name = "Suroyah";
$comparingObj1->value = 100;

var_dump($comparingObj == $comparingObj1);
var_dump($comparingObj === $comparingObj1);
var_dump($comparingObj1 === $comparingObj1);