<?php 
/*Table
● Data biasanya disimpan di dalam tabel di MySQL
● Tiap tabel biasanya menyimpan satu jenis data, misal ketika kita membuat aplikasi toko online, kita
akan membuat tabel barang, tabel pelanggan, tabel penjual, dan lain-lain
● Sebelum kita bisa memasukkan data ke tabel, kita wajib terlebih dahulu membuat tabelnya terlebih
dahulu
● Dan tiap tabel yang kita buat, wajib ditentukan kolom-kolom nya, dan tipe data tiap kolom nya
● Kita juga bisa mengubah tabel yang sudah terlanjur dibuat, seperti menambah kolom baru,
mengubah kolom yang sudah ada, atau menghapus kolom

Storage Engines
● MySQL memiliki berbagai cara melakukan pengolahan data, hal ini disebut Storage Engines.
● Saat ini, yang biasa dan populer digunakan adalah InnoDB
● Untuk melihat storage engines apa saja yang terdapat di MySQL, kita bisa menggunakan perintah :
SHOW ENGINES;

Melihat Table
SHOW TABLES;
*/


/*Membuat Table
CREATE TABLE product (
	kode INT,
	nama VARCHAR(200),
	harga INT,
	jumlah INT 
);

Melihat Struktur Table
DESCRIBE nama_tabel;
DESC nama_tabel;
SHOW CREATE TABLE nama_tabel;


