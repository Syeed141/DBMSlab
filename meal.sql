/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - meal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`meal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `meal`;

/*Table structure for table `meal_plan` */

DROP TABLE IF EXISTS `meal_plan`;

CREATE TABLE `meal_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(11) DEFAULT NULL,
  `breakfast` tinyint(1) DEFAULT NULL,
  `lunch` tinyint(1) DEFAULT NULL,
  `dinner` tinyint(1) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `meal_plan` */

insert  into `meal_plan`(`id`,`day`,`breakfast`,`lunch`,`dinner`,`s_id`) values 
(218,1,1,1,1,NULL),
(219,2,1,1,0,NULL),
(220,3,0,0,0,NULL),
(221,4,0,0,0,NULL),
(222,5,0,0,0,NULL),
(223,6,0,0,0,NULL),
(224,7,0,0,0,NULL),
(225,8,0,0,0,NULL),
(226,9,0,0,0,NULL),
(227,10,0,0,0,NULL),
(228,11,0,0,0,NULL),
(229,12,0,0,0,NULL),
(230,13,0,0,0,NULL),
(231,14,0,0,0,NULL),
(232,15,0,0,0,NULL),
(233,16,0,0,0,NULL),
(234,17,0,0,0,NULL),
(235,18,0,0,0,NULL),
(236,19,0,0,0,NULL),
(237,20,0,0,0,NULL),
(238,21,0,0,0,NULL),
(239,22,0,0,0,NULL),
(240,23,0,0,0,NULL),
(241,24,0,0,0,NULL),
(242,25,0,0,0,NULL),
(243,26,0,0,0,NULL),
(244,27,0,0,0,NULL),
(245,28,0,0,0,NULL),
(246,29,0,0,0,NULL),
(247,30,0,0,0,NULL),
(248,31,0,0,0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
