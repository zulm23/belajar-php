<?php
/*Encapsulation
● Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
● Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
● Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier
private, sehingga tidak bisa diakses atau diubah dari luar
● Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties
tersebut

Getter dan Setter
● Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter
dan Setter method.
● Getter adalah function yang dibuat untuk mengambil data field
● Setter ada function untuk mengubah data field

Getter dan Setter Method
Tipe Data   Getter          Method Setter Method
boolean     isXxx():        bool setXxx(bool value)
lainnya     getXxx():       tipeData setXxx(tipeData value)
 */
echo "==Getter dan Setter==\n";
class Category
{
   private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    { //validasi nnilai property
        if (trim($name) != "") {
            $this->name = trim($name);
        }
    }
    public function isExpensive(): bool
    {
        return $this->expensive;
    }
    public function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
}

$category = new Category();
$category->setName("        Sepatu ");
$category->setName(" ");
$category->setExpensive(true);

echo $category->getName() . PHP_EOL;
echo $category->isExpensive() . PHP_EOL;
