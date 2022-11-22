<?php 
/*Regular Expression
● PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl
● Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string
menggunakan pola tertentu
● Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit
pengenalannya
● Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini :
https://www.php.net/manual/en/pcre.pattern.php

Function Regular Expression
https://www.php.net/manual/en/ref.pcre.php

Function Regular Expression             Keterangan
preg_match ($pattern ,$subject)         Digunakan untuk mencari match pattern
preg_match_all ($pattern ,$subject)

preg_replace ( $pattern , $replacement, Digunakan untuk mereplace semua pattern
$subject)                               dengan replacement

preg_split ( $pattern , $subject)       Digunakan untuk memotong dengan
                                        pattern menjadi array
*/
echo "preg_match_all (\$pattern ,\$subject) \n";
$string = "Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini";
$matches = [];
$result = preg_match_all("/untuk|di|bisa/i",$string, $matches);

var_dump($result);
var_dump($matches);

echo "\n";
echo "preg_replace ( \$pattern , \$replacement, \$subject)\n";

$string = "dasar loe anjing dan bangsat";
$result = preg_replace("/anjing|bangsat/i", "xxx", $string);
var_dump($result);

echo "\n";
echo "preg_split ( \$pattern , \$subject) \n";
$string = "Belajar pemograman-PHP, yang baik";
$result = preg_split("/[\s,-]/",  $string);
var_dump($result);
