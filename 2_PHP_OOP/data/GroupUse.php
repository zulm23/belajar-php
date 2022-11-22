<?php
namespace GroupUse\Data {
    class Conflict{
        public string $name;
    }
    class Dummy{

    }
    class Sample{

    }
}



namespace GroupUse\HelpGroupUse{
    const BOOK = "Belajar Alias PHP";
    const AUTHOR = "Suroyyah";

    function functionGroupUse():void{
        echo "Help me menggunakan alias\n";
    }
}