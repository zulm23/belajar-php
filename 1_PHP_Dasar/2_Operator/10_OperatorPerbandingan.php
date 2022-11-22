<?php
/*Operator Perbandingan
● Operator perbandingan, seperti namanya, digunakan untuk membandingan dua buah value
● Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika
perbandingannya salah*/

/*Operator Perbandingan (1)
Operator        Nama                    Keterangan
$a == $b        Sama dengan             true jika $a sama dengan $b setelah dilakukan
konversi tipe data
$a === $b       Identik                 true jika $a sama dengan $b dan memiliki tipe data yang sama
$a != $b        Tidak sama dengan       true jika $a tidak sama dengan $b setelah
dilakukan konversi tipe data
$a <> $b        Tidak sama dengan       true jika $a tidak sama dengan $b setelah
dilakukan konversi tipe data*/

/*Operator Perbandingan (2)
Operator        Nama                    Keterangan
$a !== $b       Tidak identik           true jika $a tidak sama dengan $b atau tidak sama
tipe data
$a < $b         Kurang dari             true jika $a kurang dari $b
$a <= $b        Kurang dari atau        true jika $a kurang dari atau sama dengan $b
                sama dengan
$a > $b         Lebih dari              true jika $a lebih dari $b
$a >= $b        Lebih dari sama dengan  true jika $a lebih dari atau sama dengan $b*/

var_dump("10" == 10);
var_dump("10" === 10);
var_dump("10" > 10);
var_dump("10" >= 10);
