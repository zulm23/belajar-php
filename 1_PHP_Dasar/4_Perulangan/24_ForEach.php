<?php
/*For Each
● Kadang kita biasa mengakses data array menggunakan perulangan
● Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter,
lalu mengakses array menggunakan counter yang kita buat
● Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses
seluruh data di Array secara otomatis*/
echo "==For Each==\n";
$names = ["Eko", "Kurniawan", "Khannedy"];
foreach ($names as $name => $value) {
    echo "No Index : " . $name . " value :" . $value . PHP_EOL;
}
echo "==For Each tanpa value==\n";
$names = ["Eko", "Kurniawan", "Khannedy"];
foreach ($names as $name) {
    echo "No Index : " . $name . PHP_EOL;
}

echo "==For Each bentuk MAP array==\n";
$person = [
    "first_name" => "Eko", 
    "last_name" => "Kurniawan", 
    "third_name" => "Khannedy"
];
foreach ($person as $key => $value) {
    echo "Key : " . $key . " value :" . $value . PHP_EOL;
}
