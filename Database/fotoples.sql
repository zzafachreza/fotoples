/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.0.17-MariaDB : Database - fotoples
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `telpon_admin` varchar(13) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`nama_admin`,`username`,`password`,`email_admin`,`telpon_admin`) values (1,'Alexander Pierce','alexander','alexander','alexanderpierce@gmail.com','083812184944');

/*Table structure for table `jenis_media` */

DROP TABLE IF EXISTS `jenis_media`;

CREATE TABLE `jenis_media` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(25) NOT NULL,
  `nama_media` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_media` */

insert  into `jenis_media`(`id_media`,`nama_kategori`,`nama_media`,`stok`,`harga`) values (1,'Indoor','Vinyl Transparant',100,65000),(2,'Indoor','Vinyl Standard',200,60000),(3,'Indoor','VInyl Super Highress',100,75000),(4,'Indoor','Vinyl Transparant Highres',100,80000),(5,'Print-A3','Vinyil A3',100,15000);

/*Table structure for table `kasir` */

DROP TABLE IF EXISTS `kasir`;

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kasir` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email_kasir` varchar(30) NOT NULL,
  `telpon_kasir` varchar(13) NOT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kasir` */

insert  into `kasir`(`id_kasir`,`nama_kasir`,`username`,`password`,`email_kasir`,`telpon_kasir`) values (1,'Adelia Astari','adel05','adel123','adeliaastari98@gmail.com','083812184944');

/*Table structure for table `kategori_cetak` */

DROP TABLE IF EXISTS `kategori_cetak`;

CREATE TABLE `kategori_cetak` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(25) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_cetak` */

insert  into `kategori_cetak`(`id_kategori`,`nama_kategori`) values (1,'Outdoor Printing'),(2,'Indoor Printing'),(3,'Print-A3'),(4,'Sticker-A3'),(5,'Offset Printing'),(6,'Souvenir'),(7,'Finishing');

/*Table structure for table `media_cetak` */

DROP TABLE IF EXISTS `media_cetak`;

CREATE TABLE `media_cetak` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_media` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_media`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `media_cetak_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_cetak` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `media_cetak` */

insert  into `media_cetak`(`id_media`,`id_kategori`,`nama_media`,`stok`,`harga`) values (1,2,'Vinyl Transparant',100,65000),(2,2,'Vinyl Standard',200,60000),(3,2,'VInyl Super Highress',100,75000),(6,4,'Vinyil Matte',1000,13000),(7,4,'Cromo',100,7000),(8,4,'Vinyl Glossy',1000,15000),(9,2,'Albatros',100,80000),(10,2,'Lustre',90,90000),(11,4,'Vinyl Transparant',100,15000),(12,3,'Art Carton 260',700,8000),(13,3,'Art Paper 150gr',700,7000),(14,3,'HVS 100gr Color',120,6000);

/*Table structure for table `operator_desain` */

DROP TABLE IF EXISTS `operator_desain`;

CREATE TABLE `operator_desain` (
  `id_opd` int(11) NOT NULL AUTO_INCREMENT,
  `nama_opd` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email_opd` varchar(30) NOT NULL,
  `telpon_opd` varchar(13) NOT NULL,
  PRIMARY KEY (`id_opd`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `operator_desain` */

insert  into `operator_desain`(`id_opd`,`nama_opd`,`username`,`password`,`email_opd`,`telpon_opd`) values (1,'Rizki Ubaidillah','rizki84','rizki123','rizkiubayd@gmail.com','083812184944'),(2,'Chadwick Boseman','tchalla','123','tchalla@gmail.com','083812184946');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `telpon_pelanggan` varchar(13) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `email_pelanggan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id_pelanggan`,`telpon_pelanggan`,`nama_pelanggan`,`email_pelanggan`) values (1,'083812184944','Rizki Ubaidillah','rizkiubayd@gmail.com'),(2,'0838121849455','Adelia Astari','adeliaastari98@gmail.com'),(3,'083812184940','Alexander Pierce','alexander@gmail.com');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `keterangan` text,
  `status_transaksi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`tanggal`,`id_pelanggan`,`id_media`,`harga`,`qty`,`subtotal`,`keterangan`,`status_transaksi`) values ('INV-200927034546','2020-09-27',2,2,60000,3,180000,'tes','OPEN'),('INV-200927035146','2020-09-27',2,1,65000,32,2080000,'test','OPEN');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
