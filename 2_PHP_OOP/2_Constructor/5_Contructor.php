<?php
/*Constructor
● Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita
menggunakan kurung ()
● Di dalam class PHP, kita bisa membuat constructor, constructor adalah function yang akan
dipanggil saat pertama kali Object dibuat.
● Mirip seperti di function, kita bisa memberi parameter pada constructor
● Nama constructor di PHP haruslah __construct()*/

echo "==Constructor== \n";
class ContructorClass{
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    //buat contructor
    public function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }
}
$constructorClass = new ContructorClass("Sumayyah","jalan panjang");
echo $constructorClass->name. PHP_EOL;
echo $constructorClass->address. PHP_EOL;
var_dump($constructorClass);
echo "\n";