<?php
/*Trait Inheritance
● Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
● Lantas bagaimana dengan trait yang menggunakan trait lain?
● Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
● Untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di
class*/
echo "==Trait Inheritance==\n";

trait InheritanceGoodBye
{
    public string $name;
    public function inheritanceGoodBye(?string $name): void
    {
        if(is_null($name)){
            echo "Good Bye" .PHP_EOL;
        } else {
            echo "Good Bye $name".PHP_EOL;
        }
    }
    
}
trait InheritanceHallo
{
    public string $name;
   
    public function inheritanceHello(?string $name): void
    {
        if(is_null($name)){
            echo "Hello".PHP_EOL;
        } else {
            echo "Hello $name".PHP_EOL;
        }
    }
}

trait InheritanceHasName
{
    public string $name;
}

// menurunkan dari trait parent
trait All{
    use InheritanceGoodBye, InheritanceHallo, InheritanceHasName;
}


class InheritancePerson{
    use All;
}



$inheritancePerson = new InheritancePerson();
$inheritancePerson->inheritanceGoodBye("Bambang");
$inheritancePerson->inheritanceGoodBye("Kuldi");
$inheritancePerson->name = "Preoperty Name";
echo $inheritancePerson->name;
