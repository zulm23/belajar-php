<?php
/*Parent Keyword
● Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita
override di class child
● Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
● Sederhananya, parent digunakan untuk mengakses class parent*/

echo "==Parent Keyword==\n";

class ParentKeywordClass{
    public function getCorner():int{
        return 10;
    }
}

class ChildParentKeywordClass extends ParentKeywordClass
{
    public function getCorner(): int //mengoverride class yang parent
    {
        return 40;
    }
    //untuk mengakses kelas parent yg di overide gunakan kata kunci Parent
    public function getParentCorner():int{
        return parent::getCorner();
    }
}

$childParent = new ChildParentKeywordClass();
echo $childParent->getCorner().PHP_EOL;
echo $childParent->getParentCorner().PHP_EOL;