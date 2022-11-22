<?php
/*Final Class
● Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum
class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi
● Secara otomatis semua class child nya akan error*/
echo "==Final Class==\n";

class FinalClassSosialMedia
{
    public string $name;
}

final class FinalClassFacebook extends FinalClassSosialMedia
{
}

// error:  Class FinalClassChildFacebook may not inherit from final class (FinalClassFacebook)
//tidak bisa di turunkan lagi krn class FinalClassFacebook di set Final di depan kelasnya
class FinalClassChildFacebook extends FinalClassFacebook
{
}
