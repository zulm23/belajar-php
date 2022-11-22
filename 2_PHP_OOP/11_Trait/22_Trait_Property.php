<?php
/*Trait Properties
● Berbeda dengan interface, di trait, kita bisa menambahkan properties
● Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang
ada di trait*/
echo "==Trait Properties==\n";

require ("21_Trait.php");
trait HasName
{
    public string $name;
}

class TraitProperty{
    use HasName, TraitGoodBye, TraitHallo;
}

$traitProperty = new TraitProperty();
$traitProperty->name = "Property";
// class property menjadi memiliki property name
echo $traitProperty->name.PHP_EOL;
$traitProperty->traitGoodBye("Bambang");
$traitProperty->traitHello("Kuldi");
