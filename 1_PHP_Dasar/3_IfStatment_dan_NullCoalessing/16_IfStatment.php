<?php
/*If Statement
● Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
● Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
● Hampir di semua bahasa pemrograman mendukung if expression*/
echo "==If Statement==\n";
$nilai = 80;
$absen = 90;
if ($nilai>=75 && $absen >=75) {
    echo ("Anda LULUS".PHP_EOL);
}
/*Else Statement
● Blok if akan dieksekusi ketika kondisi if bernilai true
● Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
● Hal ini bisa dilakukan menggunakan else statement*/
echo "==Else Statement==\n";
$nilai = 70;
$absen = 90;
if ($nilai >= 75 && $absen >= 75) {
    echo ("Anda LULUS" . PHP_EOL);
}else{
    echo ("Anda GAGAL" . PHP_EOL);

}
/*Else If Statement
● Kada dalam If, kita butuh membuat beberapa kondisi
● Kasus seperti ini, di PHP kita bisa menggunakan Else If statement
● Else if di PHP bisa lebih dari satu
● Kode Else if di php bisa menggunakan “else if” atau “elseif” (digabung)*/
echo "==Else If Statement==\n";
$nilai = 70;
$absen = 90;
if ($nilai >= 80 && $absen >= 80) {
    echo ("Nilai Anda A" . PHP_EOL);
} else if($nilai >= 70 && $absen >= 70){
    echo ("Nilai Anda B" . PHP_EOL);
} else if($nilai >= 60 && $absen >= 60){
    echo ("Nilai Anda C" . PHP_EOL);
}else {
    echo ("Nilai Anda E" . PHP_EOL);
}

/*Syntax Alternatif
● Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk
menggunakan if, yaitu dengan menggunakan : (titik dua)
● Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement*/
echo "==Syntax Alternatif==\n";
$nilai = 10;
$absen = 90;
if ($nilai >= 80 && $absen >= 80) :
    echo ("Nilai Anda A" . PHP_EOL);
 elseif ($nilai >= 70 && $absen >= 70) :
    echo ("Nilai Anda B" . PHP_EOL);
 elseif ($nilai >= 60 && $absen >= 60) :
    echo ("Nilai Anda C" . PHP_EOL);
 else :
    echo ("Nilai Anda E" . PHP_EOL);
 endif;
