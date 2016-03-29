-- MySQL dump 10.13  Distrib 5.5.45, for Win32 (x86)
--
-- Host: localhost    Database: test7
-- ------------------------------------------------------
-- Server version	5.5.45

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (101,'eu sapien','Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ',518.05,'',0,'Skiba'),(102,'nascetur','Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem,',7777,'',1,'Kazioqwerty'),(103,'dolor morbi','Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, j',10000000,'',1,'Wikizz'),(104,'justo','Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ',151.11,'',0,'Wikido'),(105,'volutpat','Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat i',893.94,'',1,'Topicware'),(106,'eu','Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ul',369.67,'',1,'Mydo'),(107,'scelerisque','Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at ',421.07,'',0,'Wordtune'),(108,'duis','Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam ',262.13,'',1,'Minyx'),(109,'odio','Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at,',627.35,'',1,'Topicstorm'),(110,'cursus','Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam ',708.81,'',0,'Meemm'),(111,'ut nulla','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viver',745.31,'',1,'Plajo'),(112,'pede posuere','Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in ',537.08,'',1,'Youopia'),(113,'vel est','Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit',798.39,'',0,'Jayo'),(114,'luctus','Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi vene',656.42,'',1,'Meezzy'),(115,'sapien','Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis i',469.68,'',0,'Wikido'),(116,'dapibus augue','Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue qua',891.08,'',0,'Vinte'),(117,'sagittis dui','Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, j',269.94,'',1,'Yombu'),(118,'ut','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibu',720.98,'',0,'Dabjam'),(119,'ornare imperdiet','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentes',265.02,'',0,'Jamia'),(120,'posuere','Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta',691.36,'',0,'Jaxnation'),(121,'eget','Etiam pretium iaculis justo. In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus',675.95,'',1,'Trudeo'),(122,'felis','Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phase',436.02,'',1,'Zoombeat'),(123,'platea','Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla nequ',179.4,'',1,'Oloo'),(124,'nec','Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa qu',255.97,'',1,'Plajo'),(125,'mi sit','Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla',574.24,'',1,'Realpoint'),(126,'dolor','Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac nibh. Fusce la',402.51,'',0,'Quinu'),(127,'vel augue','Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Mo',171.12,'',0,'Twinte'),(128,'justo','Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis j',225.53,'',1,'Shufflester'),(129,'platea dictumst','Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum',651.41,'',1,'Centizu'),(130,'sem mauris','Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ul',484.54,'',1,'Yakidoo'),(131,'faucibus','Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nul',825.9,'',0,'Twimbo'),(132,'amet diam','Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, na',175.18,'',0,'Edgetag'),(133,'donec','Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi. Cras non velit nec nisi ',121.74,'',0,'Minyx'),(134,'eu','Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi. Nu',472.76,'',0,'Muxo'),(135,'posuere','Mauris sit amet eros. Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis',185.11,'',0,'Photobean'),(136,'est','Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacin',407.6,'',1,'Bluejam'),(137,'adipiscing','Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestib',709.8,'',1,'Thoughtbeat'),(138,'praesent','In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum m',276.86,'',1,'Thoughtbeat'),(139,'rutrum nulla','In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl',508.02,'',0,'Kare'),(140,'in hac','Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magn',813.72,'',1,'Wikizz'),(141,'purus','Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, j',354.88,'',1,'Avamba'),(142,'ut nunc','Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse ac',871.32,'',0,'Twitternation'),(143,'morbi odio','Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue qua',450.78,'',0,'Gevee'),(144,'a suscipit','Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam n',125.15,'',0,'Yoveo'),(145,'rhoncus dui','Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id,',437.99,'',1,'Browsebug'),(146,'ut','Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non ',309.66,'',0,'Zava'),(147,'volutpat','Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rh',610.38,'',0,'Twimm'),(148,'quisque id','Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rh',447.06,'',1,'Livetube'),(149,'vestibulum velit','Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac',717.76,'',0,'Topdrive'),(150,'erat','Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor qui',234,'',1,'Realbridge'),(151,'qwe','wqdww',12345,'',1,'sdf');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin','333',0),(3,'uroot','1234567',0),(14,'Poc','123',0),(15,'mamba','ae4b57dd10695a75861221d2204dd032',0),(16,'mamba2','ba9a4ef31477dab241685003a454a9b8',0),(17,'kec','53817ca9734c5dccc550ded9c7f403d5',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-28  7:04:21
