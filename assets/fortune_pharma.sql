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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus` */

insert  into `aboutus`(`a_id`,`image1`,`image2`,`image3`,`parahraph`,`paragraph1`,`paragraph2`,`paragraph3`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (1,'0.04251100 1546855603','0.00545800 1545988674','0.00693000 1545988674','Fortune Pharma Labs is a leading testing laboratory approved By DCA.we perform wide range of analytical laboratory tests across pharmaceutical industries.we are an organization committed to provide affordable and providing high quality services. Our state of the art analytical laboratory situated in Hyderabad,India. We are the team with more than 13 years of industrial experience and have a strong analytical capability in Analytical Method Development and Validation , Extractable & Leachale studies , Genotoxic impuirities studies etc.','Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.','Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ','Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.',1,'2019-01-07 15:41:32','2019-01-07 15:41:32',2,1);

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

insert  into `admin`(`id`,`role`,`name`,`email`,`mobile`,`dob`,`paddress`,`address`,`gender`,`password`,`org_password`,`profile_pic`,`notes`,`status`,`created_at`,`updated_at`) values (2,1,'reddem vasudevareddy','admin@gmail.com','8500050944','','kadapa','kadapa','Male','fcea920f7412b5da7be0cf42b8c93759','1234567','1546853280.jpg',NULL,1,NULL,'2018-10-29 15:36:13');

/*Table structure for table `contactform` */

DROP TABLE IF EXISTS `contactform`;

CREATE TABLE `contactform` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `phone_no` varchar(250) DEFAULT NULL,
  `address` text,
  `twitter_link` text,
  `facebook_link` text,
  `instagram_link` text,
  `google_plus` text,
  `linkedIn_link` text,
  `updated_at` datetime DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contactform` */

insert  into `contactform`(`c_id`,`contact_email`,`email`,`phone`,`phone_number`,`phone_no`,`address`,`twitter_link`,`facebook_link`,`instagram_link`,`google_plus`,`linkedIn_link`,`updated_at`,`homepage_preview`) values (1,'info@fortunepharmalabs.com','info@fortunepharmalabs.com','04042417000','8919286318','9182529063','Plot no.118/B,Flat No.401, Sri Sai Nagar Colony, Near Lucid Diagnostics, Near JNTU Metro, Hyderabad-500072.','https://www.twitter.com','https://www.facebook.com','https://www.instagram.com','https://www.google.com','https://www.linkedin.com','2019-01-07 16:21:32',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`c_id`,`name`,`subject`,`email_id`,`message`,`create_at`) values (1,'vasu','hj','admin@gmail.com','mjjj','2019-01-07 14:05:26'),(2,'test1','fgfg','vasu@gmail.com','fgf','2019-01-07 14:05:50'),(3,'kali','hj','inventory@gmail.com','gh','2019-01-07 14:06:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`g_id`,`image`,`text`,`org_image`,`status`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (26,'0.1464430015465071871544598184.jpg','fghgfj','1544598184.jpg',1,'2019-01-03 14:49:47','2019-01-03 14:51:19',2,1),(27,'0.1723930015465071871544509451.jpg','tghfg','1544509451.jpg',1,'2019-01-03 14:49:47','2019-01-03 14:51:20',2,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `instruments` */

insert  into `instruments`(`i_id`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (1,'Instruments','Sitar is of the most popular music instruments of North India. The Sitar has a long neck with twenty metal frets and six to seven main cords. Below the frets of Sitar are thirteen sympathetic strings which are tuned to the notes of the Raga. A gourd, which acts as a resonator for the strings is at the lower end of the neck of the Sitar. The frets are moved up and down to adjust the notes. Some famous Sitar players are Ustad Vilayat Khan, Pt. Ravishankar, Ustad Imrat Khan, Ustad Abdul Halim Zaffar Khan, Ustad Rais Khan and Pt Debu Chowdhury.',2,'2019-01-04 14:48:34','2019-01-04 17:22:59',2,0),(2,'Instruments','fghjghkjk',1,'2019-01-04 17:23:31',NULL,2,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `instruments_data` */

insert  into `instruments_data`(`i_d_id`,`i_id`,`description`,`status`,`created_at`,`updated_at`,`created_by`) values (2,1,'Alto instruments: alto saxophone, french horn, english horn, viola, alto horn',1,'2019-01-04 14:48:34','2019-01-04 14:48:34',2),(3,1,'Baritone instruments: bassoon, baritone saxophone, bass clarinet, cello, baritone horn, euphonium',1,'2019-01-04 14:48:34','2019-01-04 14:48:34',2),(4,2,'ghjgk',1,'2019-01-04 17:23:31','2019-01-04 17:23:31',2),(5,2,'gfjhghj',1,'2019-01-04 17:23:31','2019-01-04 17:23:31',2),(6,2,'ghjghj',1,'2019-01-04 17:23:31','2019-01-04 17:23:31',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `logo` */

insert  into `logo`(`id`,`image`,`keywords`,`description`,`org_image`,`favicon`,`status`,`title`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (1,'1546840232.png','keyword','des','1545981296.png','21546840232.png',1,'Fortune Pharma Labs ','2019-01-07 11:20:32','2019-01-07 11:20:32',2,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `service_name_details` */

insert  into `service_name_details`(`s_b_d_id`,`s_n_id`,`s_id`,`service_name`,`status`,`created_at`,`created_by`) values (1,1,1,'fghgfh',1,'2019-01-07 11:07:31',2),(2,1,1,'ghgh',1,'2019-01-07 11:07:31',2),(3,1,1,'fgjhfgj',1,'2019-01-07 11:07:31',2),(4,1,1,'gh',1,'2019-01-07 11:07:31',2),(5,1,1,'ghgf',1,'2019-01-07 11:07:31',2),(6,1,1,'ghjgf',1,'2019-01-07 11:07:31',2),(7,1,1,'hgj',1,'2019-01-07 11:07:31',2),(8,2,1,'ghgh',1,'2019-01-07 11:07:31',2),(9,2,1,'gfh',1,'2019-01-07 11:07:31',2),(10,2,1,'gh',1,'2019-01-07 11:07:31',2),(11,2,1,'gh',1,'2019-01-07 11:07:31',2),(14,3,1,'gh',1,'2019-01-07 11:07:31',2),(15,3,1,'gh',1,'2019-01-07 11:07:31',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`s_id`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (1,'Services','sdfdshgfjh',1,'2019-01-07 11:07:31',NULL,2,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `servies_name` */

insert  into `servies_name`(`s_n_id`,`s_id`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'s1','gbjhngj',1,'2019-01-07 11:07:31',NULL,2),(2,1,'s2','ghjghjkgh',1,'2019-01-07 11:07:31',NULL,2),(3,1,'s3','fgjfjgfh',1,'2019-01-07 11:07:31',NULL,2);

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`s_id`,`text`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (36,'          ','0.766627001545988230IMG_7844.jpg','IMG_7844.jpg',1,'2018-12-28 14:40:30','2018-12-28 14:40:30',2,1),(37,'            ','0.829682001545988230IMG_7836.jpg','IMG_7836.jpg',1,'2018-12-28 14:40:30','2018-12-28 14:40:30',2,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`t_id`,`name`,`designation`,`paragraph`,`image`,`org_image`,`status`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (7,'Dr. Ghazal Srinivas (Kesiraju Srinivas)','Singer','Ghazal Srinivas created Three Guinness World Records consecutively in the years 2008, 2009 and\r\n2010. He is the only singer who sang 125 songs in 125 Global languages which have become two\r\nGuinness world Records\r\nApart from his Ghazal singing in the year 1999, Srinivas played a lead role in the telugu film\r\n“Vichitram” directed by Sri Jandhyala, following which , he has also performed a Special role in the\r\nsuper Hit Telugu film ” A Film By Arrvind” directed by Sekhar Suri.','0.827864001542262200Dr.GhazalSrinivas.jpg','Dr. Ghazal Srinivas.jpg',1,'2018-11-15 11:40:00','2018-11-15 11:40:00',2,1),(9,'Rakeshrenu','Author','Born on August 17 on the day of ‘Nag Panchami’, Rakeshrenu is a MBA, M.Com. and a PG Diploma\r\nin Journalism.\r\nAs an author, poet and thinker his published work includes the books such as ‘Rojnamcha’ (Poetry\r\nAnthology), ‘Samkaleen Hindi Kahaniyaan’, ‘Samkaleen Maithili Sahitya’ and ’Yadon Ke Jharokhe’.\r\nHis articles, poems, reviews are being published various National level news papers &amp; magazines.\r\nRakeshrenu has worked in All India Radio and Doordarshan in various administrative positions.\r\nPresently he is Chief Editor to the monthly literary magazine ‘AajKal’ and Dy Director inn\r\nPublication Division, Ministry of Information &amp; Broadcasting, Government of India.','0.960872001542262627Rakeshrenu.jpg','Rakeshrenu.jpg',1,'2018-11-15 11:47:07','2018-11-15 11:47:07',2,1),(10,'Shah Alam','Traveller Journalist','Post Graduated from Dr RML Avadh University, Faizabad. Done higher education from Jamia\r\nCentral University, New Delhi.\r\nSince one &amp; half decades Shah Alam is working as Traveller Journalist. Having keen interest in\r\nIndian revolutionary movements Shah founded ‘Awam Ka Cinema’ in 2006. Through this he get\r\ninvolved &amp; informed the new generations about the legacy of revolutionaries.\r\nShah Alam is also known for his long 2800 Kms journey by cycle for the research on ‘Matrivedi’. He\r\nhas also produced-directed many documentary films simply by traveling half a dozen long journey by\r\nfoot.\r\nPresently Shah Alam is busy in crafting ‘Chambal Archives’ and ‘Chambal People’s parliament’ in its\r\nfull volume.','0.759490001542262760ShahAlam.png','Shah Alam.png',1,'2018-11-15 11:49:20','2018-11-15 11:49:20',2,1),(11,'Dr. Raajeev Shrivaastav','Writer, Anchor','A Top notch Professional involve in to Publication, Broadcasting &amp; Film Production. Visiting Faculty\r\n(HR, Literature, Media, Films &amp; Music). Feature writer, Anchor for different fields viz Media : Print\r\n&amp; Electronics, Entertainment, events &amp; vice versa.\r\nBorn on September 03rd on the day of ‘Shri Ganesh Chaturthi’ Dr Raajeev Shrivaastav do have many\r\nbooks in his credit including biography of legendary singer Mukesh and music director Kalyanji-\r\nAnanndji. Also film on the work &amp; life of legendary playback singer Shamshaad Begum, singer\r\nMukesh, legendary Jay Prakash Narayan and a film on river Ganga based on pollution issue.\r\nHis appearance on Radio &amp; TV as Guest Speaker / Expert on various subjects including Films, Music,\r\nLiterature and Social issues is remarkable.','0.429185001542262862Dr.RaajeevShrivaastav.jpg','Dr. Raajeev Shrivaastav.jpg',1,'2018-11-15 11:51:02','2018-11-15 11:51:02',2,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
