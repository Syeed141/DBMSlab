/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - meal_69
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`meal_69` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `meal_69`;

/*Table structure for table `meal_date` */

DROP TABLE IF EXISTS `meal_date`;

CREATE TABLE `meal_date` (
  `meal_id` int(11) NOT NULL,
  `m_date` date NOT NULL,
  PRIMARY KEY (`meal_id`),
  CONSTRAINT `meal_date_ibfk_1` FOREIGN KEY (`meal_id`) REFERENCES `meal_planner` (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `meal_date` */

insert  into `meal_date`(`meal_id`,`m_date`) values 
(1,'2023-10-23');

/*Table structure for table `meal_menu` */

DROP TABLE IF EXISTS `meal_menu`;

CREATE TABLE `meal_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day_name` varchar(20) NOT NULL,
  `breakfast` varchar(400) DEFAULT NULL,
  `lunch` varchar(400) DEFAULT NULL,
  `dinner` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `meal_menu` */

insert  into `meal_menu`(`id`,`day_name`,`breakfast`,`lunch`,`dinner`) values 
(22,'Saturday','Luchi with Alur Dom','Mutton Biryani with Raita','Hilsa Fish Curry with Rice'),
(23,'Sunday','Paratha with Aloo Bharta','Chingri Malai Curry with Rice','Bhapa Ilish with Steamed Rice'),
(24,'Monday','Khichuri with Fried Hilsha','Mutton Rezala with Polao','Chitol Maacher Muitha with Rice'),
(25,'Tuesday','Pitha with Ghee and Jaggery','Chicken Korma with Roti','Bhapa Pui Shaak with Rice'),
(26,'Wednesday','Sandesh and Rasgulla','Kosha Mangsho with Luchi','Begun Bhaja with Steamed Rice'),
(27,'Thursday','aaaa','bbbb','ccccc'),
(28,'Friday','Mughlai Paratha with Keema','Chingri Bhapa with Rice','Bhuna Khichuri with Mutton Rezala');

/*Table structure for table `meal_planner` */

DROP TABLE IF EXISTS `meal_planner`;

CREATE TABLE `meal_planner` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `breakfast` tinyint(1) NOT NULL,
  `lunch` tinyint(1) NOT NULL,
  `dinner` tinyint(1) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `meal_planner` */

insert  into `meal_planner`(`mid`,`breakfast`,`lunch`,`dinner`) values 
(1,1,0,1);

/*Table structure for table `meal_planner2` */

DROP TABLE IF EXISTS `meal_planner2`;

CREATE TABLE `meal_planner2` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `lunch` tinyint(1) NOT NULL,
  `dinner` tinyint(1) NOT NULL,
  `meal_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  KEY `meal_id` (`meal_id`),
  CONSTRAINT `meal_planner2_ibfk_1` FOREIGN KEY (`meal_id`) REFERENCES `meal_date` (`meal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `meal_planner2` */

insert  into `meal_planner2`(`s_id`,`s_name`,`breakfast`,`lunch`,`dinner`,`meal_id`) values 
(5,'sakib',1,1,1,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
