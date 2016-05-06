-- MySQL dump 10.13  Distrib 5.7.10, for osx10.11 (x86_64)
--
-- Host: localhost    Database: ptf
-- ------------------------------------------------------
-- Server version	5.7.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicant` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `experience` varchar(3) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `exp_details` varchar(2000) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicant`
--

LOCK TABLES `applicant` WRITE;
/*!40000 ALTER TABLE `applicant` DISABLE KEYS */;
INSERT INTO `applicant` VALUES (1,'herp',20,'yes','0123456789','herp@email.com','hsadsadhasas',15,NULL),(2,'harper',18,'no','0123456789','harper@yahoo.com','',3,NULL),(3,'herp',15,'no','0123456789','herp@email.com','',4,NULL),(4,'herp',18,'yes','0123456789','herp@email.com','herpderp',1,'NOT ACCEPTED'),(5,'derp',15,'no','0123456789','farid11@gmail.com','',17,'ACCEPTED'),(6,'abu',20,'yes','0123456789','abu@yahoo.com','none',17,'NOT ACCEPTED'),(7,'John Cena',31,'yes','0123456789','herp@email.com','I like to wrestle vegetables',17,'NOT ACCEPTED'),(8,'azman',23,'no','0123456789','herp@email.com','',17,'ACCEPTED'),(9,'luke',54,'yes','0123456789','herp@email.com','swordsman trainer',18,'ACCEPTED'),(10,'zack',31,'no','0123456789','zack@yahoo.com','',18,'ACCEPTED'),(11,'test',21,'no','0123456789','test@test.com','',18,'ACCEPTED'),(12,'kevin',28,'no','0123456789','kevin@kevin.com','',18,'NOT ACCEPTED'),(13,'Bert',27,'no','0123456789','bert@earnie.com','',18,'ACCEPTED'),(14,'gara',20,'yes','0123456789','gary@gary.com','hoopla',22,'PENDING'),(15,'gara',20,'yes','0123456789','gary@gary.com','hoopla',22,'PENDING'),(16,'gara',20,'yes','0123456789','gary@gary.com','hoopla',22,'PENDING'),(17,'westly',18,'yes','0123456789','farid2@gmail.com','parkour couch',23,'NOT ACCEPTED'),(18,'westly',18,'yes','0123456789','farid2@gmail.com','parkour couch',23,'ACCEPTED'),(19,'farid',21,'yes','0123456789','deud@deud.com','i used to work as a seller',25,'NOT ACCEPTED'),(20,'farid',23,'yes','0123456789','farid2@gmail.com','hi',25,'ACCEPTED'),(21,'farid',23,'yes','0123456789','farid2@gmail.com','hi',25,'NOT ACCEPTED'),(22,'farid',23,'yes','0123456789','farid2@gmail.com','hi',25,'ACCEPTED'),(23,'farid',59,'no','0123456789','farid11@gmail.com','',25,'ACCEPTED'),(24,'abu',15,'yes','0123456789','abu@yahoo.com','hueheuhue',25,'PENDING'),(25,'test',18,'no','0123456789','farid11@gmail.com','',25,'PENDING'),(26,'test',19,'yes','0123456789','farid2@gmail.com','hi',25,'PENDING'),(27,'abu',30,'yes','0123456789','farid1@gmail.com','ini abu',25,'PENDING'),(28,'cube lagi',20,'yes','0123456789','farid2@gmail.com','tengah cube la ni',25,'PENDING'),(29,'try',19,'yes','0123456789','gary@gary.com','trying',25,'PENDING'),(30,'try',19,'yes','0123456789','gary@gary.com','trying',25,'PENDING'),(31,'try',19,'yes','0123456789','gary@gary.com','trying',25,'PENDING'),(32,'try',19,'yes','0123456789','gary@gary.com','trying',25,'PENDING'),(33,'batista',50,'yes','0123456789','batista@bomb.com','i used to be skinny',27,'PENDING'),(34,'batista',50,'yes','0123456789','batista@bomb.com','i used to be skinny',27,'PENDING'),(35,'test',15,'yes','0123456789','batista@bomb.com','test',28,'PENDING'),(36,'stickman',20,'yes','0123456789','abu@yahoo.com','im a stick',29,'NOT ACCEPTED'),(37,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(38,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(39,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(40,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(41,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(42,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(43,'Bert',30,'yes','0123456789','farid@gmail.com','work as a accountant',29,'NOT ACCEPTED'),(44,'sally',23,'yes','0123456789','farid11@gmail.com','waitress',29,'NOT ACCEPTED'),(45,'sally',23,'yes','0123456789','farid11@gmail.com','waitress',29,'NOT ACCEPTED'),(46,'sally',23,'yes','0123456789','farid11@gmail.com','waitress',29,'NOT ACCEPTED'),(47,'Vlad',30,'yes','0123456789','farid2@gmail.com','bleh',29,'NOT ACCEPTED'),(48,'mike',20,'yes','0123456789','farid1@gmail.com','hi',29,'NOT ACCEPTED'),(49,'mike',20,'yes','0123456789','farid1@gmail.com','hi',29,'NOT ACCEPTED'),(50,'mike',20,'yes','0123456789','farid1@gmail.com','hi',29,'NOT ACCEPTED');
/*!40000 ALTER TABLE `applicant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(500) NOT NULL,
  `city` varchar(300) NOT NULL,
  `state` varchar(300) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `country` varchar(300) NOT NULL,
  `company_info` varchar(2000) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES ('happy man','happy town','happy city','Penang','657482','Malaysia','happy company',18,27),('bouqet company','123 flower stree','Kuala Lumpur','Kuala Lumpur','41000','Malaysia','dadsdd',19,47),('bob burgers','asdsasaa','dasdasdas','Kedah','dasdasdas','Malaysia','dsadsadsadsa',20,48);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `work` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `scope` varchar(3000) DEFAULT NULL,
  `addinfo` varchar(2000) DEFAULT NULL,
  `jobcat` varchar(100) NOT NULL,
  `date_posted` datetime DEFAULT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `salary_rate` varchar(50) DEFAULT NULL,
  `post_status` varchar(50) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `address` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES ('flyer',1000,'fly like a bird','must have health insurance','Services','2016-04-28 00:00:00',23,14,'month','published',0,NULL),('dsasadsa',12321,'dsa','dasdsa','Services','2016-04-28 16:58:57',24,14,'hour','published',0,NULL),('proper\'s work',131,'being a proper civillian','must have a moustache					  ','Services','2016-04-28 17:50:50',25,14,'hour','published',0,NULL),('wrestler',12321,'Provide the best smack down','must be muscular','Services','2016-05-03 14:31:40',27,14,'','published',0,NULL),('boxer',1,'punch someone in the face','need to be italian','Food','2016-05-03 17:30:12',28,14,'','published',0,NULL),('Crop Harvester',50,'Harvest the most quality crop<br><br><b>Such as:<br><ul><li>Corn</li><li>Tomato</li><li>Potato</li></ul></b>','Work Time<br><br><b>10.00am - 60.00pm</b><br><br><ul><li>must have own vehicle</li></ul>','Food','2016-05-04 10:18:46',29,14,'hour','published',0,NULL),('my first post yay',10,'dasdasdssa','dasdassd','Food','2016-05-05 12:17:23',30,16,'month','published',0,NULL),('florist',20,'asdasds','dasdasas','Services','2016-05-06 00:25:24',31,19,'hour','published',43,NULL),('florist',20,'asdasds','dasdasas','Services','2016-05-06 00:33:30',32,19,'hour','published',43,NULL),('florist',20,'asdasds','dasdasas','Services','2016-05-06 00:33:54',33,19,'hour','published',46,NULL),('florist',20,'asdasds','dasdasas','Services','2016-05-06 00:45:35',34,19,'hour','published',47,NULL),('friyer',405,'dsadasdsa','dsaasdsadas','Services','2016-05-06 03:16:56',35,20,'hour','published',48,'');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `email` varchar(254) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_contact` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('deud@deud.com','admin','admindude','2016-02-16',1,'employer',NULL,NULL),('farid@gmail.com','farid','123abc','2016-02-26',2,'employer',NULL,NULL),('ali@yahoo.com','ali','gcb123','2016-02-26',3,'employer',NULL,NULL),('abu@yahoo.com','abu','abu123','2016-02-26',4,'employer',NULL,NULL),('zack@yahoo.com','zack','zac123','2016-02-26',5,'employer',NULL,NULL),('farid1@gmail.com','farid1','abc123','2016-03-16',6,'employee',NULL,NULL),('farid2@gmail.com','farid2','xxxxxx','2016-03-30',12,'employer',NULL,NULL),('herp@email.com','derp','herpderp','2016-04-04',13,'employee',NULL,NULL),('farid@pocketpixel.com','fr','asdasd','2016-04-28',14,'employer',NULL,NULL),('farid@pocketpixels.com','go','gogogo','2016-05-05',15,'employer','gogo','0123455626'),('farid@pocketpixelss.com','greatman','grgrgr','2016-05-05',16,'employer','greater man','0125488276'),('vern@vern.com','vern','veveve','2016-05-05',17,'employer','vern plant','0123466273'),('happy@gmail.com','happy','123456','2016-05-05',18,'employer','happy guy','0123957354'),('dan@dany.com','dd','dandan','2016-05-05',19,'employer','daniel dan','0129388293'),('bob@bobby.com','bigbob','bobbob','2016-05-06',20,'employer','bobby brown','01376588294');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-06 10:45:09
