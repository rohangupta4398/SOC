# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.38)
# Database: auth
# Generation Time: 2018-06-19 11:35:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL DEFAULT '',
  `Password` varchar(200) NOT NULL DEFAULT '',
  `LicenseId` varchar(20) NOT NULL DEFAULT '',
  `Specialist` varchar(20) NOT NULL DEFAULT '',
  `Image` varchar(200) NOT NULL DEFAULT '',
  `Gender` varchar(1) NOT NULL DEFAULT '',
  `ContactNo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `Name`, `Password`, `LicenseId`, `Specialist`, `Image`, `Gender`, `ContactNo`)
VALUES
	(1,'dewanshsingh4@gmail.com','$2y$10$fEDpFogrppy29E1TQgNamevuONteGZOyxMXWjPWyQTwMzyAEDQva6','abc170241','ENT','','M',2147483647),
	(2,'abhishek','$2y$10$JyEoxHdzqmGfylOXYfJ4lORtlgxFTu/YggOmWji1X/B45vOpnfUO.','420','sexologist','','M',2147483647),
	(4,'lalala','$2y$10$/llMPQC5VM.5jpdkvG7Nbua6LhqdOHu5HjVz2/eK1P4HjMBSEUqb.','122333','Breast Augmentation','','M',2147483647),
	(5,'1','$2y$10$uWfbH4xuFfvpMi.uhWxwUuVfLYGmjmtB/SBhaCmJ1vnktp5naC0eW','1','1','','1',1),
	(6,'sarthak','$2y$10$0L2upRG3e4xPcVr.2x6Dg.asK/v/TTKBGfRpybkWtY0qSUgHFwawe','abc170635','Breast Augmentation','','M',2147483647),
	(7,'6','$2y$10$7yl1JDs2BjbEMtIvHx2sjOXXWW0qBN75iHNwp6ogyQdpndnLgaP1y','6','6','','6',6),
	(8,'2','$2y$10$2VQ.cmVsFrKM7ySjjJ5htu.xgxorXj4H.m5PcwK.LUPyXd05ydNqe','2','2','','2',2);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
