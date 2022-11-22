<?php
/*
Tipe Data String
● Tipe data string adalah tipe data representasi dari teks
● String bisa mengandung kosong atau banyak karakter
*/
/*
Single Quote
Untuk membuat String di PHP, kita bisa menggunakan single quote
*/
echo "==Single Quote==\n";
echo 'Nama = ';
echo "\n";
echo 'Sumayyah Hardi';
/*
Double Quote
Selain single quote, kita juga bisa menggunakan double quote. Salah satu kelebihan menggunakan double
quote adalah, kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk
TAB, \” untuk double quote, dan lain-lain
*/
echo "\n==Double Quote==\n";

echo "Nama = ";
echo "Sumayyah\t Hardi\t Kusuma\n";
/*
Multiline String
● Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya
kita bisa menggunakan \n sebagai ENTER
● Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc
Heredoc
Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan
enter, tab dan yang lain-lain secara manual
*/
echo "==Multiline String Heredoc==\n";

echo <<<NAMATAG
Ini adalah adalah contoh String yang sangat panjang,
dan juga tidak perlu ngetik ENTER secara
manual, bisa "double quote" juga\n
NAMATAG;
/*
Nowdoc
Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan
parsing seperti di Heredoc atau Double Quote. Masalah parsing akan kita bahas di materi Manipulasi
String
*/
echo "==Multiline String Heredoc==\n";
//tambahkan single quote
echo <<<'NAMATAG'
Ini adalah adalah contoh String yang sangat panjang,
dan juga tidak perlu ngetik ENTER secara
manual, bisa "double quote" juga\n

NAMATAG;