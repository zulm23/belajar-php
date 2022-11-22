<?php
use function CommonMark\Render\Latex;
/*Function Return Value
● Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa
membuat sebuah function mengembalikan nilai
● Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata
kunci return, lalu diikuti dengan data yang ingin dihasilkan
● Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu*/

echo "==Function Return Value 1==\n";

function sum(int $first, int $last)
{
    return $first + $last;
}

$total = sum(10, 20);
var_dump($total);
var_dump(sum(100, 100));

echo "==Function Return Value 2==\n";
function getFinalValue($value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value <= 80 && $value >= 70) {
        return "B";
    } else if ($value <= 70 && $value >= 60) {
        return "C";
    } else{
        return "D";
    }
}

$nilai1 = getFinalValue(69);
echo "Nilai anda adalah : $nilai1". PHP_EOL;
$nilai = getFinalValue(70);
echo "Nilai anda adalah : $nilai". PHP_EOL;

/*Return Type Declarations
● Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
● Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga
digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
● Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan :
diikuti tipe data kembaliannya*/
echo "==Return Type Declarations 1==\n";

function sumDenganTipeDataKembalian(int $first, int $last):int
{
    return $first + $last;
}

$total = sumDenganTipeDataKembalian(10, 20);
var_dump($total);
var_dump(sumDenganTipeDataKembalian(100, 100));

echo "==Return Type Declarations 2==\n";
function getFinalValueDenganTipeDataKembalian($value):string
{
    if ($value >= 80) {
        return "A";
    } else if ($value <= 80 && $value >= 70) {
        return "B";
    } else if ($value <= 70 && $value >= 60) {
        return "C";
    }
    // else if ($value <= 60 && $value >= 50) {
    //     return []; error, karena tidak sama dengan tipe data kembalian
    // } 
    else {
        return "D";
    }
}

$nilai1 = getFinalValueDenganTipeDataKembalian(69);
echo "Nilai anda adalah : $nilai1" . PHP_EOL;
$nilai = getFinalValueDenganTipeDataKembalian(70);
echo "Nilai anda adalah : $nilai" . PHP_EOL;
