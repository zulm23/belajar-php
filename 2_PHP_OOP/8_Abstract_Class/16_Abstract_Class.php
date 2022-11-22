<?php
/*Abstract Class
● Saat kita membuat class, kita bisa menjadikan sebuah class sebagai abstract class.
● Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
● Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract
sebelum kata kunci class
● Sehingga Abstract Class bisa kita gunakan sebagai kontrak child class*/
echo "==Abstract Class==\n";
abstract class Location{ // hanya bisa di turunakan ke child nya, tidak bisa di buat aobject
    public string $name;
}

class City extends Location{

}
// $location = new Location(); Fatal error: Cannot instantiate abstract class Location
$city = new City();
$city->name = "Nama Kota";
echo $city->name. PHP_EOL;