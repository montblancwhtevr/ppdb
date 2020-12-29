/*
Navicat MySQL Data Transfer

Source Server         : laragon
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : db_psb

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-12-29 08:59:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_admins
-- ----------------------------
DROP TABLE IF EXISTS `tb_admins`;
CREATE TABLE `tb_admins` (
  `id` varchar(20) NOT NULL,
  `dana_pengembangan` int(11) NOT NULL,
  `dana_tahunan` int(11) NOT NULL,
  `spp` int(11) NOT NULL,
  `katering` int(11) NOT NULL,
  `tabungan_wisata` int(11) NOT NULL,
  `angsuran` varchar(25) NOT NULL,
  `tanggal_angsuran` varchar(50) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tb_admins
-- ----------------------------

-- ----------------------------
-- Table structure for tb_agama
-- ----------------------------
DROP TABLE IF EXISTS `tb_agama`;
CREATE TABLE `tb_agama` (
  `kode_agama` varchar(15) NOT NULL,
  `nama_agama` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_agama`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tb_agama
-- ----------------------------
INSERT INTO `tb_agama` VALUES ('A001', 'ISLAM');
INSERT INTO `tb_agama` VALUES ('A002', 'KRISTEN');
INSERT INTO `tb_agama` VALUES ('A003', 'HINDU');
INSERT INTO `tb_agama` VALUES ('A004', 'BUDHA');
INSERT INTO `tb_agama` VALUES ('A005', 'Katolik');

-- ----------------------------
-- Table structure for tb_siswa
-- ----------------------------
DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa` (
  `kode_siswa` varchar(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nilai_ijazah` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `nilai5` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `alamat_ortu` varchar(100) DEFAULT NULL,
  `no_telp_ortu` varchar(15) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `alamat_wali` varchar(100) DEFAULT NULL,
  `no_telp_wali` varchar(15) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat_sekolah` varchar(150) DEFAULT NULL,
  `kelas` varchar(10) NOT NULL,
  `admins` varchar(255) NOT NULL,
  PRIMARY KEY (`kode_siswa`) USING BTREE,
  KEY `admins_fk` (`admins`) USING BTREE,
  CONSTRAINT `admins_fk` FOREIGN KEY (`admins`) REFERENCES `tb_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tb_siswa
-- ----------------------------

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `kode_user` varchar(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_user`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('U001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Abdul yamin', 'admin', 'images.jpg');
INSERT INTO `tb_user` VALUES ('U002', 'yamin', 'b630b447258bc15e19f2797b0b5ee996', 'yamin', 'yamin Bae', 'kepsek', 'atomix_user31.png');
INSERT INTO `tb_user` VALUES ('U003', 'deni', '43f41d127a81c54d4c8f5f93daeb7118', 'deni', 'Deni Khairani', 'admin', 'atomix_user31.png');
