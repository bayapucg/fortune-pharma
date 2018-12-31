/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - mss
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mss` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mss`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` text,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `notes` text,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`name`,`email`,`phone`,`address`,`password`,`org_password`,`mobile`,`profile_pic`,`notes`,`status`,`created_at`,`updated_at`) values (1,'admin','admin@gmail.com','8500050944','kadapa','e10adc3949ba59abbe56e057f20f883e','123456','8500050944','1538633514.gif','vcvc',1,'2018-10-04 10:44:06','2018-10-04 11:53:40');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`name`,`phone`,`email_id`,`message`,`create_at`) values (1,'xcxzv','8500050944','khdfghsdfds@gmail.com',',nkjhfdjgdsf','2018-10-03 18:06:28'),(2,'xcxzv','8500050944','khdfghsdfds@gmail.com',',nkjhfdjgdsf','2018-10-03 18:06:43');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `description` text,
  `address` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `invoice_name` varchar(250) DEFAULT NULL,
  `payment_id` varchar(250) DEFAULT NULL,
  `payment_order_id` varchar(250) DEFAULT NULL,
  `payment_singnature` varchar(250) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`cust_name`,`email`,`mobile`,`description`,`address`,`amount`,`invoice_name`,`payment_id`,`payment_order_id`,`payment_singnature`,`payment_date`,`status`,`created_at`) values (1,'vasudevareddy','inventory@gmail.com',NULL,NULL,'fgsdfg','100',NULL,NULL,NULL,NULL,NULL,0,'0000-00-00 00:00:00'),(2,'vasudevareddy','vasudevareddy549@gmail.com','8500050944','donation','kadapa','100',NULL,NULL,NULL,NULL,NULL,0,'2018-10-03 19:05:15'),(3,'vasudevareddy','inventory@gmail.com','8500050944','donation','kadapa','100','vasudevareddy_3.pdf','pay_B5QixnudT0M0uH','order_B5QiRaTHokjTwD','a46c8489046b7360826e49345e6b68095859a0688960e9d6d2ebe9dfa82aef79','2018-10-04 10:17:18',1,'2018-10-04 10:12:14'),(4,'vasudevareddy','vasu@gmail.com','8500050944','test','kadapa','100','vasudevareddy_4.pdf','pay_B5QqOGeIICwEGi','order_B5QqFtb4d2tFjQ','a4b9e7965791a15bede62924dfd1f46363b755e4d3db46aabf3a2d7eec900a24','2018-10-04 10:19:52',1,'2018-10-04 10:19:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
