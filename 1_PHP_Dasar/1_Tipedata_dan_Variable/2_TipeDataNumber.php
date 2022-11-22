/*
Di PHP terdapat 2 jenis tipe data number
- (int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2) dan
- (float) Bilangan pecahan
Di PHP kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, saat dijalankan, _ (garis bawah) tersebut akan di ignore
Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka
 */

<?php
echo "Decimal = ";
var_dump(1234);

echo "Oktal = ";
var_dump(01234);

echo "Hexadecimal = ";
var_dump(0x1A);

echo "Binary = ";
var_dump(0b111111);

echo "Underscore in number = ";
var_dump(1_214_214_123);

//output 
/*
Decimal = int(1234)
Oktal = int(668)
Hexadecimal = int(26)
Binary = int(63)
Underscore in number = int(1214091)
*/

echo "==============================".PHP_EOL;
echo "Floting Point = ";
var_dump(1.234);

echo "Floting Point dengan E notation plus (1.2 x 1000) = ";
var_dump(1.2e3);

echo "Floting Point dengan E notation minus (7 x 0.0001) = ";
var_dump(7e-3);

echo "Underscore Floting Point = ";
var_dump(1_123.234);

//output
/*
Floting Point = float(1.234)
Floting Point dengan E notation plus (1.2 x 1000) = float(1200)
Floting Point dengan E notation minus (7 x 0.0001) = float(0.007)
Underscore Floting Point = float(1123.234)
*/

