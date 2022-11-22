<?php
/*Expression
● Expression adalah bagian terpenting di PHP
● Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
● Secara sederhana, expression adalah apapun yang memiliki nilai atau value*/

/*Contoh Expression Sederhana
● $a = 5; Ketika kita menuliskan “5”, maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression.
● Lalu kita menulis kode $b = $a; $a bisa kita bilang adalah expression, karena $a adalah nilai 5*/
$a = 5;
$b = $a;

/*Contoh Expression Complex
Pada kode dibawah, getValue() adalah expression, karena getValue() bernilai angka 100. Tentang function
nanti kita akan bahas lebih detail di materi tersendiri*/
function getValue(){
    return 100;
}
$value = getValue();

/*Statement
● Statement bisa dibilang adalah kalimat lengkap dalam bahasa.
● Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma*/

/*Block
● Block adalah kumpulan statement yang terdiri dari nol atau lebih statement.
● Block diawali dan diakhiri dengan kurung kurawal { }*/