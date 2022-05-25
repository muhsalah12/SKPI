/*
Navicat MySQL Data Transfer

Source Server         : aplikasi_salahudin_swab
Source Server Version : 50737
Source Host           : newdemo.aplikasiskripsi.com:3306
Source Database       : aplikasi_salahudin_swab

Target Server Type    : MYSQL
Target Server Version : 50737
File Encoding         : 65001

Date: 2022-01-25 09:12:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jenis_penyedia
-- ----------------------------
DROP TABLE IF EXISTS `jenis_penyedia`;
CREATE TABLE `jenis_penyedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_penyedia` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of jenis_penyedia
-- ----------------------------
INSERT INTO `jenis_penyedia` VALUES ('1', 'A', '2022-01-21 04:35:24', '2022-01-21 04:36:08', null);
INSERT INTO `jenis_penyedia` VALUES ('2', 'B', '2022-01-21 04:36:12', '2022-01-21 04:42:06', null);
INSERT INTO `jenis_penyedia` VALUES ('3', 'C', '2022-01-21 04:36:17', '2022-01-21 04:36:17', null);

-- ----------------------------
-- Table structure for jenis_swab
-- ----------------------------
DROP TABLE IF EXISTS `jenis_swab`;
CREATE TABLE `jenis_swab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `info_swab` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of jenis_swab
-- ----------------------------
INSERT INTO `jenis_swab` VALUES ('1', 'Antigen', '100000', 'Rapid test antigen adalah tes diagnostik cepat atau biasa disebut dengan rapid swab. Tes ini dilakukan untuk mendeteksi keberadaan antigen virus Corona jenis baru, COVID-19 pada sampel yang berasal dari saluran pernapasan.', '2022-01-21 04:29:42', '2022-01-21 04:29:47', null);
INSERT INTO `jenis_swab` VALUES ('2', 'PCR', '450000', 'PCR adalah pemeriksaan laboratorium untuk mendeteksi keberadaan material genetik dari sel, bakteri, atau virus. Saat ini, PCR juga digunakan untuk mendiagnosis penyakit Covid-19, yaitu dengan mendeteksi material genetik virus Corona.', '2022-01-21 04:30:02', '2022-01-21 04:30:02', null);

-- ----------------------------
-- Table structure for kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES ('1', 'Bogor Barat', '2022-01-21 04:40:48', '2022-01-21 04:42:51', null);
INSERT INTO `kecamatan` VALUES ('2', 'Bogor Selatan', '2022-01-21 04:40:55', '2022-01-21 04:42:58', null);
INSERT INTO `kecamatan` VALUES ('3', 'Bogor Tengah', '2022-01-21 04:43:08', '2022-01-21 04:43:08', null);
INSERT INTO `kecamatan` VALUES ('4', 'Bogor Timur', '2022-01-21 04:43:15', '2022-01-21 04:43:15', null);
INSERT INTO `kecamatan` VALUES ('5', 'Bogor Utara', '2022-01-21 04:43:21', '2022-01-21 04:43:21', null);
INSERT INTO `kecamatan` VALUES ('6', 'Tanah Sereal', '2022-01-21 04:43:29', '2022-01-21 04:43:29', null);

-- ----------------------------
-- Table structure for penyedia_swab
-- ----------------------------
DROP TABLE IF EXISTS `penyedia_swab`;
CREATE TABLE `penyedia_swab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_swab` varchar(255) DEFAULT '',
  `id_jenis_penyedia` varchar(255) DEFAULT '',
  `nama_penyedia` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT '',
  `id_kecamatan` varchar(255) DEFAULT '',
  `info_penyedia` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of penyedia_swab
-- ----------------------------
INSERT INTO `penyedia_swab` VALUES ('1', '2', '2', 'Quick Test', 'Alamat', '4', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', '2022-01-21 06:27:48', '2022-01-21 06:33:14', null);
INSERT INTO `penyedia_swab` VALUES ('2', '1', '1', 'Quick Test', 'Alamat Lengkap', '1', 'Info', '2022-01-24 02:19:34', '2022-01-24 02:19:34', null);
INSERT INTO `penyedia_swab` VALUES ('3', '2', '1', 'Klinik Amanah', 'Alamat Lengkap', '5', 'Info', '2022-01-24 03:52:11', '2022-01-24 03:52:11', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT '',
  `foto` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin', '$2y$10$l6cYkyCvWoWTt9pfDx2dcOz7.xn9h5M5VsOZe3qYpt5iI3FKQABzO', 'L', 'images/admin/1642737917.jpg', '2021-08-24 04:38:49', '2022-01-21 04:05:17', null);
INSERT INTO `users` VALUES ('2', 'Kamaludin', 'kamaludin', '$2y$10$FtGtsAVjOHscw5lCWVKrVuf4PPMWOCmweJOSDV5m8Z14VGGP5mdNC', 'L', 'images/admin/1642738168.jpg', '2022-01-21 04:09:28', '2022-01-21 04:09:28', null);
SET FOREIGN_KEY_CHECKS=1;
