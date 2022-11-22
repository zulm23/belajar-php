<?php
/*Exception
● Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error
● Di PHP, error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam
bentuk class exception
● Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh
PHP
● Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface
Throwable atau turunan-turunannya 
*/
echo "\n";
echo "==Exception buat sendiri dari class Exception==\n";
class ExceptionSendiri extends Exception
{
}

/*Membuat Exception
● Exception biasanya terjadi di function
● Di dalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci throw,
diikuti dengan object exception nya*/

class LoginRequest
{
    public string $username;
    public string $password;
}

function validateLogin(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ExceptionSendiri("username is null");
    } else if (!isset($loginRequest->password)) {
        throw new ExceptionSendiri("password is null");
    } else if (trim($loginRequest->username) == "") {
        throw new Exception("username is blank"); //exception bawaan PHP
    } else if (trim($loginRequest->password) == "") {
        throw new Exception("password is blank");
    }
}

$login = new LoginRequest();
$login->username = "";
$login->password = "";

// validateLogin($login); //error


/*Try Catch
● Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan
menggunakan try-catch expression di PHP
● Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap, lalu
terjadi exception, maka secara otomatis program kita akan berhenti
● Cara menggunakan try-catch expression di PHP sangat mudah, di block try, kita tinggal panggil
method yang bisa menyebabkan exception, dan di block catch, kita bisa melakukan sesuatu jika
terjadi exception*/
/*Finally Keyword
● Dalam try-catch, kita bisa menambahkan block finally
● Block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
● Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block
finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, biar tidak menggantung di memory*/

$loginReq = new LoginRequest();
$loginReq->username = " ";
$loginReq->password = " ";
try {
    validateLogin($loginReq);
} catch (ExceptionSendiri | Exception $e) {
    echo "err : " .  $e->getMessage() . PHP_EOL;
    var_dump($e->getTrace()); //Debug Exception
} finally {
    echo "err g err code program tetap di jalankan" . PHP_EOL;
}


/*Debug Exception
● Exception di PHP memiliki sebuah function bernama getTrace()
● Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke
berapa, function mana sampai argumenty yang dikirim di function tersebut apa
● Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception*/