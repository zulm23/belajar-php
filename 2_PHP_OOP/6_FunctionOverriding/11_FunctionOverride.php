<?php
/*Function Overriding
● Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah
ada di parent class
● Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari
class child, function yang di class parent tidak bisa diakses lagi*/

class ClassOverriding{
    public string $name;

    public function sayHello(string $name) :void{
        echo "Hi, $name my name is $this->name in Parent\n";
    }
}
class ChildOverriding extends ClassOverriding{
    //overriding menimpa function yang ada di parent-nya jika mempunyai nama yang sama di parent dan di child
     public function sayHello(string $name) :void{
        echo "Hi, $name my name is $this->name in Child\n";
    }
}
echo "==ClassOverriding==\n";
$classOverriding = new ClassOverriding();
$classOverriding->name = "Doktor";
$classOverriding->sayHello("Joni");

echo "==ChildOverriding==\n";

$childOverriding = new ChildOverriding();
$childOverriding->name = "Doktor";
$childOverriding->sayHello("Joni");