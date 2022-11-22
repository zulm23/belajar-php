<?php
/*Properties vs Constant
● Saat kita membuat object, properties yang terdapat di class akan secara otomatis dibuat per
object, oleh karena itu untuk mengakses properties, kita perlu menggunakan object, atau jika dari
dalam object tersebut sendiri, kita perlu menggunakan kata kunci this
● Sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object. Constant itu
hidupnya di class, bukan di object, oleh karena itu untuk mengaksesnya kita perlu menggunakan
NamaClass::NAMA_CONSTANT
● Secara sederhana, properties akan dibuat satu per instance class (object), sedangkan constant
dibuat satu per class*/
/*self Keyword
● Jika di dalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses
menggunakan NamaClass::NAMA_CONSTANT
● Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah*/
echo "==Properties vs Constant== \n";
class SelfKeyword{
    const AUTHOR = "Bang Dzun";
    function info(){
        echo "Author Self : ".self::AUTHOR .PHP_EOL;
        echo "Author Class : ".SelfKeyword::AUTHOR .PHP_EOL;
    }
}

$selfKeyword = new SelfKeyword();
$selfKeyword->info();
