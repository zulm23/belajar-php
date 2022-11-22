<?php
/*Visibility
● Visibility / Access modifier adalah kemampuan properties, function dan constant dapat diakses
dari mana saja
● Secara default, properties, function dan constant yang kita buat di dalam class bisa diakses dari mana saja, atau artinya dia adalah public
● Selain public, masih ada beberapa visibility lainnya
● Secara default kata kunci var untuk properties adalah sifatnya public*/

/*
Access Level
    Modifier        Class       Subclass        World
    public          Y            Y              Y
    protected       Y            Y              N
    private         Y            N              N
*/
echo "==Visibility==\n";
class VisibilityClass{
    private string $name;
    protected int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
    public function getName():string{
        return $this->name;
    }
    public function getPrice():string{
        return $this->price;
    }
}

class ChildVisibilty extends VisibilityClass{
    public function info():void{
        // echo "Name = $this->name";Warning: Undefined property: ChildVisibilty::$name krn di set private
        echo "Price = $this->price";
    }
}

$visibilityClass = new VisibilityClass("Suroyyah", 400);
// echo $visibilityClass->name; Error: Cannot access private property VisibilityClass::$name
echo $visibilityClass->getName() . PHP_EOL;
echo $visibilityClass->getPrice() . PHP_EOL;

$childVisiblity = new ChildVisibilty("Child Visibility", 500);
$childVisiblity->info();