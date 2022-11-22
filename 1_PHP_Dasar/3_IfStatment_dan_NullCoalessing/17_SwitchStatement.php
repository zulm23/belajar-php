<?php
/*Switch Statement
● Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya
menggunakan perbandingan ==
● Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara
pembuatannya
● Kondisi di switch statement hanya untuk perbandingan ==*/
echo "==Switch Statement==\n";
$nilai = "E";
switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan amat baik" . PHP_EOL;
        break;
    case 'B';
    case 'C';
        echo "Anda lulus aja" . PHP_EOL;
        break;
    case 'D';
        echo "Anda tidak lulus " . PHP_EOL;
        break;
    default:
        echo "Anda salah jurusan" . PHP_EOL;
        break;
}
/*Syntax Alternatif
● Sama seperti if statement, switch statement juga bisa tanpa menggunakan {} (kurung kurawal)
● Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch*/
echo "==Syntax Alternatif==\n";
$nilai = "C";
switch ($nilai) :
    case 'A':
        echo "Anda lulus dengan amat baik" . PHP_EOL;
        break;
    case 'B';
    case 'C';
        echo "Anda lulus aja" . PHP_EOL;
        break;
    case 'D';
        echo "Anda tidak lulus " . PHP_EOL;
        break;
    default:
        echo "Anda salah jurusan" . PHP_EOL;
        break;
    endswitch;
