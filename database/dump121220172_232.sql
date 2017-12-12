/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - pinterin
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
  `admin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(200) DEFAULT NULL,
  `admin_password` char(32) DEFAULT NULL,
  `admin_full_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_user_name`,`admin_password`,`admin_full_name`) values 
(1,'hendrywiranto','b928448c2b0cb028d0f4be22dfe4de8d','Hendry Wiranto');

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `request_sold` int(11) DEFAULT NULL,
  `request_price` int(11) DEFAULT NULL,
  `request_book_name` varchar(200) DEFAULT NULL,
  `request_book_author` varchar(200) DEFAULT NULL,
  `request_book_year` int(11) DEFAULT NULL,
  `request_book_publisher` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`request_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `request` */

/*Table structure for table `selling` */

DROP TABLE IF EXISTS `selling`;

CREATE TABLE `selling` (
  `selling_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `selling_date` date DEFAULT NULL,
  `selling_sold` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `selling_book_name` varchar(200) DEFAULT NULL,
  `selling_book_author` varchar(200) DEFAULT NULL,
  `selling_book_year` int(11) DEFAULT NULL,
  `selling_book_publisher` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`selling_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `selling_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `selling` */

/*Table structure for table `shop_selling` */

DROP TABLE IF EXISTS `shop_selling`;

CREATE TABLE `shop_selling` (
  `shop_sell_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shop_sell_date` date DEFAULT NULL,
  `shop_sell_sold` int(11) DEFAULT NULL,
  `shop_sell_price` int(11) DEFAULT NULL,
  `shop_sell_book_name` varchar(200) DEFAULT NULL,
  `shop_sell_book_author` varchar(200) DEFAULT NULL,
  `shop_sell_book_year` int(11) DEFAULT NULL,
  `shop_sell_book_publisher` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`shop_sell_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `shop_selling` */

insert  into `shop_selling`(`shop_sell_id`,`shop_sell_date`,`shop_sell_sold`,`shop_sell_price`,`shop_sell_book_name`,`shop_sell_book_author`,`shop_sell_book_year`,`shop_sell_book_publisher`) values 
(1,'2017-12-12',1,292992,'aku','dia',2019,'mereka'),
(2,'2017-12-12',1,3,'kedua','aku',1996,'yoyo');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `user_password` char(32) DEFAULT NULL,
  `user_full_name` varchar(200) DEFAULT NULL,
  `user_alamat` varchar(200) DEFAULT NULL,
  `user_phone` char(12) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`user_password`,`user_full_name`,`user_alamat`,`user_phone`) values 
(1,'hendry','b928448c2b0cb028d0f4be22dfe4de8d','Hendry Wiranto','Sby','085334449875'),
(2,'hendro','5925d94864fddd49a96dd9e82a45204c','hendrooo','sbywew','283'),
(3,'hendru','b928448c2b0cb028d0f4be22dfe4de8d','hendruuu','83838','828282');

/* Procedure structure for procedure `sp_login` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login`(IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(50))
    NO SQL
BEGIN 

IF (SELECT 1 FROM user WHERE user_name = p_username AND `user_password`= p_password)
THEN
    SELECT user_full_name AS message, 1 AS flag FROM user WHERE user_name = p_username AND user_password = p_password;
ELSE 
	SELECT 'username atau password yang anda masukkan salah' AS message, 0 AS flag;
END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_login_admin` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_login_admin` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login_admin`(IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(50))
    NO SQL
BEGIN 

IF (SELECT 1 FROM admin WHERE admin_user_name = p_username AND `admin_password`= p_password)
THEN
    SELECT admin_full_name AS message, 1 AS flag FROM admin WHERE admin_user_name = p_username AND admin_password = p_password;
ELSE 
	SELECT 'username atau password yang anda masukkan salah' AS message, 0 AS flag;
END IF;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
