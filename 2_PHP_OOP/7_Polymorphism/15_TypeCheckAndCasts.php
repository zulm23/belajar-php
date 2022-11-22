<?php
/*Type Check & Casts
● Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class
● Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit
● Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check (pengecekan
tipe data), dengan menggunakan kata kunci instanceof
● Hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai*/
require_once ("14_Polimorphism.php");

function sayPolimorphism(Programer $programer)
{
    if ($programer instanceof BackEnd) {
        echo "Hello BackEnd Programer $programer->name" . PHP_EOL;
    } else if ($programer instanceof FrontEnd) {
        echo "Hello FrontEnd Programer $programer->name" . PHP_EOL;
    } else if ($programer instanceof Programer) {
        echo "Hello  Programer $programer->name" . PHP_EOL;
    }
}
echo "==Type Check & Casts==\n";

sayPolimorphism(new Programer("full Stack Programer"));
sayPolimorphism(new FrontEnd("full Stack FrontEnd"));
sayPolimorphism(new BackEnd("full Stack BackEnd"));