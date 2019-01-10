/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.31-MariaDB : Database - fortune_pharma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fortune_pharma` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fortune_pharma`;

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `image1` varchar(250) DEFAULT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `parahraph` longtext,
  `paragraph1` longtext,
  `paragraph2` longtext,
  `paragraph3` longtext,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus` */

insert  into `aboutus`(`a_id`,`image1`,`image2`,`image3`,`parahraph`,`paragraph1`,`paragraph2`,`paragraph3`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (3,'0.477375001540811829r4.jpg','0.479709001540811829r6.jpg','0.476044001540811829r3.jpg','fghfjhg','ghgfhf','hgjkhk','jhkhjkl',1,'2019-01-09 10:15:32','2019-01-09 10:15:32',2,1);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT '1',
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `paddress` varchar(250) DEFAULT NULL,
  `address` text,
  `gender` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `notes` text,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`role`,`name`,`email`,`mobile`,`dob`,`paddress`,`address`,`gender`,`password`,`org_password`,`profile_pic`,`notes`,`status`,`created_at`,`updated_at`) values (2,1,'reddem vasudevareddy','admin@gmail.com','8500050944','','kadapa','kadapa','Male','fcea920f7412b5da7be0cf42b8c93759','1234567','1547008743.jpg',NULL,1,NULL,'2018-10-29 15:36:13');

/*Table structure for table `contactform` */

DROP TABLE IF EXISTS `contactform`;

CREATE TABLE `contactform` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `forturn_lab` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `phone_no` varchar(250) DEFAULT NULL,
  `address` text,
  `twitter_link` text,
  `facebook_link` text,
  `instagram_link` text,
  `google_plus` text,
  `linkedIn_link` text,
  `status` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contactform` */

insert  into `contactform`(`c_id`,`contact_email`,`email`,`forturn_lab`,`phone`,`phone_number`,`phone_no`,`address`,`twitter_link`,`facebook_link`,`instagram_link`,`google_plus`,`linkedIn_link`,`status`,`updated_at`,`homepage_preview`) values (2,'kkk@gmail.com','admin@gmail.com','fortunepharmalabs.com','9067858899','4052654552','4052654552','fdhgfjh','https://www.twitter.com','https://www.facebook.com','https://www.instagram.com','https://www.google.com','https://www.linkedin.com',1,'2019-01-09 10:04:43',1);

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `subject` text,
  `email_id` varchar(250) DEFAULT NULL,
  `message` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `text` text,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`g_id`,`image`,`text`,`org_image`,`status`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (30,'0.1439690015469390231546925133.jpg',NULL,'1546925133.jpg',1,'2019-01-08 14:47:03','2019-01-08 14:47:03',2,1),(31,'0.1973790015469390231546925172.jpg',NULL,'1546925172.jpg',1,'2019-01-08 14:47:03','2019-01-08 14:47:03',2,1);

/*Table structure for table `instruments` */

DROP TABLE IF EXISTS `instruments`;

CREATE TABLE `instruments` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `paragraph` longtext,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `instruments` */

insert  into `instruments`(`i_id`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (3,'fghvh','gjhj',1,'2019-01-08 10:26:26',NULL,2,1);

/*Table structure for table `instruments_data` */

DROP TABLE IF EXISTS `instruments_data`;

CREATE TABLE `instruments_data` (
  `i_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(12) DEFAULT NULL,
  `description` longtext,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `instruments_data` */

insert  into `instruments_data`(`i_d_id`,`i_id`,`description`,`status`,`created_at`,`updated_at`,`created_by`) values (7,3,'hgjkhk',1,'2019-01-08 10:26:26','2019-01-08 10:26:26',2),(8,3,'hjgh',1,'2019-01-08 10:26:26','2019-01-08 10:26:26',2),(9,3,'hjhg',1,'2019-01-08 10:26:26','2019-01-08 10:26:26',2);

/*Table structure for table `logo` */

DROP TABLE IF EXISTS `logo`;

CREATE TABLE `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `keywords` text,
  `description` longtext,
  `org_image` varchar(250) DEFAULT NULL,
  `favicon` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `title` text,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `logo` */

insert  into `logo`(`id`,`image`,`keywords`,`description`,`org_image`,`favicon`,`status`,`title`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (2,'1547011073.png','fortune pharama','Fortune Pharma Labs is a leading testing laboratory approved By DCA.we perform wide range of analytical laboratory tests across pharmaceutical industries.we are an organization committed to provide affordable and providing high quality services. Our state of the art analytical laboratory situated in Hyderabad,India. We are the team with more than 13 years of industrial experience and have a strong analytical capability in Analytical Method Development and Validation , Extractable &Leachalestudies , Genotoxicimpuirities studies etc.','1546840232.png','21547011073.png',1,'fortune pharama','2019-01-09 10:47:52','2019-01-09 10:47:52',2,1),(3,'1547011099.png','fortune pharama','Fortune Pharma Labs is a leading testing laboratory approved By DCA.we perform wide range of analytical laboratory tests across pharmaceutical industries.we are an organization committed to provide affordable and providing high quality services. Our state of the art analytical laboratory situated in Hyderabad,India. We are the team with more than 13 years of industrial experience and have a strong analytical capability in Analytical Method Development and Validation , Extractable &Leachalestudies , Genotoxicimpuirities studies etc.','1546840232.png','21547011099.png',1,'Fortune Pharma Labs','2019-01-09 10:48:18','2019-01-09 10:48:18',2,1),(4,'1547011166.png','fortune pharama','Fortune Pharma Labs is a leading testing laboratory approved By DCA.we perform wide range of analytical laboratory tests across pharmaceutical industries.we are an organization committed to provide affordable and providing high quality services. Our state of the art analytical laboratory situated in Hyderabad,India. We are the team with more than 13 years of industrial experience and have a strong analytical capability in Analytical Method Development and Validation , Extractable &Leachalestudies , Genotoxicimpuirities studies etc.','1546840232.png','21547011166.png',1,'Fortune Pharma Labs','2019-01-09 10:49:26','2019-01-09 10:49:26',2,1),(5,'1547011692.png','fortune pharama','Fortune Pharma Labs is a leading testing laboratory approved By DCA.we perform wide range of analytical laboratory tests across pharmaceutical industries.we are an organization committed to provide affordable and providing high quality services. Our state of the art analytical laboratory situated in Hyderabad,India. We are the team with more than 13 years of industrial experience and have a strong analytical capability in Analytical Method Development and Validation , Extractable &Leachalestudies , Genotoxicimpuirities studies etc.','1542261777.png','21547011692.png',1,'Fortune Pharma Labs','2019-01-09 10:58:12','2019-01-09 10:58:12',2,1);

/*Table structure for table `service_name_details` */

DROP TABLE IF EXISTS `service_name_details`;

CREATE TABLE `service_name_details` (
  `s_b_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_n_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `service_name` longtext,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_b_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `service_name_details` */

insert  into `service_name_details`(`s_b_d_id`,`s_n_id`,`s_id`,`service_name`,`status`,`created_at`,`created_by`) values (16,4,2,'hjh',1,'2019-01-08 10:26:16',2),(17,5,2,'jklj',1,'2019-01-08 10:26:16',2),(18,5,2,'kl',1,'2019-01-08 10:26:16',2),(19,6,2,'k;l',1,'2019-01-08 10:26:16',2),(20,6,2,'jklj',1,'2019-01-08 10:26:16',2);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `paragraph` longtext,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`s_id`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (2,'Services','tujyhk',1,'2019-01-08 10:26:15',NULL,2,1);

/*Table structure for table `servies_name` */

DROP TABLE IF EXISTS `servies_name`;

CREATE TABLE `servies_name` (
  `s_n_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) DEFAULT NULL,
  `title` text,
  `paragraph` longtext,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `servies_name` */

insert  into `servies_name`(`s_n_id`,`s_id`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'s1','gbjhngj',1,'2019-01-07 11:07:31',NULL,2),(2,1,'s2','ghjghjkgh',1,'2019-01-07 11:07:31',NULL,2),(3,1,'s3','fgjfjgfh',1,'2019-01-07 11:07:31',NULL,2),(4,2,'hjkk','hj',1,'2019-01-08 10:26:16',NULL,2),(5,2,'jkljl','jkjl',1,'2019-01-08 10:26:16',NULL,2),(6,2,'kj;','k;l',1,'2019-01-08 10:26:16',NULL,2);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`s_id`,`text`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (38,'fhg','0.2942730015469233350.479709001540811829r6.jpg','0.479709001540811829r6.jpg',1,'2019-01-08 10:25:35','2019-01-08 10:25:35',2,1),(39,'dfgh','0.3308950015469233350.476044001540811829r3.jpg','0.476044001540811829r3.jpg',1,'2019-01-08 10:25:35','2019-01-08 10:25:35',2,1),(40,'dfgh','0.3560660015469233350.457717001540548521app2.jpg','0.457717001540548521app2.jpg',1,'2019-01-08 10:25:35','2019-01-08 10:25:35',2,1),(41,'dfgh','0.4310320015469233350.496099001540548521app3.jpg','0.496099001540548521app3.jpg',1,'2019-01-08 10:25:35','2019-01-08 10:25:35',2,1);

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `paragraph` longtext,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
