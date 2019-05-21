/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.33-MariaDB : Database - db_sipes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sipes` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sipes`;

/*Table structure for table `tb_jenis_surat` */

DROP TABLE IF EXISTS `tb_jenis_surat`;

CREATE TABLE `tb_jenis_surat` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_surat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jenis_surat` */

insert  into `tb_jenis_surat`(`id_jenis`,`jenis_surat`) values (1,'Surat Edaran'),(2,'Surat Biasa'),(3,'Surat Keterangan'),(4,'Surat Perintah'),(5,'Surat Ijin'),(6,'Surat Perjanjian'),(7,'Kesepakatan Bersama'),(8,'Perjanjian Kerjasama'),(9,'Surat Perintah Tugas'),(10,'Surat Perintah Perjalanan Dinas'),(11,'Surat Kuasa'),(12,'Surat Undangan');

/*Table structure for table `tb_surat_keluar` */

DROP TABLE IF EXISTS `tb_surat_keluar`;

CREATE TABLE `tb_surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `no_surat` varchar(30) DEFAULT NULL,
  `tipe_surat` varchar(20) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `indeks` varchar(20) DEFAULT NULL,
  `no_agenda` varchar(20) DEFAULT NULL,
  `kode_surat` varchar(30) DEFAULT NULL,
  `sifat_surat` varchar(20) DEFAULT NULL,
  `tujuan_surat` varchar(50) DEFAULT NULL,
  `perihal` varchar(150) DEFAULT NULL,
  `ket_surat` varchar(200) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `pengirim` varchar(50) DEFAULT NULL,
  `scan_surat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_surat_keluar`),
  KEY `FK_User_SK` (`id_user`),
  KEY `FK_Jenis_SK` (`id_jenis`),
  CONSTRAINT `FK_Jenis_SK` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis_surat` (`id_jenis`),
  CONSTRAINT `FK_User_SK` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_surat_keluar` */

/*Table structure for table `tb_surat_masuk` */

DROP TABLE IF EXISTS `tb_surat_masuk`;

CREATE TABLE `tb_surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `tgl_surat` date DEFAULT '0000-00-00',
  `no_surat` varchar(30) DEFAULT NULL,
  `tipe_surat` varchar(30) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `indeks` varchar(10) DEFAULT NULL,
  `no_agenda` varchar(10) DEFAULT NULL,
  `kode_surat` varchar(30) DEFAULT NULL,
  `sifat_surat` varchar(30) DEFAULT NULL,
  `asal_surat` varchar(50) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `ket_surat` varchar(100) DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `status_disposisi` tinyint(1) DEFAULT '0',
  `ket_disposisi` varchar(100) DEFAULT NULL,
  `scan_surat` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_surat_masuk`),
  KEY `FK_Jenis_surat` (`id_jenis`),
  KEY `FK_User` (`id_user`),
  CONSTRAINT `FK_Jenis_surat` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis_surat` (`id_jenis`),
  CONSTRAINT `FK_User` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_surat_masuk` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat_user` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `jabatan` varchar(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`jenis_kelamin`,`alamat_user`,`email`,`no_hp`,`username`,`password`,`jabatan`,`status`) values (1,'Putri Ariasih','Wanita','Tabanan Kaje','putri@mail.com','082676678998','putri','4093fed663717c843bea100d17fb67c8','admin',1),(2,'Kepala Bidang','Wanita','Denpasar','putuwahyu11@gmail.com','089009926787','kepbid','95748ff5bbce324ca4296535e23c5a1d','kepbid',1),(3,'Super Admin','Pria','Tabanan','superadmin@mail.com','089292929220','super','1b3231655cebb7a1f783eddf27d254ca','superadmin',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
