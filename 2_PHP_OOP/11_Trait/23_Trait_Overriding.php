<?php
/*Trait Abstract Function
● Selain konkrit function, di trait juga kita bisa menambahkan abstract function
● Jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di
class yang menggunakan trait tersebut*/
echo "==Trait Abstract Function==\n";
trait TraitAbstractFunction
{
    abstract public function traitCanRun(): void;
}

class TraitAbstrackPerson
{
    use TraitAbstractFunction;
    public function traitCanRun(): void
    {
        echo "Wajib meng overide trait abstract\n";
    }
}

var_dump(new TraitAbstrackPerson());

/*Trait Overriding
● Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan meng-override function tersebut
● Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan
meng-override function di trait
● Sehingga posisinya seperti ini ParentClass =override by=> Trait =override by=> ChildClass*/

/*Trait Visibility Override
● Selain melakukan override function di class, kita juga bisa melakukan override visibility function yang terdapat di trait
● Namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara
sederhana ketika menggunakan trait nya*/

class PersonVisivilityTrait{
    use TraitGoodBye, TraitHallo, HasName{
        traitGoodBye as private; // mengubah visibily
    }
}
