<?php
/*This Keyword
● Saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci this
untuk mengakses object saat ini
● Misal kadang kita butuh mengakses properties atau function lain di class yang sama*/
echo "==This Keyword== \n";
class ThisKeyword{
    var string $name;

    function sayHello(?string $name){
        if (is_null($name)) {
            echo "Hai, my name is $this->name ".PHP_EOL;
        }else{
            echo "Hai, $name my name is $this->name"  .PHP_EOL;

        }
    }
}
$thisKeyword = new ThisKeyword();
$thisKeyword->name = "Surroyyah";
$thisKeyword->sayHello("Budi");
$thisKeyword1 = new ThisKeyword();
$thisKeyword1->name = "Summayah";
$thisKeyword1->sayHello(null);
echo "\n";
