<?php
/*Object Cloning
● Kadang kita ada kebutuhan untuk menduplikasi sebuah object
● Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties
di object awal ke object baru
● Untungnya PHP mendukung object cloning
● Kita bisa menggunakan perintah clone untuk membuat duplikasi object
● Secara otomatis semua properties di object awal akan di duplikasi ke object baru*/
echo "==Object Cloning==\n";

class ObjCloning{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample):void{
        $this->sample = $sample;
    }

    // memfilter data property yg ingin di tampilkan
    //$student1 => clone $student2 => $student2__clone()
    public function __clone()
    {
        unset($this->sample);
    }
}

$objCloning = new ObjCloning();
$objCloning->id = "1";
$objCloning->name = "Suroyah";
$objCloning->value = 100;
$objCloning->setSample("XXX");

echo "==Manual==\n";
$objCloning1 = new ObjCloning();
$objCloning1->id = $objCloning->id;
$objCloning1->name = $objCloning->name;
$objCloning1->value= $objCloning->value;
$objCloning1->setSample("XXX");


var_dump($objCloning);
// var_dump($objCloning1);

echo "==Menggunakan Clone==\n";
$objCloning2 = clone $objCloning;
var_dump($objCloning2);

/*__clone() Function
● Kadang menyalin semua properties bukanlah yang kita inginkan
● Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
● Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class nya dengan nama function __clone()
● Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
● Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()*/
echo "==Menggunakan Clone==\n";
//tahapan
//$student1 => clone $student2 => $student2__clone()