<?php
/*Generator
● Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
● Namun pembuatan Iterator secara manual sangatlah ribet
● Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara otomatis hanya dengan menggunakan kata kunci yield*/

echo "==Generator==\n";

echo "==Menggunakan array Iterator==\n";

function getGenap(int $max): Iterator
{
    $dataArray = [];
    for ($i = 1; $i < $max; $i++) {
        if ($i % 2 == 0) {
            //masukan ke array
            $dataArray[] = $i;
        }
    }
    // Menggunakan array Iterator harus di tampung dahulu ke array
    return new ArrayIterator($dataArray);
}


foreach (getGenap(50) as $value) {
    echo "Genap : " . $value . PHP_EOL;
}
echo "==Menggunakan Generator==\n";

function getGanjil(int $max): Iterator
{

    for ($i = 1; $i < $max; $i++) {
        if ($i % 2 == 1) {
            //Menggunakan Generator menggunakan yield langsung me return class Iterator
            yield $i;
        }
    }
}

foreach (getGanjil(50) as  $value) {
    echo "Ganjil : " . $value . PHP_EOL;
}

echo "==Update Object Iterator==\n";
class IteratorDataAgregate implements IteratorAggregate
{
    var string $first = "First public";
    public string $second = "Second public";
    private string $third = "Third private";
    protected string $forth = "Forth protected";

    public function getIterator(): Traversable
    {
        yield  "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fotrh" => $this->forth;
    }
}

$iteratorDataAgregate = new IteratorDataAgregate();
foreach ($iteratorDataAgregate as $key => $value) { //semua property di tampilkan termasuk yg visibility private dan protected
    echo "Nama Proerty :" . $key . ", Nilai Property : " . $value . PHP_EOL;
}
