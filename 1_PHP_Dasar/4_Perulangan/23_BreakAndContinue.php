<?php
/*Break & Continue
● Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case
dalam switch
● Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
● Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini,
lalu melanjutkan ke perulangan selanjutnya*/
echo "==Break==\n";
$counter = 1;
while (true) {
    echo "Hello Break : ".$counter.PHP_EOL;
    $counter++;
    if ($counter == 5) {
        break;
    }
}

echo "==Continue==\n";
$counter = 1;
while ($counter < 10) {
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;
    if ($counter == 5) {
        echo "nomor 5 di lewat";
        continue;
    }
}
