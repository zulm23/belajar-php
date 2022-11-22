<?php
/*Interface Inheritance
● Sebelumnya kita sudah tahu kalo di PHP, child class hanya bisa punya 1 class parent
● Namun berbeda dengan interface, sebuah child class bisa implement lebih dari 1 interface
● Bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Namun jika interface ingin
mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements*/
echo "==Interface Inheritance==\n";
interface HasBrand{
    public function getBrand():string;

}

interface IsMaintance{
    public function isMaintenace():bool;
}

interface Cars extends HasBrand, IsMaintance{
    public function drive():void;
    public function getTire():int;
}

class Truck implements Cars{
    
	public function drive(): void {
        echo "Mobil truck lagi jalan". PHP_EOL;
	}
	
	public function getTire(): int {
        return 100;
	}
	
	public function getBrand(): string {
        return "Toyota";
	}
	
	public function isMaintenace(): bool {
        return false;
	}
}

$truck = new Truck();
$truck->drive();
echo "Merk : ". $truck->getBrand().PHP_EOL;
echo "Kecepatan : ". $truck->getTire().PHP_EOL;
