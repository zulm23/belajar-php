<?php
// namespace Data\ClassPertama; untuk seluruh file

namespace Data\ClassPertama{
    Class Person{
        var string $name;

        function info(string $name):void{
            echo "Hai $name my name is $this->name". PHP_EOL;
        }
    }
}
namespace Data\ClassKedua{
    Class Person{
        var string $name;

        function info(string $name):void{
            echo "Hai $name my name is $this->name". PHP_EOL;
        }
    }
}

