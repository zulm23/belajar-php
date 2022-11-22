<?php
/*Constructor Overriding
● Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan ulang di
class Child nya
● Sebenarnya di PHP, kita bisa meng-override function dengan arguments yang berbeda, namun
sangat tidak disarankan
● Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan
WARNING
● Namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah
arguments nya, namun direkomendasikan untuk memanggil parent constructor*/
echo "==Constructor Overriding==\n";

class ContructorOverriding{
    public string $name;
    public string $title;

    public function __construct(string $name, string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }
    public function sayHello(string $name):void{
        echo "Hi $name my name is $this->name PARENT\N";
    }
}

class ChildConstructorOverriding extends ContructorOverriding{
    //overide contructor dari parent
    public function __construct(string $name){
        parent::__construct($name); //tidak wajib namun direkomendasikan utk memanggil contructor parent-nya
    }
}

$childContructor = new ChildConstructorOverriding("Child Overide");
$childContructor->sayHello("Pareng");