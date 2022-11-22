<?php
/*While Loop
● While loop adalah versi perulangan yang lebih sederhana dibanding for loop
● Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement*/
echo "==While Loop==\n";

$counter = 100;
while ($counter <= 10) {
    echo "Hello While loop :".$counter.PHP_EOL;
    $counter++;
}