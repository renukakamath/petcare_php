/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - pet_care
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pet_care` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pet_care`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `reason_for_booking` varchar(30) DEFAULT NULL,
  `booking_status` varchar(30) DEFAULT NULL,
  `fee_amount` varchar(30) DEFAULT NULL,
  `payment_status` varchar(30) DEFAULT NULL,
  `booking_date` varchar(30) DEFAULT NULL,
  `available_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

insert  into `booking`(`booking_id`,`user_id`,`doctor_id`,`reason_for_booking`,`booking_status`,`fee_amount`,`payment_status`,`booking_date`,`available_date`) values 
(1,1,2,'asdfghj','delivered','1000','paid','2022-07-11','2022-07-15'),
(2,1,2,'asdfghj','available','1000','paid','2022-07-12','2022-07-15'),
(3,1,2,'asdfghj','pending','1000','pending','2022-07-12','2022-07-23');

/*Table structure for table `diseases` */

DROP TABLE IF EXISTS `diseases`;

CREATE TABLE `diseases` (
  `disease_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `symptoms` varchar(30) DEFAULT NULL,
  `medicines` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`disease_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `diseases` */

insert  into `diseases`(`disease_id`,`name`,`description`,`symptoms`,`medicines`) values 
(3,'67o','have a nice day','uityuio','xcvb'),
(5,'qwertyuio','stop ','hj','wertyuiopsdfghjk');

/*Table structure for table `doctors` */

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `doctors` */

insert  into `doctors`(`doctor_id`,`login_id`,`first_name`,`last_name`,`qualification`,`phone`,`email`) values 
(2,5,'doctor','qwerty','asdfgh','9495736748','doctor@gmail.com'),
(5,10,'renuka','qwerty','qwertyui','5432545688','renukakamath2@gmail.com'),
(4,9,'doctor2','doctor2','qwertyui','5432545356','doctor@gmail.com');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `reply` varchar(30) DEFAULT NULL,
  `feedback_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`user_id`,`description`,`reply`,`feedback_date`) values 
(1,1,'stop ','bla','2022-07-11'),
(2,1,'stop ','podo','2022-07-13'),
(3,1,'no','ok','2022-07-13'),
(4,1,'stop ','pending','2022-07-14');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'admin','admin','admin'),
(2,'user','user','user'),
(3,'shop','shop','shop'),
(4,'doctor','doctor','doctor'),
(5,'doctor','doctor','doctor'),
(6,'renuka','123456','doctor'),
(7,'user1','user1','user'),
(8,'shop2','shop2','shop'),
(9,'doctor2','doctor2','doctor'),
(10,'renuka','renuka','doctor');

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `total` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `order` */

insert  into `order`(`order_id`,`product_id`,`quantity`,`total`,`date`,`status`) values 
(1,5,'2kg','500','2022-07-13','accept'),
(2,5,'2kg','500','2022-07-13','accept'),
(3,5,'2kg','500','2022-07-13','pending'),
(4,4,'4','500','2022-07-13','pending'),
(5,5,'2kg','500','2022-07-14','pending'),
(6,4,'dsfgsfgs','500','2022-07-14','pending'),
(7,4,'2kg','500','2022-07-14','pending'),
(8,5,'2kg','500','2022-07-14','pending');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`booking_id`,`amount`,`date`,`type`) values 
(1,2,'1000','2022-07-12','doctor'),
(2,1,'500','2022-07-13','order'),
(3,1,'500','2022-07-13','order'),
(4,1,'500','2022-07-13','order'),
(5,1,'500','2022-07-13','order'),
(6,1,'500','2022-07-13','order'),
(7,4,'500','2022-07-13','order'),
(8,2,'500','2022-07-13','order'),
(9,2,'500','2022-07-13','order'),
(10,2,'500','2022-07-13','order'),
(11,3,'500','2022-07-13','order'),
(12,1,'','2022-07-13','order'),
(13,2,'','2022-07-13','order'),
(14,1,'500','2022-07-13','order'),
(15,4,'500','2022-07-13','order'),
(16,2,'1000','2022-07-13','doctor'),
(17,2,'1000','2022-07-13','doctor'),
(18,2,'1000','2022-07-13','doctor'),
(19,2,'1000','2022-07-14','doctor'),
(20,2,'1000','2022-07-14','doctor');

/*Table structure for table `pets` */

DROP TABLE IF EXISTS `pets`;

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `breed` varchar(30) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `other_details` varchar(30) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`pet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pets` */

insert  into `pets`(`pet_id`,`user_id`,`name`,`type`,`breed`,`age`,`other_details`,`image`) values 
(6,1,'67o','1qweghj','tyuio','12','qwertyui','image/image_62cbe9fb298a9.jfif'),
(7,1,'qwertyuio','1qweghj','tyuio','20','qwertyui','image/image_62cbea1872298.jpg');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) DEFAULT NULL,
  `product` varchar(30) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`product_id`,`shop_id`,`product`,`quantity`,`amount`) values 
(5,1,'qwertyu','2kg','500'),
(4,1,'qwertyu','5kg','500');

/*Table structure for table `reporteddiseases` */

DROP TABLE IF EXISTS `reporteddiseases`;

CREATE TABLE `reporteddiseases` (
  `reported_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL,
  `detailsofillness` varchar(30) DEFAULT NULL,
  `remediesbydoctor` varchar(30) DEFAULT NULL,
  `reported_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`reported_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `reporteddiseases` */

insert  into `reporteddiseases`(`reported_id`,`user_id`,`pet_id`,`detailsofillness`,`remediesbydoctor`,`reported_date`) values 
(1,1,7,'qwertyui','hello','asdfgh'),
(2,1,6,'hai','hai','how'),
(3,1,6,'qwertyui','pending','asdfgh'),
(4,1,6,'hai','pending','2022-07-16');

/*Table structure for table `shops` */

DROP TABLE IF EXISTS `shops`;

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `shopname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `shops` */

insert  into `shops`(`shop_id`,`login_id`,`shopname`,`place`,`phone`,`email`) values 
(1,3,'shop','karanakodam','9495736748','shop@gimal.com'),
(2,8,'shop2','ernakulam','9495736748','shop@gimal.com');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `latituide` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`login_id`,`firstname`,`lastname`,`latituide`,`longitude`,`place`,`phone`,`email`) values 
(1,2,'user','ddggd','1234567890','123456789','ernakulam','9495736748','user@gmail.com'),
(2,7,'user1','userqwerty','123','123456','karanakodam','9495736748','user1@gamil.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
