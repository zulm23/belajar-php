<?php
/*Abstract Function
● Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class
abstract tersebut
● Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk
function tersebut
● Artinya, abstract function wajib di override di class child
● Abstract function tidak boleh memiliki access modifier private*/

echo "==Abstract Function==\n";
abstract class animal{
    public string $name;
    //abstract function tidak menggunakan block body
    abstract public function run():void;
}

class Cat extends animal{
    //wajib mengoveride function run di parent
    public function run():void
    {
        echo "Cat $this->name is running".PHP_EOL;
    }
}

$cat = new Cat();
$cat->name = "Kuciang";
$cat->run();