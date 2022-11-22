<?php
/*Trait
● Selain class dan interface, di PHP terdapat feature lain bernama trait
● Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
● Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
● Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class
dengan trait
● Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan
ulang di beberapa class
● Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use*/

echo "==Trait==\n";

trait TraitGoodBye
{
    public string $name;
    public function traitGoodBye(?string $name): void
    {
        if(is_null($name)){
            echo "Good Bye" .PHP_EOL;
        } else {
            echo "Good Bye $name".PHP_EOL;
        }
    }
    
}
trait TraitHallo
{
    public string $name;
   
    public function traitHello(?string $name): void
    {
        if(is_null($name)){
            echo "Hello".PHP_EOL;
        } else {
            echo "Hello $name".PHP_EOL;
        }
    }
}

class TraitPerson{
    use TraitGoodBye, TraitHallo;
}

$traitPerson = new TraitPerson();
$traitPerson->traitGoodBye("Bambang");
$traitPerson->traitHello("Kuldi");