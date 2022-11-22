<?php
/*Interface
● Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class
child nya.
● Namun sebenarnya yang lebih tepat untuk kontrak adalah Interface
● Jangan salah sangka bahwa Interface disini bukanlah User Interface
● Interface mirip seperti abstract class, yang membedakan adalah di Interface, semua method
otomatis abstract, tidak memiliki block
● Di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
● Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
● Dan berbeda dengan class, kita bisa implements lebih dari satu interface*/
echo "==Interface==\n";

interface Car
{
    public function drive():void;
    public function getTire():int;
}

class Avanza implements Car
{
    public string $name;

	public function drive(): void 
    {
        echo "Mobil $this->name is running" . PHP_EOL;
	}

	public function getTire(): int 
    {
        return 2;
	}
}

$avanza = new Avanza();
$avanza->name = "Avanza";
$avanza->drive();
echo $avanza->getTire() . PHP_EOL;