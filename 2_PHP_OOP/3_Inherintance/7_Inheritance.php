<?php
/*Inheritance
● Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain
● Dalam artian, kita bisa membuat class Parent dan class Child
● Class Child, hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class
Child
● Saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent, secara
otomatis akan dimiliki oleh class Child
● Untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kunci extends lalu diikuti
dengan nama class parent nya.*/
echo "==Inheritance== \n";

//Class Parent
class ClassParent{
    var string $name;

    function sayHello(string $name):void
    {
        echo "Hai $name my name is $this->name".PHP_EOL;
    }
}
class ClassChild extends ClassParent{
    function sayHelloClassChild(string $name)
{
    echo "Hai $name  my name is $this->name".PHP_EOL;
}

}

$child = new ClassChild();
$child->name = "Andi"; //property dari parent
echo "akses property parent = ". $child->name.PHP_EOL;
$child->sayHello("kuldi"); //Method dari parent
$child->sayHelloClassChild("kuldi dari Child");