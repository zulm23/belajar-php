<?php 
/*Magic Function
● Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
● Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
● Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai
constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
● Masih banyak magic function lainnya, kita bisa melihatnya di link berikut :
https://www.php.net/manual/en/language.oop5.magic.php*/

echo "==Magic Function==\n";

/*__toString() Function
● __toString() function merupakan salah satu magic function yang digunakan sebagai representasi
string sebuah object
● Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()*/
echo "=__toString() Function=\n";
class ToStringStudent
{
    public string $id;
    public string $name;
    public int $value;

    //function merubah object ke string
    public function __toString()
    {
        return "Student id : $this->id, name : $this->name, Value : $this->value";
    }

    public function __invoke(string $name):void
    {
        $this->name = $name;
        echo "nama saya : $this->name" .PHP_EOL;
    }

    //otomatis di panggil jika menggunakan vardump
    public function __debugInfo():array
    {
        // echo "Menampulkan di vardump";
        return[
            "id" =>$this->id,
            "name" =>$this->name,
            "value" =>$this->value,
            //menambahkan data lain
            "pembuat" => "Surroyyah",
            "version" => 1.01
        ];
    }
}

$toSTringStudent = new ToStringStudent();
$toSTringStudent->id = "12";
$toSTringStudent->name = "Arie";
$toSTringStudent->value = 100;
$string = (string)$toSTringStudent;
//mengubah object ke string otoamatis memanggil method __toString()
echo $string. PHP_EOL;
// echo $toSTringStudent

/*__invoke() Function
● __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai
function
● Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis
function __invoke() yang akan dieksekusi*/
echo PHP_EOL;
echo "=__invoke() Function=\n";
//menambahkan () pada object otomatis memanggil method __invoke()
$toSTringStudent("Berkah");

/*__debugInfo() Function
● Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
● Function var_dump() sebenarnya memanggil function __debugInfo()
● Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()*/

echo PHP_EOL;
echo "=__debugInfo() Function=\n";
var_dump($toSTringStudent);