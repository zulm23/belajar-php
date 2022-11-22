<?php
/*For Loop
● For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
● Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi*/

/*Sintak Perulangan For
for(init statement; kondisi; post statement){
// block perulangan
}
● Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
● Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan,
jika false perulangan akan berhenti
● Post statement akan dieksekusi setiap kali diakhir perulangan
● Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi
selalu bernilai true*/
echo "==For Loop==\n";

for ($counter=0; $counter < 10; $counter++) { 
    echo "Hello For Loop".$counter.PHP_EOL;
}