<?php
/*Destructor
● Jika constructor adalah function yang akan dipanggil ketika object dibuat
● Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
● Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
● Untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
● Khusus untuk destructor, kita tidak boleh menambahkan function argument
● Dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup
proses menulis ke file, sehingga tidak terjadi memory leak*/
echo "==Destructor== \n";
class DestructorClass{
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    //buat contructor
    public function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    // buat Destructor
    function __destruct(){
        echo "Object destructor {$this->name} is Destroyed".PHP_EOL;
    }
}
$destructorClass = new DestructorClass("Sumayyah","jalan panjang");
echo $destructorClass->name. PHP_EOL;
echo $destructorClass->address. PHP_EOL;
var_dump($destructorClass);
echo "object sudah selesai di buat";
echo "\n";
