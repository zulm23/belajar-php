<?php
/*DateTime
● Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu,
termasuk di PHP
● Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
● Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data
waktu

DateTime Function
DateTime Function                   Keterangan
setTime($hour, $minute, $second)    Mengubah waktu DateTime
setDate($year, $month, $day)        Mengubah tanggal DateTime
setTimestamp($unixTimestamp)        Mengubah unix timestamp DateTime
*/
echo "==DateTime==\n";
$date = new DateTime();
$date->setDate(2000, 05, 15);
$date->setTime(02, 30, 45);
var_dump(new DateTime());
var_dump($date);

/*DateInterval
● Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1
tahun, atau mengurai beberapa hari
● Hal ini bisa dilakukan dengan function add milik DateTime
● Namun function add tersebut menerima parameter berupa DateInterval
● Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah
interval
● Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php
● Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period*/
echo "\n";
echo "==DateInterval==\n";
$dateInterval = new DateTime('now', new DateTimeZone("asia/jakarta"));
//menambah 1 tahun
$dateInterval->add(new DateInterval("P1Y"));
var_dump($dateInterval);
//mengurangi 2 bulan
$minus2bulan = new DateInterval("P2M");
$minus2bulan->invert = true;
$dateInterval->add($minus2bulan);
var_dump($dateInterval);

/*DateTimeZone
● Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai
dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
● Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime*/
echo "\n";
echo "==DateTimeZone==\n";
$timeZone = new DateTime();
$timeZone->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($timeZone);

/*Format DateTime
● Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
● Hal ini bisa kita lakukan menggunakan function format()
● Function format() menerima argument berupa format string, ini bisa kita gunakan untuk
memanipulasi cara kita menampilkan string format waktu
● Untuk detailnya kita bisa lihat di halaman dokumentasi resminya
● https://www.php.net/manual/en/datetime.format.php*/
echo "\n";
echo "==Format DateTime==\n";
$formatDateTime = new DateTime();
echo "waktu saat ini :". $formatDateTime->format("Y-m-d H:i:s");

/*Parse DateTime
● Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu
memparsing string menjadi DateTime sesuai dengan format yang kita mau
● Untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class
DateTime*/
echo "\n";
echo "==Parse DateTime==\n";
$dateParse = DateTime::createFromFormat("Y-m-d", "1992-05-15"); 
//output false jika data masukan salah
var_dump($dateParse);