/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : 127.0.0.1:3306
 Source Schema         : db_bka2

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 02/06/2018 00:26:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;


-- ----------------------------
-- Table structure for member_data_store
-- ----------------------------
DROP TABLE IF EXISTS `member_data_store`;
CREATE TABLE `member_data_store`  (
  `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NAMA_MEMBER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `JK_MEMBER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TIPE_MEMBER` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NOTELP_MEMBER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ALAMAT_MEMBER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `PASSWD_MEMBER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_MEMBER`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of member_data_store
-- ----------------------------
BEGIN;
INSERT INTO `member_data_store` VALUES (1, 'adnankhairi', 'Adnan Khairi', 'laki-laki', 'admin', '088218872813', 'Bandung', 'admin'), (2, 'rifkysis', 'Rifky Syswanto', 'laki-laki', 'admin', '', '', 'admin'), (4, 'yuniarti', 'Yuniarti Musaadah', 'perempuan', 'admin', '', '', 'admin'), (5, 'bisma', 'Bisma Wahyu', 'laki-laki', 'admin', '', '', 'admin'), (6, 'asep', 'Asep Saepul', 'laki-laki', 'user', '', '', 'user'), (7, 'ammar', 'Ammar Ash-shiddiqi', 'laki-laki', 'user', '', '', 'user'), (8, 'izhar', 'M Izhar Rusiawan', 'laki-laki', 'user', '', '', 'user');
COMMIT;


-- ----------------------------
-- Table structure for kereta_data_store
-- ----------------------------
DROP TABLE IF EXISTS `kereta_data_store`;
CREATE TABLE `kereta_data_store`  (
  `ID_KERETA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NAMA_KERETA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KETERANGAN_KERETA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NO_GERBONG` int(11) NOT NULL,
  `NO_KURSI` int(11) NOT NULL,
  PRIMARY KEY (`ID_KERETA`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of kereta_data_store
-- ----------------------------
BEGIN;
INSERT INTO `kereta_data_store` VALUES ('DD999', 'Destroyer', 'eksekutif', 10, 1000), ('KA001', 'Marifat Jaya', 'bisnis', 12, 1800), ('KA002', 'Switch', 'ekonomi', 16, 1600), ('KA003', 'Take Flight', 'ekonomi', 16, 1600), ('KA004', 'Relocaleap', 'ekonomi', 20, 2000), ('KA005', 'Geocast', 'ekonomi', 16, 1600), ('KA006', 'Geo Pass', 'ekonomi', 15, 1500), ('KA007', 'Lightning Step', 'ekonomi', 17, 1700), ('KA008', 'Geoport', 'ekonomi', 17, 1700), ('KA009', 'Wink', 'ekonomi', 16, 1600), ('KA010', 'Detour', 'ekonomi', 20, 2000), ('KA011', 'Bounce', 'bisnis', 15, 900), ('KA012', 'Streamstep', 'bisnis', 19, 1140), ('KA013', 'Geo Relocation', 'bisnis', 20, 1200), ('KA014', 'Portal', 'eksekutif', 20, 1000), ('KA015', 'Body Flicker', 'eksekutif', 19, 950), ('KA016', 'Apparate', 'eksekutif', 17, 850);
COMMIT;


-- ----------------------------
-- Table structure for stasiun_data_store
-- ----------------------------
DROP TABLE IF EXISTS `stasiun_data_store`;
CREATE TABLE `stasiun_data_store`  (
  `ID_STASIUN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NAMA_STASIUN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ALAMAT_STASIUN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NO_TELP_STASIUN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_STASIUN`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of stasiun_data_store
-- ----------------------------
BEGIN;
INSERT INTO `stasiun_data_store` VALUES ('ST001', 'Stasiun Gambir', 'Jalan Medan Merdeka Timur No. 1, Jakarta Pusat', '+62800155636'), ('ST002', 'Stasiun Bandung (Stasiun Hall)', 'Jalan Kebon Kawung No. 43, Bandung', '+62804088684'), ('ST003', 'Stasiun Yogyakarta', 'Jalan Margo Utomo 1, Yogyakarta', '+62805473204'), ('ST004', 'Stasiun Surabaya Gubeng', 'Jalan Semarang No. 1, Surabaya', '+62806380470'), ('ST005', 'Stasiun Pasar Senen', 'Jalan Stasiun Senen No. 14, Jakarta Pusat', '+62809935794'), ('ST006', 'Stasiun Solo Balapan', 'Jalan Wolter Monginsidi 112, Solo', '+62810157131'), ('ST007', 'Stasiun Semarang Tawang', 'Jalan Taman Tawang 1, Semarang', '+62813307738'), ('ST008', 'Stasiun Purwokerto', 'Jalan Stasiun Purwokerto, Purwokerto', '+62814707326'), ('ST009', 'Stasiun Cirebon', 'Jalan Raya Siliwangi, Cirebon', '+62826184779'), ('ST010', 'Stasiun Madiun', '  Jalan Kompol Sunaryo No. 6A, Madiun', '+62828357394'), ('ST011', 'Stasiun Malang', 'Jalan Trunojoyo, Malang', '+62830753094'), ('ST012', 'Stasiun Jakarta Kota', 'Jalan Stasiun Kota No. 1, Jakarta', '+62836042527'), ('ST013', 'Stasiun Haurgeulis', 'Jalan Jenderal Achmad Yani, Indramayu', '+62837407660'), ('ST014', 'Stasiun Gombong', 'Jalan Stasiun Gombong, Purwokerto', '+62849537578'), ('ST015', 'Stasiun Cimahi', '-', '+62854286321'), ('ST016', 'Stasiun Tanjung Priok', '-', '+62874367290'), ('ST017', 'Stasiun Tegal', '-', '+62879055988'), ('ST018', 'Stasiun Depok Baru', '-', '+62879413799'), ('ST019', 'Stasiun Batang Baru', '-', '+62882958749'), ('ST020', 'Stasiun Kalisat', '-', '+62888842390');
COMMIT;

-- ----------------------------
-- Table structure for jadwal_data_store
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_data_store`;
CREATE TABLE `jadwal_data_store`  (
  `ID_JADWAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_KERETA` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ID_STASIUN_AWAL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ID_STASIUN_TUJUAN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `JAM_BERANGKAT` time(0) NOT NULL,
  `JAM_DATANG` time(0) NOT NULL,
  `KETERANGAN_JADWAL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_JADWAL`) USING BTREE,
  INDEX `FK_MENCARI_STASIUN_AWAL`(`ID_STASIUN_AWAL`) USING BTREE,
  INDEX `FK_MENCARI_STASIUN_TUJUAN`(`ID_STASIUN_TUJUAN`) USING BTREE,
  INDEX `FK_RELATIONSHIP_4`(`ID_KERETA`) USING BTREE,
  CONSTRAINT `FK_MENCARI_KERETA` FOREIGN KEY (`ID_KERETA`) REFERENCES `kereta_data_store` (`ID_KERETA`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_MENCARI_STASIUN_AWAL` FOREIGN KEY (`ID_STASIUN_AWAL`) REFERENCES `stasiun_data_store` (`ID_STASIUN`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_MENCARI_STASIUN_TUJUAN` FOREIGN KEY (`ID_STASIUN_TUJUAN`) REFERENCES `stasiun_data_store` (`ID_STASIUN`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of jadwal_data_store
-- ----------------------------
BEGIN;
INSERT INTO `jadwal_data_store` VALUES (2, 'KA002', 'ST001', 'ST005', '08:20:00', '14:00:00', '50000'), (3, 'KA003', 'ST002', 'ST005', '08:45:00', '15:00:00', '200000'), (4, 'KA005', 'ST007', 'ST012', '09:40:00', '16:05:00', '300000'), (5, 'KA006', 'ST003', 'ST010', '10:15:00', '16:10:00', '150000'), (6, 'KA007', 'ST011', 'ST009', '10:25:00', '16:30:00', '25000'), (7, 'KA008', 'ST005', 'ST009', '10:30:00', '16:35:00', '70000'), (8, 'KA009', 'ST005', 'ST001', '10:55:00', '16:40:00', '200000'), (9, 'KA010', 'ST002', 'ST003', '11:00:00', '18:10:00', '100000'), (10, 'KA011', 'ST019', 'ST002', '11:15:00', '18:15:00', '20000'), (11, 'KA012', 'ST006', 'ST014', '11:35:00', '19:10:00', '20000'), (12, 'KA004', 'ST001', 'ST002', '09:30:00', '15:55:00', '40000');
COMMIT;


-- ----------------------------
-- Table structure for pemesanan_data_store
-- ----------------------------
DROP TABLE IF EXISTS `pemesanan_data_store`;
CREATE TABLE `pemesanan_data_store`  (
  `ID_PEMESANAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_MEMBER` int(11) NOT NULL,
  `ID_JADWAL` int(11) NOT NULL,
  `TGL_PESAN` datetime(0) NOT NULL,
  `JUMLAH_TIKET` int(11) NOT NULL,
  `TOTAL_PEMBAYARAN` float(64, 0) NOT NULL,
  PRIMARY KEY (`ID_PEMESANAN`) USING BTREE,
  INDEX `FK_MEMESAN_TIKET`(`ID_MEMBER`) USING BTREE,
  INDEX `FK_RELATIONSHIP_6`(`ID_JADWAL`) USING BTREE,
  CONSTRAINT `FK_MEMESAN_TIKET` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member_data_store` (`ID_MEMBER`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_MENDAPAT_ID_JADWAL` FOREIGN KEY (`ID_JADWAL`) REFERENCES `jadwal_data_store` (`ID_JADWAL`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1014 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of pemesanan_data_store
-- ----------------------------
BEGIN;
INSERT INTO `pemesanan_data_store` VALUES (1000, 4, 2, '2018-05-09 17:00:00', 3, 500000), (1004, 1, 4, '2018-05-09 06:00:00', 1, 1500000), (1006, 1, 3, '2018-05-10 05:00:00', 5, 400000), (1007, 6, 6, '2018-05-09 08:00:00', 2, 350000), (1008, 1, 2, '2018-05-17 02:38:45', 3, 150000), (1013, 1, 2, '2018-05-17 02:43:21', 2, 100000);
COMMIT;


-- ----------------------------
-- Table structure for transaksi_data_store
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_data_store`;
CREATE TABLE `transaksi_data_store`  (
  `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PEMESANAN` int(11) NOT NULL,
  `NAMA_PENUMPANG` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KATEGORI_PENUMPANG` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `JENIS_PEMBAYARAN` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TOTAL_PEMBAYARAN_TRANSAKSI` float(64, 0) NOT NULL,
  PRIMARY KEY (`ID_PEMBAYARAN`) USING BTREE,
  INDEX `FK_MELAKUKAN_PEMBAYARAN`(`ID_PEMESANAN`) USING BTREE,
  CONSTRAINT `FK_MELAKUKAN_PEMBAYARAN` FOREIGN KEY (`ID_PEMESANAN`) REFERENCES `pemesanan_data_store` (`ID_PEMESANAN`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of transaksi_data_store
-- ----------------------------
BEGIN;
INSERT INTO `transaksi_data_store` VALUES (1, 1000, 'wkwwk', '-', 'Cash', 500000), (2, 1004, 'Solehpati', '-', 'Cash', 1500000), (3, 1006, 'Ujeng', '-', 'Credit', 400000), (4, 1007, 'Mahmud', '-', 'Credit', 300000);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
