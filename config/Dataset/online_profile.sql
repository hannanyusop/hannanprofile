-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for online_profile
CREATE DATABASE IF NOT EXISTS `online_profile` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `online_profile`;

-- Dumping structure for table online_profile.login_log
CREATE TABLE IF NOT EXISTS `login_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT NULL,
  `ipaddress` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table online_profile.login_log: ~2 rows (approximately)
/*!40000 ALTER TABLE `login_log` DISABLE KEYS */;
INSERT INTO `login_log` (`id`, `username`, `datetime`, `ipaddress`, `status`) VALUES
	(3, 'hannanyusop', '2017-08-03 00:00:00', '', NULL),
	(4, 'hannanyusop@lynk.my', '2017-08-03 00:04:00', '', NULL);
/*!40000 ALTER TABLE `login_log` ENABLE KEYS */;

-- Dumping structure for table online_profile.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT 0,
  `profile_photo` longtext DEFAULT '0',
  `cover_photo` longtext DEFAULT '0',
  `position` varchar(255) DEFAULT '0',
  `experience` varchar(255) DEFAULT '0',
  `total_project` int(10) unsigned zerofill DEFAULT 0000000000,
  `profit` float unsigned zerofill DEFAULT 000000000000,
  `about_us` longtext DEFAULT '0',
  `current_project` varchar(255) DEFAULT '0',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table online_profile.profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Dumping structure for table online_profile.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `ic_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `last_ip` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='for outsider, by: Hannan Yusop';

-- Dumping data for table online_profile.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `ic_number`, `email`, `password`, `address`, `created`, `modified`, `last_login`, `last_ip`, `status`) VALUES
	(1, 'ABDUL HANNAN BIN YUSOP', 'hannan', '960516135589', 'nan_s96@yahoo.com', '1', 'Kampung pahlawan jalan pandaruan', '2017-08-02 15:22:57', '2017-08-02 15:23:30', '', '', '0'),
	(2, 'shaidatul farah', 'farah97', '970515135589', 'hannanyusop@lynk.my', '1', 'kamp', '2017-08-02 17:01:49', '2017-08-02 17:01:49', '', '', '1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
