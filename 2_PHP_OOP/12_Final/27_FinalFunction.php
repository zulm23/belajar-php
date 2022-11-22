<?php
/*Final Function
● Kata kunci final juga bisa digunakan di function
● Jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di override lagi di class child nya
● Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class child nya*/
echo "==Final Function==\n";

class FinalFunctionSosialMedia
{
    public string $name;
}

 class FinalFunctionFacebook extends FinalFunctionSosialMedia
{
    final public function login(string $name, string $password):void{
        echo "Login";
    }
}


class FinalFunctionChildFacebook extends FinalFunctionFacebook
{
    // function login(string $name, string $password): void {
    //     echo "success";
    // }
    //Method 'FinalFunctionChildFacebook::login()' cannot override final method 'FinalFunctionFacebook::login()
    // method sudah di set Final
}