<?php
/*Covariance
● Saat kita meng override function dari parent class, biasanya di child class kita akan membuat
function yang sama dengan function yang di parent
● Covariance memungkinkan kita meng override return function yang di parent dengan return value
yang lebih spesifik*/

echo "==Covariance==\n";
abstract class AnimalCovariance
{
    public string $name;

    abstract public function run(): void;
    abstract public function eat(AnimalFood $animalFood): void;
    public function modol(): void
    {
        echo "$this->name sedang modol" . PHP_EOL;
    }
}
class CatCov extends AnimalCovariance
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
    //contravariance parameter yg seharusnya AnimalFood di ganti dgn parentnya Food
    public function eat(Food $animalFood): void
    {
        echo "Dog $this->name  is eating" . PHP_EOL;
    }
}
class DogCov extends AnimalCovariance
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
    //contravariance
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat $this->name  is eating" . PHP_EOL;
    }
}

interface AnimalShelterCovariance
{
    //mereturn class AnimalCovariance
    public function adopt(string $name): AnimalCovariance;
}

class DogShelterCov implements AnimalShelterCovariance
{
    //dengan covariance, yg seharusnya mengembalikan AnimalCovariance. 
    //bisa di ganti dgn kelas turunannya DogCov dan CatCov
    public function adopt(string $name): DogCov
    {
        $dog = new DogCov;
        $dog->name = $name;
        return $dog;
    }
}

class CatShelterCov implements AnimalShelterCovariance
{
    //dengan covariance, yg seharusnya mengembalikan AnimalCovariance. 
    //bisa di ganti dgn kelas turunannya DogCov dan CatCov
    public function adopt(string $name): CatCov
    {
        $cat = new CatCov;
        $cat->name = $name;
        return $cat;
    }
}

$catShelter = new CatShelterCov();
$cat = $catShelter->adopt("Luna");
$cat->run();

$dogShelter = new DogShelterCov();
$dog = $dogShelter->adopt("Doggy");
$dog->run();
$dog->modol();

/*Contravariance
● Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function
argument yang lebih tidak spesifik dibandingkan parent nya*/

echo "\n";
echo "==Contravariance==\n";
class Food
{
}
class AnimalFood extends Food
{
}
$cat->eat(new Food());
$dog->eat(new AnimalFood());
