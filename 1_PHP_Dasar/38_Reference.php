<?php
/*Apa itu Reference?
● Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
● Reference di PHP tidak sama dengan reference di bahasa pemrograman seperti C / C++ yang
memiliki fitur pointer
● Analogi Reference itu seperti file, jika variable adalah file, dan value nya adalah isi file nya, maka
reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap file yang
sama
● Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun
berubah
● Untuk membuat reference terhadap variable, kita bisa menggunakan karakter &*/
/*Assign By Reference
● Pertama, PHP Reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke
value yang sama*/
echo "=Assign By Reference=\n";
$name = "Summayah";
$otherName = &$name; //output "Budi"
// $otherName = $name; //output "Summayah" tanpa reference
$otherName = "budi";
echo $name . PHP_EOL;
echo "\n";

/*Pass By Reference
● Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference*/
echo "=Pass By Reference=\n";

function passIncrement(int &$value){
    $value++;
}
 $counter = 1;
 passIncrement($counter);
 echo $counter.PHP_EOL;
 passIncrement($counter);
 echo $counter.PHP_EOL;
 passIncrement($counter);
 echo $counter.PHP_EOL;
echo "\n";

/*Returning References
● PHP juga bisa mengembalikan reference pada function
● Namun hati-hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan*/

function &getValue(){
    static $value = 100;
    return $value;
}
$a = &getValue();
$a = 200;

$b = &getValue();

echo $b.PHP_EOL;
phpinfo();