<?php
/*Trait Conflict
● Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
● Maka hal tersebut akan menyebabkan konflik
● Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof*/
echo "==Trait Conflict==\n";

trait ConflictGoodBye
{
    public string $name;
    public function conflictHello(?string $name): void
    {
        if(is_null($name)){
            echo "Good Bye" .PHP_EOL;
        } else {
            echo "Good Bye $name".PHP_EOL;
        }
    }
    
}
trait ConflictHallo
{
    public string $name;
   
    public function conflictHello(?string $name): void
    {
        if(is_null($name)){
            echo "Hello".PHP_EOL;
        } else {
            echo "Hello $name".PHP_EOL;
        }
    }
}

class ConflictPerson{
    //error jika trait memiliki function yang sama
    //Trait method ConflictGoodBye::conflictHello has not been applied as ConflictPerson::conflictHello, because of collision with ConflictHallo::conflictHello
    use ConflictHallo, ConflictGoodBye{
        //memilih function dari trait ConflictHallo
        // ConflictHallo::conflictHello insteadof ConflictGoodBye;
        //memilih function dari trait ConflictHallo
        ConflictGoodBye::conflictHello insteadof ConflictHallo;
    }
}

$conflictPerson = new ConflictPerson();
$conflictPerson->conflictHello("Conflict Person");