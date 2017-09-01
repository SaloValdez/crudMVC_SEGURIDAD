/*
SQLyog Ultimate v9.63 
MySQL - 5.5.5-10.1.24-MariaDB : Database - crud_php
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud_php` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crud_php`;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `intentos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`usuario`,`password`,`email`,`intentos`) values (64,'soso','$2a$07$asxx54ahjppf45sd87a5aurQQwBNsdNQM9tWRjrSBKQWK2BRNscYy','salovaldez.net@gmail.com',NULL),(65,'soso','$2a$07$asxx54ahjppf45sd87a5aubLVtn/syQUkDtlo4.wMaxvDkKmfAWRm','salovaldez.net@gmail.com',NULL),(66,'12345','$2a$07$asxx54ahjppf45sd87a5aubLVtn/syQUkDtlo4.wMaxvDkKmfAWRm','salovaldez.net@gmail.com',NULL),(69,'grinia','$2a$07$asxx54ahjppf45sd87a5auHndGJE.ZWHoIUWFO4kj0t5ilSsvMqiG','salovaldez.net@gmail.com',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
