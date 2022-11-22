<?php
/*Polymorphism
● Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
● Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
● Polymorphism erat hubungannya dengan Inheritance*/

echo "==Polymorphism==\n";
class Programer{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class FrontEnd extends Programer{

}

class BackEnd extends Programer{

}

//class baru dengan property tipe data class Programerer
class Company{
    public Programer $programer;

    public function sayGoodBye(Programer $programer):void{
        echo "Bye $programer->name".PHP_EOL;
    }
}

//buat object dari class company
$company = new Company();
$company->programer = new Programer("Tipe data Programer");
var_dump($company);
// Polimorphism tipe data Programer bisa di ubah dgn tipe data turunanya
$company->programer = new FrontEnd("Tipe data FrontEnd");
var_dump($company);
$company->programer = new BackEnd("Tipe data BackEnd");
var_dump($company);

echo "\n";
echo "==Function Polymorphism==\n";
$funcPolimorphisme = new Company();
$funcPolimorphisme->sayGoodBye(new Programer("Tipe data Programer"));
//polimorphism di argument function
$funcPolimorphisme->sayGoodBye(new FrontEnd("Tipe data FrontEnd"));
$funcPolimorphisme->sayGoodBye(new BackEnd("Tipe data BackEnd"));

echo "END ==\n";
