-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6557
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sis_yahya
CREATE DATABASE IF NOT EXISTS `sis_yahya` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `sis_yahya`;

-- Dumping structure for table sis_yahya.ayah
CREATE TABLE IF NOT EXISTS `ayah` (
  `id_ayah` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','Diploma','Sarjana','Magister','Doctor') DEFAULT NULL,
  `pekerjaan` varchar(15) DEFAULT NULL,
  `penghasilan` enum('di bawah 5 jt','5 s/d 10 jt','10 s/d 15 jt','15 s/d 20 jt','diatas 20 jt') DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `baca_quran` enum('Lancar Bertajwid dengan Langgam','Lancar Bertajwid','Lancar','Tidak Bisa','Terbata-bata','Tidak Bisa Baca') DEFAULT NULL,
  `aktivitas` text DEFAULT NULL,
  `masih_hidup` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_ayah`),
  FULLTEXT KEY `ayah_nama_fulltext` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.beasiswa
CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id_nama_beasiswa` tinyint(3) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_nama_iuran` tinyint(3) unsigned NOT NULL,
  `jumlah` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_nama_beasiswa`,`id_nama_iuran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.bulan_tahun_ajaran
CREATE TABLE IF NOT EXISTS `bulan_tahun_ajaran` (
  `id_bulan_tahun` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bulan_tahun` char(7) NOT NULL,
  `id_tahun_ajaran` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_bulan_tahun`),
  UNIQUE KEY `bulan_tahun_ajaran_bulan_tahun_unique` (`bulan_tahun`),
  KEY `bulan_tahun_ajaran_id_tahun_ajaran_foreign` (`id_tahun_ajaran`),
  CONSTRAINT `bulan_tahun_ajaran_id_tahun_ajaran_foreign` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.cara_bayar
CREATE TABLE IF NOT EXISTS `cara_bayar` (
  `id_cara_bayar` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cara_bayar` varchar(30) NOT NULL,
  `is_tunai` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_cara_bayar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.english_test
CREATE TABLE IF NOT EXISTS `english_test` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  `id_ruang` tinyint(3) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text DEFAULT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `english_test_id_gukar_foreign` (`id_gukar`),
  KEY `english_test_id_ruang_foreign` (`id_ruang`),
  CONSTRAINT `english_test_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `english_test_id_ruang_foreign` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.gukar
CREATE TABLE IF NOT EXISTS `gukar` (
  `id_gukar` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `pass_gukar` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `nik` char(7) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `status_kerja` enum('Karyawan Tetap','Karyawan Tidak Tetap','Karyawan Kontrak') NOT NULL,
  `status` enum('Aktif','Pensiun','Meninggal','Keluar') NOT NULL DEFAULT 'Aktif',
  `ket_status` text DEFAULT NULL,
  `tahun_tamat_sekolah` char(4) DEFAULT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','Diploma','Sarjana','Magister','Doctor') DEFAULT NULL,
  PRIMARY KEY (`id_gukar`),
  UNIQUE KEY `gukar_nik_unique` (`nik`),
  KEY `gukar_status_index` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.ibu
CREATE TABLE IF NOT EXISTS `ibu` (
  `id_ibu` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_ayah` bigint(20) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','Diploma','Sarjana','Magister','Doctor') DEFAULT NULL,
  `pekerjaan` varchar(15) DEFAULT NULL,
  `penghasilan` enum('di bawah 5 jt','5 s/d 10 jt','10 s/d 15 jt','15 s/d 20 jt','diatas 20 jt') DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `baca_quran` enum('Lancar Bertajwid dengan Langgam','Lancar Bertajwid','Lancar','Tidak Bisa','Terbata-bata','Tidak Bisa Baca') DEFAULT NULL,
  `aktivitas` text DEFAULT NULL,
  `masih_hidup` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_ibu`),
  KEY `ibu_id_ayah_foreign` (`id_ayah`),
  FULLTEXT KEY `ibu_nama_fulltext` (`nama`),
  CONSTRAINT `ibu_id_ayah_foreign` FOREIGN KEY (`id_ayah`) REFERENCES `ayah` (`id_ayah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(75) NOT NULL,
  `kode` enum('Kepsek','Waka_Kur','Waka_Sis','Kaur','Keuangan','Adm_Umum') DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`),
  UNIQUE KEY `jabatan_kode_unique` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.jabatan_gukar
CREATE TABLE IF NOT EXISTS `jabatan_gukar` (
  `id_jabatan_gukar` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  `id_jabatan` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_jabatan_gukar`),
  KEY `jabatan_gukar_id_gukar_foreign` (`id_gukar`),
  KEY `jabatan_gukar_id_jabatan_foreign` (`id_jabatan`),
  KEY `jabatan_gukar_id_unit_foreign` (`id_unit`),
  CONSTRAINT `jabatan_gukar_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `jabatan_gukar_id_jabatan_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  CONSTRAINT `jabatan_gukar_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.jawaban_ortu
CREATE TABLE IF NOT EXISTS `jawaban_ortu` (
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_pertanyaan` smallint(5) unsigned NOT NULL,
  `jawaban` text NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.jawaban_siswa
CREATE TABLE IF NOT EXISTS `jawaban_siswa` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_pertanyaan` smallint(5) unsigned NOT NULL,
  `jawaban` text NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.jenjang
CREATE TABLE IF NOT EXISTS `jenjang` (
  `id_jenjang` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama` enum('TKIT','SDIT','SMPIT','SMAIT') NOT NULL,
  `kepanjangan` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.kategori_seragam
CREATE TABLE IF NOT EXISTS `kategori_seragam` (
  `id_kategori` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `format_ukuran` enum('All Size','Romawi','Angka') NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `kelas` varchar(125) NOT NULL,
  `kelas_angka` char(2) NOT NULL,
  `siswa_baru` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_kelas`),
  KEY `kelas_id_unit_foreign` (`id_unit`),
  CONSTRAINT `kelas_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.kode_tahun_ajaran
CREATE TABLE IF NOT EXISTS `kode_tahun_ajaran` (
  `id_tahun_ajaran` tinyint(4) NOT NULL,
  `akhiran_va` int(11) NOT NULL DEFAULT 1,
  `akhiran_nis` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.kode_unit
CREATE TABLE IF NOT EXISTS `kode_unit` (
  `id_unit` tinyint(4) NOT NULL,
  `no_transaksi_pembayaran` int(10) unsigned NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.materi_test_akademik
CREATE TABLE IF NOT EXISTS `materi_test_akademik` (
  `id_materi` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `materi` varchar(125) NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `materi_test_akademik_id_unit_foreign` (`id_unit`),
  CONSTRAINT `materi_test_akademik_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.materi_test_english
CREATE TABLE IF NOT EXISTS `materi_test_english` (
  `id_materi` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `materi` varchar(125) NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `kategori` enum('Conversation','Reading') NOT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `materi_test_english_id_unit_foreign` (`id_unit`),
  CONSTRAINT `materi_test_english_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.materi_test_quran
CREATE TABLE IF NOT EXISTS `materi_test_quran` (
  `id_materi` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `materi` varchar(125) NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `materi_test_quran_id_unit_foreign` (`id_unit`),
  CONSTRAINT `materi_test_quran_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nama_beasiswa
CREATE TABLE IF NOT EXISTS `nama_beasiswa` (
  `id_nama_beasiswa` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id_nama_beasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nama_iuran
CREATE TABLE IF NOT EXISTS `nama_iuran` (
  `id_nama_iuran` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_iuran` varchar(125) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `pengelola` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_nama_iuran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nama_iuran_unit
CREATE TABLE IF NOT EXISTS `nama_iuran_unit` (
  `id_nama_iuran` tinyint(3) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_program` tinyint(3) unsigned NOT NULL,
  `jml_iuran` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_program`,`id_nama_iuran`),
  KEY `nama_iuran_unit_id_program_foreign` (`id_program`),
  KEY `nama_iuran_unit_id_nama_iuran_foreign` (`id_nama_iuran`),
  CONSTRAINT `nama_iuran_unit_id_nama_iuran_foreign` FOREIGN KEY (`id_nama_iuran`) REFERENCES `nama_iuran` (`id_nama_iuran`),
  CONSTRAINT `nama_iuran_unit_id_program_foreign` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`),
  CONSTRAINT `nama_iuran_unit_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nama_kelas
CREATE TABLE IF NOT EXISTS `nama_kelas` (
  `id_nama_kelas` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_kelas` tinyint(3) unsigned NOT NULL,
  `nama` varchar(75) NOT NULL,
  `penempat_kelas` tinyint(1) NOT NULL,
  `id_gukar` bigint(20) unsigned DEFAULT NULL,
  `is_aktif` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_nama_kelas`),
  KEY `nama_kelas_id_kelas_foreign` (`id_kelas`),
  KEY `nama_kelas_id_gukar_foreign` (`id_gukar`),
  CONSTRAINT `nama_kelas_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `nama_kelas_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nama_sekolah
CREATE TABLE IF NOT EXISTS `nama_sekolah` (
  `id_nama_sekolah` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_jenjang` tinyint(3) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL,
  `is_internal` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_nama_sekolah`),
  KEY `nama_sekolah_id_jenjang_foreign` (`id_jenjang`),
  CONSTRAINT `nama_sekolah_id_jenjang_foreign` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nilai_test_akademik
CREATE TABLE IF NOT EXISTS `nilai_test_akademik` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_materi` tinyint(3) unsigned NOT NULL,
  `nilai` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nilai_test_english
CREATE TABLE IF NOT EXISTS `nilai_test_english` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_materi` tinyint(3) unsigned NOT NULL,
  `nilai` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.nilai_test_quran
CREATE TABLE IF NOT EXISTS `nilai_test_quran` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_materi` tinyint(3) unsigned NOT NULL,
  `nilai` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.no_surat_ppdb
CREATE TABLE IF NOT EXISTS `no_surat_ppdb` (
  `id_surat` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_akhir_pendaftaran` date NOT NULL,
  `tgl_akhir_pengunduran` date NOT NULL,
  `tgl_akhir_pengukuran` date NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `no_surat_ppdb_id_unit_foreign` (`id_unit`),
  CONSTRAINT `no_surat_ppdb_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.pembayaran_siswa
CREATE TABLE IF NOT EXISTS `pembayaran_siswa` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_bulan_tahun` smallint(5) unsigned NOT NULL,
  `id_nama_iuran` tinyint(3) unsigned NOT NULL,
  `no_transaksi` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(10) unsigned NOT NULL,
  `id_cara_bayar` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_bulan_tahun`,`id_nama_iuran`),
  KEY `pembayaran_siswa_id_cara_bayar_foreign` (`id_cara_bayar`),
  KEY `pembayaran_siswa_id_gukar_foreign` (`id_gukar`),
  CONSTRAINT `pembayaran_siswa_id_cara_bayar_foreign` FOREIGN KEY (`id_cara_bayar`) REFERENCES `cara_bayar` (`id_cara_bayar`),
  CONSTRAINT `pembayaran_siswa_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.pengukuran_seragam
CREATE TABLE IF NOT EXISTS `pengukuran_seragam` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_badge` varchar(125) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `pengukuran_seragam_id_gukar_foreign` (`id_gukar`),
  CONSTRAINT `pengukuran_seragam_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.pertanyaan_ortu
CREATE TABLE IF NOT EXISTS `pertanyaan_ortu` (
  `id_pertanyaan` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_submenu` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_pertanyaan`),
  KEY `pertanyaan_ortu_id_unit_foreign` (`id_unit`),
  KEY `pertanyaan_ortu_id_submenu_foreign` (`id_submenu`),
  CONSTRAINT `pertanyaan_ortu_id_submenu_foreign` FOREIGN KEY (`id_submenu`) REFERENCES `submenu_pertanyaan_ortu` (`id_submenu`),
  CONSTRAINT `pertanyaan_ortu_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.pertanyaan_siswa
CREATE TABLE IF NOT EXISTS `pertanyaan_siswa` (
  `id_pertanyaan` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_submenu` tinyint(3) unsigned NOT NULL,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`id_pertanyaan`),
  KEY `pertanyaan_siswa_id_unit_foreign` (`id_unit`),
  KEY `pertanyaan_siswa_id_submenu_foreign` (`id_submenu`),
  CONSTRAINT `pertanyaan_siswa_id_submenu_foreign` FOREIGN KEY (`id_submenu`) REFERENCES `submenu_pertanyaan_siswa` (`id_submenu`),
  CONSTRAINT `pertanyaan_siswa_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.program
CREATE TABLE IF NOT EXISTS `program` (
  `id_program` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `nama` varchar(125) NOT NULL,
  `is_internasional` tinyint(1) NOT NULL DEFAULT 0,
  `biaya_pendaftaran` int(10) unsigned NOT NULL DEFAULT 0,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id_program`),
  KEY `program_id_unit_foreign` (`id_unit`),
  CONSTRAINT `program_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.promosi
CREATE TABLE IF NOT EXISTS `promosi` (
  `id_promosi` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `promosi` text NOT NULL,
  PRIMARY KEY (`id_promosi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.ruang
CREATE TABLE IF NOT EXISTS `ruang` (
  `id_ruang` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(125) NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.seragam
CREATE TABLE IF NOT EXISTS `seragam` (
  `id_seragam` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `seragam` varchar(125) NOT NULL,
  `id_kategori` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_seragam`),
  KEY `seragam_id_kategori_foreign` (`id_kategori`),
  CONSTRAINT `seragam_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_seragam` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.seragam_siswa
CREATE TABLE IF NOT EXISTS `seragam_siswa` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_seragam` tinyint(3) unsigned NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_seragam`),
  KEY `seragam_siswa_id_seragam_foreign` (`id_seragam`),
  CONSTRAINT `seragam_siswa_id_seragam_foreign` FOREIGN KEY (`id_seragam`) REFERENCES `seragam` (`id_seragam`),
  CONSTRAINT `seragam_siswa_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `pass_siswa` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `id_ibu` bigint(20) unsigned DEFAULT NULL,
  `id_wali` bigint(20) unsigned DEFAULT NULL,
  `nama_panggilan` varchar(150) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `telp_yang_dihub` varchar(20) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `tempat_lahir` varchar(125) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `anak_ke` varchar(2) DEFAULT NULL,
  `jml_saudara` varchar(2) DEFAULT NULL,
  `penanggung_biaya` enum('Ayah','Ibu','Wali Siswa') NOT NULL DEFAULT 'Ayah',
  `alamat` text DEFAULT NULL,
  `jenis_tinggal` enum('Rumah Orang Tua','Rumah Saudara','Rumah Kontrak') DEFAULT NULL,
  `jarak_tinggal` varchar(3) DEFAULT NULL,
  `gol_darah` enum('A','B','O','AB') DEFAULT NULL,
  `riwayat_penyakit` text DEFAULT NULL,
  `tinggi_badan` varchar(3) DEFAULT NULL,
  `berat_badan` varchar(3) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `siswa_id_ibu_foreign` (`id_ibu`),
  KEY `siswa_id_wali_foreign` (`id_wali`),
  FULLTEXT KEY `siswa_nama_lengkap_fulltext` (`nama_lengkap`),
  CONSTRAINT `siswa_id_ibu_foreign` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`),
  CONSTRAINT `siswa_id_wali_foreign` FOREIGN KEY (`id_wali`) REFERENCES `wali` (`id_wali`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.siswa_unit
CREATE TABLE IF NOT EXISTS `siswa_unit` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `tgl_pendaftaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `masuk_tahun_ajaran` tinyint(3) unsigned NOT NULL,
  `masuk_program` tinyint(3) unsigned NOT NULL,
  `diterima_program` tinyint(3) unsigned DEFAULT NULL,
  `virtual_acc` char(16) NOT NULL,
  `id_nama_sekolah` int(10) unsigned NOT NULL,
  `id_kelas` tinyint(3) unsigned NOT NULL,
  `id_promosi` tinyint(3) unsigned NOT NULL,
  `id_nama_kelas` tinyint(3) unsigned DEFAULT NULL,
  `nis` varchar(9) DEFAULT NULL,
  `id_nama_beasiswa` tinyint(3) unsigned DEFAULT NULL,
  `is_pindahan` tinyint(1) NOT NULL,
  `status_ppdb` enum('Pendaftar','Test Seleksi','Daftar Ulang','Pengukuran Seragam') DEFAULT NULL,
  `status_siswa` enum('Aktif','Meninggal','Pindah Sekolah') NOT NULL DEFAULT 'Aktif',
  `spp` int(10) unsigned DEFAULT NULL,
  `infaq` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `siswa_unit_masuk_tahun_ajaran_foreign` (`masuk_tahun_ajaran`),
  KEY `siswa_unit_masuk_program_foreign` (`masuk_program`),
  KEY `siswa_unit_diterima_program_foreign` (`diterima_program`),
  KEY `siswa_unit_id_nama_sekolah_foreign` (`id_nama_sekolah`),
  KEY `siswa_unit_id_kelas_foreign` (`id_kelas`),
  KEY `siswa_unit_id_nama_kelas_foreign` (`id_nama_kelas`),
  KEY `siswa_unit_id_promosi_foreign` (`id_promosi`),
  KEY `siswa_unit_id_nama_beasiswa_foreign` (`id_nama_beasiswa`),
  CONSTRAINT `siswa_unit_diterima_program_foreign` FOREIGN KEY (`diterima_program`) REFERENCES `program` (`id_program`),
  CONSTRAINT `siswa_unit_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  CONSTRAINT `siswa_unit_id_nama_beasiswa_foreign` FOREIGN KEY (`id_nama_beasiswa`) REFERENCES `nama_beasiswa` (`id_nama_beasiswa`),
  CONSTRAINT `siswa_unit_id_nama_kelas_foreign` FOREIGN KEY (`id_nama_kelas`) REFERENCES `nama_kelas` (`id_nama_kelas`),
  CONSTRAINT `siswa_unit_id_nama_sekolah_foreign` FOREIGN KEY (`id_nama_sekolah`) REFERENCES `nama_sekolah` (`id_nama_sekolah`),
  CONSTRAINT `siswa_unit_id_promosi_foreign` FOREIGN KEY (`id_promosi`) REFERENCES `promosi` (`id_promosi`),
  CONSTRAINT `siswa_unit_masuk_program_foreign` FOREIGN KEY (`masuk_program`) REFERENCES `program` (`id_program`),
  CONSTRAINT `siswa_unit_masuk_tahun_ajaran_foreign` FOREIGN KEY (`masuk_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.submenu_pertanyaan_ortu
CREATE TABLE IF NOT EXISTS `submenu_pertanyaan_ortu` (
  `id_submenu` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `submenu` varchar(125) NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_submenu`),
  KEY `submenu_pertanyaan_ortu_id_unit_foreign` (`id_unit`),
  CONSTRAINT `submenu_pertanyaan_ortu_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.submenu_pertanyaan_siswa
CREATE TABLE IF NOT EXISTS `submenu_pertanyaan_siswa` (
  `id_submenu` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `submenu` varchar(125) NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_submenu`),
  KEY `submenu_pertanyaan_siswa_id_unit_foreign` (`id_unit`),
  CONSTRAINT `submenu_pertanyaan_siswa_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.tagihan_siswa
CREATE TABLE IF NOT EXISTS `tagihan_siswa` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_bulan_tahun` smallint(5) unsigned NOT NULL,
  `id_nama_iuran` tinyint(3) unsigned NOT NULL,
  `jumlah` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`,`id_bulan_tahun`,`id_nama_iuran`),
  KEY `tagihan_siswa_id_siswa_foreign` (`id_siswa`),
  KEY `tagihan_siswa_id_bulan_tahun_foreign` (`id_bulan_tahun`),
  KEY `tagihan_siswa_id_nama_iuran_foreign` (`id_nama_iuran`),
  CONSTRAINT `tagihan_siswa_id_bulan_tahun_foreign` FOREIGN KEY (`id_bulan_tahun`) REFERENCES `bulan_tahun_ajaran` (`id_bulan_tahun`),
  CONSTRAINT `tagihan_siswa_id_nama_iuran_foreign` FOREIGN KEY (`id_nama_iuran`) REFERENCES `nama_iuran` (`id_nama_iuran`),
  CONSTRAINT `tagihan_siswa_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  CONSTRAINT `tagihan_siswa_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.tahun_ajaran
CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun_ajaran` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` char(9) NOT NULL,
  `tahun_singkat` char(4) NOT NULL,
  `is_aktif` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_tahun_ajaran`),
  UNIQUE KEY `tahun_ajaran_tahun_ajaran_unique` (`tahun_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.test_akademik
CREATE TABLE IF NOT EXISTS `test_akademik` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  `id_ruang` tinyint(3) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `test_akademik_id_gukar_foreign` (`id_gukar`),
  KEY `test_akademik_id_ruang_foreign` (`id_ruang`),
  CONSTRAINT `test_akademik_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `test_akademik_id_ruang_foreign` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.test_quran
CREATE TABLE IF NOT EXISTS `test_quran` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  `id_ruang` tinyint(3) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `kelancaran` enum('Lancar Bertajwid dengan Langgam','Lancar Bertajwid','Lancar','Tidak Bisa','Terbata-bata','Tidak Bisa Baca') DEFAULT NULL,
  `catatan_tahsin` text DEFAULT NULL,
  `jml_hafalan` tinyint(3) unsigned DEFAULT NULL,
  `catatan_tahfidz` text DEFAULT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `test_quran_id_gukar_foreign` (`id_gukar`),
  KEY `test_quran_id_ruang_foreign` (`id_ruang`),
  CONSTRAINT `test_quran_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `test_quran_id_ruang_foreign` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.unit
CREATE TABLE IF NOT EXISTS `unit` (
  `id_unit` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_jenjang` tinyint(3) unsigned DEFAULT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `is_yayasan` tinyint(1) NOT NULL DEFAULT 0,
  `is_boarding` tinyint(1) NOT NULL DEFAULT 0,
  `awalan_kode_pendaftaran` varchar(50) DEFAULT NULL,
  `awalan_va` varchar(12) DEFAULT NULL,
  `max_kelas` varchar(2) DEFAULT NULL,
  `is_internasional` tinyint(1) DEFAULT NULL,
  `is_free_register_date` date NOT NULL,
  `is_free_register` enum('Eksternal dan Internal','Hanya Internal','Hanya Eksternal') NOT NULL DEFAULT 'Hanya Internal',
  `tempat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_unit`),
  KEY `unit_id_jenjang_foreign` (`id_jenjang`),
  CONSTRAINT `unit_id_jenjang_foreign` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.wali
CREATE TABLE IF NOT EXISTS `wali` (
  `id_wali` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` tinyint(1) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','Diploma','Sarjana','Magister','Doctor') DEFAULT NULL,
  `pekerjaan` varchar(15) DEFAULT NULL,
  `penghasilan` enum('di bawah 5 jt','5 s/d 10 jt','10 s/d 15 jt','15 s/d 20 jt','diatas 20 jt') DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `baca_quran` enum('Lancar Bertajwid dengan Langgam','Lancar Bertajwid','Lancar','Tidak Bisa','Terbata-bata','Tidak Bisa Baca') DEFAULT NULL,
  `aktivitas` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id_wali`),
  FULLTEXT KEY `wali_nama_fulltext` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.wawancara_ortu
CREATE TABLE IF NOT EXISTS `wawancara_ortu` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  `id_ruang` tinyint(3) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `cat_biaya` text DEFAULT NULL,
  `cat_wawancara` text DEFAULT NULL,
  `bersedia_di_ip` tinyint(1) NOT NULL DEFAULT 0,
  `direkomendasikan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `wawancara_ortu_id_gukar_foreign` (`id_gukar`),
  KEY `wawancara_ortu_id_ruang_foreign` (`id_ruang`),
  CONSTRAINT `wawancara_ortu_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `wawancara_ortu_id_ruang_foreign` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table sis_yahya.wawancara_siswa
CREATE TABLE IF NOT EXISTS `wawancara_siswa` (
  `id_siswa` bigint(20) unsigned NOT NULL,
  `id_unit` tinyint(3) unsigned NOT NULL,
  `id_gukar` bigint(20) unsigned NOT NULL,
  `id_ruang` tinyint(3) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `cat_wawancara` text DEFAULT NULL,
  `bersedia_di_ip` tinyint(1) NOT NULL,
  `direkomendasikan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_unit`,`id_siswa`),
  KEY `wawancara_siswa_id_gukar_foreign` (`id_gukar`),
  KEY `wawancara_siswa_id_ruang_foreign` (`id_ruang`),
  CONSTRAINT `wawancara_siswa_id_gukar_foreign` FOREIGN KEY (`id_gukar`) REFERENCES `gukar` (`id_gukar`),
  CONSTRAINT `wawancara_siswa_id_ruang_foreign` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for trigger sis_yahya.tambah_bulan_tahun_ajaran
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER tambah_bulan_tahun_ajaran 
            AFTER INSERT ON tahun_ajaran
	        FOR EACH ROW 
            BEGIN
                INSERT INTO bulan_tahun_ajaran (bulan_tahun, id_tahun_ajaran)
                VALUES (CONCAT("07-",LEFT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("08-",LEFT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("09-",LEFT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("10-",LEFT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("11-",LEFT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("12-",LEFT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("01-",RIGHT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("02-",RIGHT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("03-",RIGHT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("04-",RIGHT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("05-",RIGHT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran),
                        (CONCAT("06-",RIGHT(NEW.tahun_ajaran, 4)), NEW.id_tahun_ajaran);
            END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger sis_yahya.tambah_kode_tahun_ajaran
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER tambah_kode_tahun_ajaran AFTER INSERT ON tahun_ajaran
            FOR EACH ROW
            BEGIN
                INSERT INTO kode_tahun_ajaran (id_tahun_ajaran)
                VALUES (NEW.id_tahun_ajaran);
            END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger sis_yahya.tambah_kode_unit
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER tambah_kode_unit AFTER INSERT ON unit
            FOR EACH ROW
            BEGIN
                INSERT INTO kode_unit (id_unit)
                VALUES (NEW.id_unit);
            END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
