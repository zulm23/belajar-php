<?php
/*Anonymous Class
● Anonymous class atau class tanpa nama.
● Adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung
● Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi
interface atau abstract class sederhana, tanpa harus membuat implementasi class nya*/


echo "==Anonymous Class==\n";
interface AnoHelloWord
{
    function anoSayHallo(): void;
}

// tanpa mamasukan nama class
$anoHello = new class implements AnoHelloWord
{
    function anoSayHallo(): void
    {
        echo "Hello Anonymous Class" . PHP_EOL;
    }
};
$anoHello->anoSayHallo();

/*Constructor di Anonymous Class
● Anonymous class juga mendukung constructor
● Jadi kita bisa menambahkan constructor jika kita mau*/

//langsung menambahkan argument utk contructornya
$anoConstruct = new class("Anonymous Class Contructor") implements AnoHelloWord
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    function anoSayHallo(): void
    {
        echo "Hello $this->name" .PHP_EOL;
    }
};

$anoConstruct->anoSayHallo();
