<?php
/*static Keyword
● Kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties atau function
di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu
● Namun ingat, saat kita buat static properties atau function, secara otomatis hal itu tidak akan
berhubungan lagi dengan class instance yang kita buat
● Untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa
menggunakan operator ::
● static function tidak bisa mengakses function biasa, karena function biasa menempel pada class
instance sedangkan static function tidak*/
echo "==static Keyword==\n";

class MathHelper 
{
    static public string $name ="MathHleper";
    static public function mathHelperFunction(string $name){
        echo "Belajar Static :". $name . "Parent ". self::$name . PHP_EOL ;
    }
    static public function sum( int ...$numbers):int{
        $total = 0;
        foreach ($numbers as $num ) {
            $total += $num;
        }
        return $total;
    }
}


//akses static propertynya
echo MathHelper::$name.PHP_EOL;
MathHelper::$name = "di ubah";
echo MathHelper::$name.PHP_EOL;
MathHelper::mathHelperFunction("Function");

$result = MathHelper::sum(10,10,10,10,10);
echo "Result :". $result;