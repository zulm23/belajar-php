<?php
namespace Alias\Satu {
    class PersonAlias
{
    var string $name;

    public function info(string $name): void
    {
        echo "Hai $name my name is $this->name" . PHP_EOL;
    }
}

}
namespace Alias\Dua{
    class PersonAlias
    {
         var string $name;

        public function info(string $name): void
        {
            echo "Hai $name my name is $this->name" . PHP_EOL;
        }
    }

}
namespace Alias\Helper{
    const TITLE = "Belajar Alias PHP";

    function helpFunction():void{
        echo "Help me menggunakan alias\n";
    }
}