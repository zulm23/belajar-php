<?php 
/*Apa itu Object Oriented Programming?
● Object Oriented Programming adalah sudut pandang bahasa pemrograman yang berkonsep
“objek”
● Ada banyak sudut pandang bahasa pemrograman, namun OOP adalah yang sangat populer saat ini.
● Ada beberapa istilah yang perlu dimengerti dalam OOP, yaitu: Object dan Class

Apa itu Object?
● Object adalah data yang berisi field / properties / attributes dan method / function / behavior

Apa itu Class?
● Class adalah blueprint, prototype atau cetakan untuk membuat Object
● Class berisikan deklarasi semua properties dan functions yang dimiliki oleh Object
● Setiap Object selalu dibuat dari Class
● Dan sebuah Class bisa membuat Object tanpa batas

Membuat Class
● Untuk membuat class, kita bisa menggunakan kata kunci class
● Penamaan class biasa menggunakan format CamelCase*/
class BuatClass{

}

/*Membuat Object
● Object adalah hasil instansiasi dari sebuah class
● Untuk membuat object kita bisa menggunakan kata kunci new, dan diikuti dengan nama Class dan
kurung ()*/
class BuatObject
{

}
$objectBuatObject1 = new BuatObject();
echo "==MembuatClass dan Object== \n";
var_dump($objectBuatObject1);
$objectBuatObject2 = new BuatObject();
var_dump($objectBuatObject2);
echo "\n";

/*Properties
● Fields / Properties / Attributes adalah data yang bisa kita sisipkan di dalam Object
● Namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa aja yang
dimiliki object tersebut di dalam deklarasi class-nya
● Membuat field sama seperti membuat variable, namun ditempatkan di block class, namun diawali
dengan kata kunci VAR*/
echo "==Membuat Properties== \n";

class PropertyClass{
    var $name;
    var $address;
    var $country;
}
$objectPropertyClass = new PropertyClass();
var_dump($objectPropertyClass);
echo "\n";
/*Manipulasi Properties
● Fields yang ada di object, bisa kita manipulasi.
● Untuk memanipulasi data field, sama seperti cara pada variable
● Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fields nya*/
echo "==Manipulasi Properties== \n";

class ManipulasiProperty{
    var $name;
    var $address;
    var $country;
}
$manipulasiProperty = new ManipulasiProperty();
$manipulasiProperty->name = "Suroyyah";
$manipulasiProperty->address = "Jln. kampung";
$manipulasiProperty->country = "Indonesia";

var_dump($manipulasiProperty);
echo "Name : {$manipulasiProperty->name}".PHP_EOL;
echo "Address : {$manipulasiProperty->address}".PHP_EOL;
echo "Country : {$manipulasiProperty->country}".PHP_EOL;
echo "\n";

/*Properties Type Declaration
● Sama seperti di function, di properties pun, kita bisa membuat type declaration
● Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah
ditentukan
● Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
● Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data
lain
● Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties*/
echo "==Properties Type Declaration== \n";

class PropertyDeclarationType
{
    var string $name;
    var int $age;
    var string $address;
    var string $country;
}
$propertyDeclarationType = new PropertyDeclarationType();
// $propertyDeclarationType->name = []; error
echo " \n";

/*Default Properties Value
● Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
● Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value
tersebut*/
echo "==Default Properties Value== \n";
class DeafultValue
{
    var string $name = "Summayah";
    var int $age;
    var string $address;
    var string $country;
}
$deafultValue = new DeafultValue();
echo $deafultValue->name ;
echo " \n";

/*Nullable Properties
● Saat kita menambah type declaration di properties atau di function argument, maka secara
otomatis kita tidak bisa mengirim data null ke dalam properties atau function argument tersebut
● Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function
arguments
● Caranya sebelum type declaration nya, kita bisa tambahkan tanda ?*/
echo "==Nullable Properties== \n";
class NullableProperty
{
    var string $name = "Summayah";
    var int $age;
    var string $address;
    var ?string $country;
}
$nullableProperty = new NullableProperty();
echo $nullableProperty->name .PHP_EOL;
// echo $nullableProperty->address ;Error: Typed property NullableProperty::$address must not be accessed before initialization in
$nullableProperty->country = null;
var_dump($nullableProperty->country) ; //tambahkan ? agar bisa di isi null

echo " \n";

/*Function
● Selain menambahkan properties, kita juga bisa menambahkan function ke object
● Cara dengan mendeklarasikan function tersebut di dalam block class
● Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
● Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama
method nya. Sama seperti mengakses properties*/
echo "==Function== \n";
class FunctionClass
{
    var string $name = "Summayah";
    var int $age;
    var string $address;
    var ?string $country;

    function displayName(string $name){
        echo "Menampilkan $name";
    }
}
$functionClass = new FunctionClass();
echo $functionClass->displayName("Surti");

echo " \n";
