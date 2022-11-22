<?php

/*Overloading
● Overloading adalah kemampuan secara dinamis membuat properties atau function
● Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
● Namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
● Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas*/

/*Properties Overloading
● Saat kita mengakses properties, maka secara otomatis properties akan diakses
● Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara
otomatis menjadikan itu error
● PHP akan melakukan fallback ke magic function
● Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic
function tersebut
● Ada beberapa magic function yang bisa kita gunakan untuk properties overloading

Magic Function untuk Properties Overloading
Magic Function                  Keterangan
__set($name, $value) : void     Dieksekusi ketika mengubah properties yang tidak tersedia
__get($name) : mixed            Dieksekusi ketika mengakses properties yang tidak tersedia
__isset ($name ) :              bool Dieksekusi ketika mengecek isset() atau empty()
                                properties yang tidak tersedia
__unset($name) : void           Dieksekusi ketika menggunakan unset() properties yang
                                tidak tersedia
*/
echo "=Properties Overloading=\n";
class Zero
{
    private array $properties = [];

    //Membuat Property Dinamis
    public function __get($name)
    {
        echo "Acces Property $name" . PHP_EOL;
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        echo "Set property $name with value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }
    public function __isset($name)
    {
        echo "Isset $name" . PHP_EOL;
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    //Membuat method dinamis
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call function $name, with argument $join" . PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name, with argument $join" . PHP_EOL;
    }
}
$zero = new Zero();
echo "=set Property=\n";
$zero->insertProperty = "set Property";
echo $zero->insertProperty . PHP_EOL;
echo "=get properti end value=\n";
echo $zero->buatProperty = "buat property";
var_dump(isset($zero->apakahDiSet));
unset($zero->apakahDiUnset);

/*Function Overloading
● Saat kita mengakses function, maka secara otomatis function akan diakses
● Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis
menjadikan itu error
● PHP akan melakukan fallback ke magic function
● Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic
function tersebut
● Ada beberapa magic function yang bisa kita gunakan untuk function overloading

Magic Function untuk Function Overloading
Magic Function                                  Keterangan
__call ( $name , $arguments ) : mixed           Dieksekusi ketika memanggil function yang
                                                tidak tersedia
static __callStatic ( $name , $arguments ) :
mixed                                           Dieksekusi ketika memanggil static function
                                                yang tidak tersedia
*/
echo PHP_EOL;
echo "=Function Overloading=\n";

$zero->namaFunction("satu", 100, "dua");

Zero::namafuntionStatic(100, "parameter");
