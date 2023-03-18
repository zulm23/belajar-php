<?php 
/*Pengenalan Database Management System
● DBMS adalah aplikasi yang digunakan untuk me-manage data
● Tanpa menggunakan DBMS, untuk me-manage data, seperti data produk, data customer, data
penjualan, kita harus simpan dalam bentuk file (misal seperti ketika menggunakan Excel)
● DBMS biasanya berjalan sebagai aplikasi server yang digunakan untuk me-manage data, kita hanya
tinggal memberi perintah ke DBMS untuk melakukan proses manajemen datanya, seperti
menambah, mengubah, menghapus atau mengambil data
● Contoh DBMS yang populer seperti MySQL, PostgreSQL, MongoDB, Oracle, dan lain-lain

Pengenalan Relational Database
● Ada banyak sekali jenis-jenis DBMS, seperti Relational Database, Document Database, Key-Value
Database, dan lain-lain
● Namun yang masih populer dan kebanyakan orang gunakan adalah relational database
● Relational database cukup mudah dimengerti dan dipelajari karena kita sudah terbiasa menyimpan
data dalam bentuk tabular (tabel) seperti di Microsoft Excel atau di Google Doc Spreadsheet
● Selain itu relational database memiliki perintah standard menggunakan SQL, sehingga kita mudah
ketika ingin berganti-ganti aplikasi database (seperti MySQL, Oracle, PostgreSQL dan lain-lain)

Database Client
● Database client adalah aplikasi yang digunakan untuk berkomunikasi dengan DBMS
● Biasanya DBMS sudah menyediakan database client sederhana yang bisa kita gunakan untuk
berkomunikasi dengan DBMS agar lebih mudah
● Atau kita bisa membuat aplikasi untuk berkomunikasi dengan DBMS, misal membuat aplikasi
database client menggunakan Java, PHP atau bahasa pemrograman lainnya

Database File
● Mayoritas DBMS menyimpan datanya di file, walaupun ada beberapa database yang hanya
menyimpan datanya di memory (RAM)
● Namun jangan berpikir file database yang disimpan berupa file seperti Excel atau CSV (Comma
Separated Value), tapi jauh lebih kompleks
● Database File akan di optimasi oleh DBMS agar mempermudah DBMS dalam manajemen datanya,
seperti insert, update, delete dan select
● Tiap DBMS biasanya memiliki cara masing-masing mengelola Database File nya, dan kita tidak
perlu harus tau, karena yang kita perlu tahu hanya cara berkomunikasi ke DBMS

SQL
● Structured Query Language
● Merupakan bahasa yang digunakan untuk mengirim perintah ke DBMS
● SQL adalah bahasa yang mudah karena hanya berisi instruksi untuk menyimpan, mengubah,
menghapus atau mengambil data melalui DBMS
● Secara garis besar, semua perintah SQL di Relational Database itu hampir sama, namun biasanya
tiap DBMS ada improvement yang membedakan hal-hal kecil dalam perintah SQL, namun secara
garis besar perintahnya tetap sama

MySQL
● MySQL adalah DBMS Relational OpenSource yang paling populer di dunia saat ini
● Tidak hanya OpenSource, MySQL juga gratis untuk digunakan
● MySQL pertama kali dibuat dan diperkenalkan tahun 1995 oleh David Axmark dan Michael
Widenius
● MySQL sangat populer sekali terutama dikalangan programmer web PHP
● https://www.mysql.com/

MySQL Community vs MySQL Enterprise
● Saat kita membuka halaman website resmi MySQL, jangan sampai salah download aplikasi MySQL
● MySQL menawarkan pilihan versi MySQL Enterprise, yaitu DBMS MySQL Yang berbayar
● MySQL yang versi gratis adalah MySQL Community
● MySQL Enterprise sendiri lebih ke versi improvement dari MySQL Community, biasanya
menambahkan support dan monitoring
● Jika menggunakan MySQL Community, maka kita harus tangani semuanya sendiri, dari masalah
dan monitoring MySQL nya

MySQL vs MariaDB
● Tahun 2008 MySQL di akuisisi oleh perusahaan Sun Microsystem
● Namun Tahun 2009, Sun Microsystem diakuisisi oleh perusahaan Oracle (Pemilik DBMS Oracle)
● Hal ini menyebabkan 2 founder MySQL keluar dari MySQL dan membuat project baru bernama
MariaDB
● MariaDB Sebenarnya fork dari MySQL, jadi apa yang bisa dilakukan di MySQL bisa dilakukan di
MariaDB
● Sehingga sekarang jangan terlalu bingung jika ada MySQL dan MariaDB, karena sebenarnya itu
dari source code yang sama, mungkin ada perbedaan kecil, namun secara garis besar sebenarnya
tetap sama
● https://mariadb.org/

Menginstall MySQL
● Menginstall MySQL banyak caranya, bisa download langsung dari halaman website resminya
● Atau bisa menggunakan aplikasi yang mem-bundle MySQL seperti XAMPP yang biasa digunakan
oleh programmer PHP
● Jika sudah menginstall MySQL / MariaDB menggunakan XAMPP, tidak perlu menginstall lagi
MySQL, karena jika bentrok, maka salah satu aplikasi MySQL nya tidak akan bisa jalan