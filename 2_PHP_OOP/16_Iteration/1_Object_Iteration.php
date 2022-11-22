<?php
/*Object Iteration
● Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
● Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
● Secara default, hanya properties yang public yang bisa diakses oleh foreach*/
echo "==Object Iteration==\n";
class IteratorData
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";
}

$iteratorData = new IteratorData();
foreach ($iteratorData as $namaProperty => $value) {
    echo "$namaProperty : $value" . PHP_EOL; // hanya visibily public yang muncul
}

/*Iterator
● Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
● Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
● Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara
manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu
iterator yang menggunakan array sebagai data iterasi nya
● Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface
IteratorAggregate, disana kita hanya butuh meng-override function getIterator() yang
mengembalikan data Iterator*/
echo "==ArrayIterator==\n";

class IteratorDataAgregate implements IteratorAggregate
{
    var string $first = "First public";
    public string $second = "Second public";
    private string $third = "Third private";
    protected string $forth = "Forth protected";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fotrh" => $this->forth
        ];
        return new ArrayIterator($array);
    }
}

$iteratorDataAgregate = new IteratorDataAgregate();
foreach ($iteratorDataAgregate as $key => $value) { //semua property di tampilkan termasuk yg visibility private dan protected
    echo "Nama Proerty :" . $key . ", Nilai Property : " . $value . PHP_EOL;
}
