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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicant`
--

LOCK TABLES `applicant` WRITE;
/*!40000 ALTER TABLE `applicant` DISABLE KEYS */;
INSERT INTO `applicant` VALUES (1,'herp',20,'yes','0123456789','herp@email.com','hsadsadhasas',15,NULL),(2,'harper',18,'no','0123456789','harper@yahoo.com','',3,NULL),(3,'herp',15,'no','0123456789','herp@email.com','',4,NULL),(4,'herp',18,'yes','0123456789','herp@email.com','herpderp',1,'NOT ACCEPTED'),(5,'derp',15,'no','0123456789','farid11@gmail.com','',17,'ACCEPTED'),(6,'abu',20,'yes','0123456789','abu@yahoo.com','none',17,'NOT ACCEPTED'),(7,'John Cena',31,'yes','0123456789','herp@email.com','I like to wrestle vegetables',17,'NOT ACCEPTED'),(8,'azman',23,'no','0123456789','herp@email.com','',17,'ACCEPTED'),(9,'luke',54,'yes','0123456789','herp@email.com','swordsman trainer',18,'ACCEPTED'),(10,'zack',31,'no','0123456789','zack@yahoo.com','',18,'ACCEPTED'),(11,'test',21,'no','0123456789','test@test.com','',18,'ACCEPTED'),(12,'kevin',28,'no','0123456789','kevin@kevin.com','',18,'NOT ACCEPTED'),(13,'Bert',27,'no','0123456789','bert@earnie.com','',18,'ACCEPTED'),(14,'gara',20,'yes','0123456789','gary@gary.com','hoopla',22,'PENDING'),(15,'gara',20,'yes','0123456789','gary@gary.com','hoopla',22,'PENDING'),(16,'gara',20,'yes','0123456789','gary@gary.com','hoopla',22,'PENDING'),(17,'westly',18,'yes','0123456789','farid2@gmail.com','parkour couch',23,'NOT ACCEPTED'),(18,'westly',18,'yes','0123456789','farid2@gmail.com','parkour couch',23,'ACCEPTED'),(19,'farid',21,'yes','0123456789','deud@deud.com','i used to work as a seller',25,'NOT ACCEPTED'),(20,'farid',23,'yes','0123456789','farid2@gmail.com','hi',25,'ACCEPTED'),(21,'farid',23,'yes','0123456789','farid2@gmail.com','hi',25,'NOT ACCEPTED'),(22,'farid',23,'yes','0123456789','farid2@gmail.com','hi',25,'ACCEPTED'),(23,'farid',59,'no','0123456789','farid11@gmail.com','',25,'ACCEPTED');
/*!40000 ALTER TABLE `applicant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `work` varchar(50) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `location` varchar(2000) DEFAULT NULL,
  `scope` varchar(2000) DEFAULT NULL,
  `addinfo` varchar(2000) DEFAULT NULL,
  `jobcat` varchar(100) DEFAULT NULL,
  `loccat` varchar(100) DEFAULT NULL,
  `date_posted` datetime DEFAULT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `salary_rate` varchar(50) DEFAULT NULL,
  `post_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES ('Mechanics','Tools Sdn.Bhd.',10,'Taman 123,\r\nJalan 1/23,\r\nTaman Area 123,\r\n52100 Kuala Lumpur.','Employee will be hired as an assistant','Starts at 10.00am to 2.00pm','Services','Kuala Lumpur','2016-02-02 00:00:00',1,1,NULL,NULL),('Programmer','Pocketpixel',150,'jdhajhc jksdhkjnknfnsfkjsnf ajfhdsljfhdlsjfhsdp','programming user requirement big data analysis social media research','were looking for someone whos capable and smart. and cool. and nice.','Services','Selangor','2016-02-15 00:00:00',3,3,NULL,NULL),('Clerk','shopshop',15,'Jalan Raya Besar\r\nJalan 1/1\r\nJalan Besar\r\n55000 Kuala Lumpur','Work as a clerk','needs to be 18 years old or older.','Services','Kuala Lumpur','2016-02-15 00:00:00',4,4,NULL,NULL),('Dispatch','Speedy Co.',20,'Taman Besar\r\nJalan 4/4\r\nTaman Jalan Besar\r\n58100 Kuala Lumpur','Work as a dispatcher','The person needs to have own vehicle','Services','Kuala Lumpur','2016-02-15 00:00:00',5,5,NULL,NULL),('Truck Driver','Cluster Truck',26,'truck city','cruzin','need to have a truck cap','Services','Kuala Lumpur','2016-04-28 00:00:00',22,2,'hour','published'),('flyer','to the sky',1000,'the sky','fly like a bird','must have health insurance','Services','Kuala Lumpur','2016-04-28 00:00:00',23,14,'month','published'),('dsasadsa','asdasas',12321,'sadsa','dsa','dasdsa','Services','Kuala Lumpur','2016-04-28 16:58:57',24,14,'hour','published'),('proper\'s work','mr proper',131,'up the hill','being a proper civillian','must have a moustache					  ','Services','Kuala Lumpur','2016-04-28 17:50:50',25,14,'hour','published');
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
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('deud@deud.com','admin','admindude','2016-02-16',1,'employer'),('farid@gmail.com','farid','123abc','2016-02-26',2,'employer'),('ali@yahoo.com','ali','gcb123','2016-02-26',3,'employer'),('abu@yahoo.com','abu','abu123','2016-02-26',4,'employer'),('zack@yahoo.com','zack','zac123','2016-02-26',5,'employer'),('farid1@gmail.com','farid1','abc123','2016-03-16',6,'employee'),('farid2@gmail.com','farid2','xxxxxx','2016-03-30',12,'employer'),('herp@email.com','derp','herpderp','2016-04-04',13,'employee'),('farid@pocketpixel.com','fr','asdasd','2016-04-28',14,'employer');
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

-- Dump completed on 2016-04-29 12:24:39
