<?php
/*String Function
● Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi
data string.
● Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
● https://www.php.net/manual/en/ref.strings.php

Contoh String Function
Function                Keterangan
join() / implode()      Menggabungkan array menjadi string
explode()               Memecah string menjadi array
strtolower()            Mengubah string menjadi lowercase
strtoupper()            Mengubah string menjadi uppercase
substr()                Mengambil sebagian string
trim()                  Menghapus whitespace di depan dan belakang string*/

echo "String Function\n";
var_dump(join(" + ", [12,32,56]));
var_dump(explode(" ", "Nama ku bento"));

var_dump(strtoupper( "Nama ku bento"));
var_dump(strtolower( "Nama ku bento"));
var_dump(substr("Nama ku bento", 5 , 2));
var_dump(trim("           Nama ku bento          "));
var_dump(strlen("Nama ku bento"));
var_dump(strpos("Nama ku bento","ku"));