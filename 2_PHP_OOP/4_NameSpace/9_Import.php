<?php
/*use Keyword
● Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di
namespace kita perlu menyebutkan nama namespace nya di awal
● Jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak
duplikasi dengan menyebut namespace yang sama berkali-kali
● Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan
menggunakan kata kunci use*/

echo "==use Keyword== \n";
require_once (__DIR__."/data/Helper.php");
require_once (__DIR__."/data/NameSpace.php");
// use Nama NameSpace
use Data\ClassPertama\Person;
// use Data\ClassKedua\Person; // gunnakan alias
use function Helper\FunctionDanConstant\helpMu;
use const Helper\FunctionDanConstant\APPLICATION;

// panggil langsung class-nya
$person = new Person();
$person->name = "Judika";
$person->info("Budi");
$person1 = new Person();
$person1->name = "Judika1";
$person1->info("Budi1");
$personKedua = new Data\ClassKedua\Person();
$personKedua->name = "Judika Kedua";
$personKedua->info("Budi Kedua");

helpMu();
echo APPLICATION;
echo PHP_EOL;
echo PHP_EOL;
/*Alias
● Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal
class ketika kita ingin membuat class tersebut
● Namun bagaimana jika kita ternyata nama class nya sama?
● Untungnya PHP memiliki fitur yang namanya alias
● Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
● Kita bisa menggunakan kata kunci as setelah melakukan use*/
echo "==Alias== \n";
require_once "data/Alias.php";
use Alias\Satu\PersonAlias as Person1;
use Alias\Dua\PersonAlias as Person2;
use const Alias\Helper\TITLE as JUDUL;
use function Alias\Helper\helpFunction as asHelpFunction;

$person1 = new Person1();
$person1->name = "Person1";
$person1->info("Summayah");

$person2 = new Person2();
$person2->name = "Person2";
$person2->info("Summayah");

echo "ambil constant dari namespace alias : ".JUDUL. PHP_EOL;
//panggil function dari namespace alias
asHelpFunction();

/*Group use Declaration
● Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
● PHP memiliki fitur grup use, dimana kita bisa import beberapa class, function atau constant dalam
satu perintah use
● Untuk melakukan itu, kita bisa menggunakan kurung { }*/
echo "==Group use Declaration== \n";

require_once "data/GroupUse.php";

use GroupUse\Data\{ Conflict, Dummy, Sample};
use const GroupUse\HelpGroupUse\{BOOK as BUKU , AUTHOR};
use function GroupUse\HelpGroupUse\{functionGroupUse as groupUseFunction};
$sample = new Sample();
var_dump($sample);
$dummy = new Dummy();
var_dump($dummy);
$conflict = new Conflict();
var_dump($conflict);

echo "akses constant group use :".BUKU.PHP_EOL;
echo "akses constant group use AUTHOR :".AUTHOR.PHP_EOL;
groupUseFunction();