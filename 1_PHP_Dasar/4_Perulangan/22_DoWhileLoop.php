<?php
/*Do While Loop
● Do While loop adalah perulangan yang mirip dengan while
● Perbedaannya hanya pada pengecekan kondisi
● Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
● Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi
tidak bernilai true*/
echo "==Do While Loop==\n";
$conter = 100;
do {
    echo "Hello Do While Loop :".$conter.PHP_EOL;
    $conter++;
} while ($conter <= 10);