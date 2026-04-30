-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_pakeka
DROP DATABASE IF EXISTS `db_pakeka`;
CREATE DATABASE IF NOT EXISTS `db_pakeka` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_pakeka`;

-- Dumping structure for table db_pakeka.produk
DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) COLLATE armscii8_bin DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `deskripsi` text COLLATE armscii8_bin,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_pakeka.produk: ~2 rows (approximately)
INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `deskripsi`) VALUES
	(3, 'kemenyan', 5000, 13, NULL),
	(4, 'Anjing -Shiba Inu', 40000000, 5, NULL);

-- Dumping structure for table db_pakeka.tbl_penjualan
DROP TABLE IF EXISTS `tbl_penjualan`;
CREATE TABLE IF NOT EXISTS `tbl_penjualan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) COLLATE armscii8_bin DEFAULT NULL,
  `harga_satuan` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_pakeka.tbl_penjualan: ~0 rows (approximately)

-- Dumping structure for table db_pakeka.tb_penjualan
DROP TABLE IF EXISTS `tb_penjualan`;
CREATE TABLE IF NOT EXISTS `tb_penjualan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) COLLATE armscii8_bin DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_pakeka.tb_penjualan: ~2 rows (approximately)
INSERT INTO `tb_penjualan` (`id`, `nama_barang`, `harga`, `jumlah`) VALUES
	(3, 'susu', 10, 1),
	(4, 'Anjing -Shiba Inu', 75000000, 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
