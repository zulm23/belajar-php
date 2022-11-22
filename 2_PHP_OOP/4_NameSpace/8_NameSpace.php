<?php
/*Namespace
● Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
● Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan
jenis-jenis class
● PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace
● Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama namespace nya
● Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace
nama class sama tidak akan menjadikan error di PHP*/
/*Membuat Namespace
● Untuk membuat namespace, kita bisa menggunakan kata kunci namespace
● Jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace
sebelumnya*/

echo "==Membuat Namespace== \n";
require_once (__DIR__."/data/NameSpace.php");

$personDariNameSpace1 = new \Data\ClassPertama\Person;
$personDariNameSpace2 = new \Data\ClassKedua\Person;

var_dump($personDariNameSpace1);
var_dump($personDariNameSpace1);

/*Function dan Constant di Namespace
● Selain class, kita juga menggunakan function dan constant di namespace
● Dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya
dengan diawali dengan nama namespace nya*/

echo "==Function dan Constant di Namespace== \n";

require_once (__DIR__."/data/Helper.php");
Helper\FunctionDanConstant\helpMu();
echo Helper\FunctionDanConstant\APPLICATION .PHP_EOL;

/*Global Namespace
● Secara default saat kita membuat kode di PHP sebenarnya itu disimpan di global namespace
● Global namespace adalah namespace yang tidak memiliki nama namespace*/
echo "==Global Namespace== \n";
// namespace {
//     // helpMu();
// //echo Helper\FunctionDanConstant\APPLICATION . PHP_EOL;

// }