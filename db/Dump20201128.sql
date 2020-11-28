CREATE DATABASE  IF NOT EXISTS `metlaguna` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `metlaguna`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: metlaguna
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorialugar`
--

DROP TABLE IF EXISTS `categorialugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorialugar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoLugar_id` int(11) DEFAULT NULL,
  `lugar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipoLugar_id` (`tipoLugar_id`),
  KEY `lugar_id` (`lugar_id`),
  CONSTRAINT `categorialugar_ibfk_1` FOREIGN KEY (`tipoLugar_id`) REFERENCES `tipolugar` (`id`),
  CONSTRAINT `categorialugar_ibfk_2` FOREIGN KEY (`lugar_id`) REFERENCES `lugar` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorialugar`
--

LOCK TABLES `categorialugar` WRITE;
/*!40000 ALTER TABLE `categorialugar` DISABLE KEYS */;
INSERT INTO `categorialugar` VALUES (1,7,1),(2,3,2),(3,5,2),(4,1,3),(5,1,4),(6,1,5),(7,4,6),(8,6,7),(9,6,8),(10,6,9),(11,6,10),(12,7,11),(13,1,12),(14,6,13),(15,6,14),(16,7,15),(17,7,16),(18,7,17),(19,1,18),(20,3,18),(21,6,19),(22,1,20),(23,7,20),(24,7,21);
/*!40000 ALTER TABLE `categorialugar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comidatipica`
--

DROP TABLE IF EXISTS `comidatipica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comidatipica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `historia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comidatipica`
--

LOCK TABLES `comidatipica` WRITE;
/*!40000 ALTER TABLE `comidatipica` DISABLE KEYS */;
INSERT INTO `comidatipica` VALUES (1,'Gorditas','Echas en Gomez'),(2,'Gorditas','Echas en Gomez'),(3,'Gorditas','Echas en Gomez'),(4,'Gorditas','Echas en Gomez'),(5,'Gorditas','Echas en Gomez');
/*!40000 ALTER TABLE `comidatipica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `validacion` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuenta`
--

LOCK TABLES `cuenta` WRITE;
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` VALUES (1,'prueba1@gmail.com','cfbd3e3a8adc49b9e0061ade86c84b499012048c903185821f9428dd981c4610b6d660d484a88641bf81b5b840422ea9e3a5da29c12821eed60b0d281e5f43db',_binary ''),(2,'prueba2@gmail.com','cfbd3e3a8adc49b9e0061ade86c84b499012048c903185821f9428dd981c4610b6d660d484a88641bf81b5b840422ea9e3a5da29c12821eed60b0d281e5f43db',NULL);
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar_id` int(11) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lugar_id` (`lugar_id`),
  CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`lugar_id`) REFERENCES `lugar` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar_id` int(11) DEFAULT NULL,
  `gastronomia_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `url` text,
  `descripcion` varchar(200) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `tipoLugar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lugar_id` (`lugar_id`),
  KEY `gastronomia_id` (`gastronomia_id`),
  KEY `municipio_id` (`municipio_id`),
  KEY `foto_ibfk_4` (`tipoLugar_id`),
  CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`lugar_id`) REFERENCES `lugar` (`id`),
  CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`gastronomia_id`) REFERENCES `gastronomia` (`id`),
  CONSTRAINT `foto_ibfk_3` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`),
  CONSTRAINT `foto_ibfk_4` FOREIGN KEY (`tipoLugar_id`) REFERENCES `tipolugar` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto`
--

LOCK TABLES `foto` WRITE;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
INSERT INTO `foto` VALUES (1,NULL,NULL,1,'img/municipios/cardMunicipioGomez.jpg','Imagen para la pantalla principal de la page','cardMunicipioGomez','CardVertical',NULL),(2,NULL,NULL,2,'img/municipios/cardMunicipioTorreon.jpg','Imagen para la pantalla principal de la page','cardMunicipioTorreon','CardVertical',NULL),(3,NULL,NULL,3,'img/municipios/cardMunicipioLerdo.jpg','Imagen para la pantalla principal de la page','cardMunicipioLerdo','CardVertical',NULL),(4,NULL,NULL,4,'img/municipios/cardMunicipioOtrasCiudades.jpg','Imagen para la pantalla principal de la page','cardMunicipioOtrasCi','CardVertical',NULL),(5,NULL,NULL,1,'img/municipios/bannerMunicipioGomez.jpg','Imagen para el banner de la pantalla de municipios','bannerMunicipioGomez','Banner',NULL),(6,NULL,NULL,2,'img/municipios/bannerMunicipioTorreon.jpg','Imagen para el banner de la pantalla de municipios','bannerMunicipioTorre','Banner',NULL),(7,NULL,NULL,4,'img/municipios/bannerMunicipioOtrasCiudades.jpg','Imagen para el banner de la pantalla de municipios','bannerMunicipioOtras','Banner',NULL),(8,NULL,NULL,3,'img/municipios/bannerMunicipioLerdo.jpg','Imagen para el banner de la pantalla de municipios','bannerMunicipioLerdo','Banner',NULL),(9,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarMuseo.jpg','Imagen para la pantalla principal de la page','cardTipoLugarMuseo','CardHorizontal',1),(10,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarEstadio.jpg','Imagen para la pantalla principal de la page','cardTipoLugarEstadio','CardHorizontal',2),(11,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarMonumento.jpg','Imagen para la pantalla principal de la page','cardTipoLugarMonumento','CardHorizontal',3),(12,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarRevolucion.jpg','Imagen para la pantalla principal de la page','cardTipoLugarRevolucion','CardHorizontal',4),(13,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarTemplo.jpg','Imagen para la pantalla principal de la page','cardTipoLugarTemplo','CardHorizontal',5),(14,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarPlaza.jpg','Imagen para la pantalla principal de la page','cardTipoLugarPlaza','CardHorizontal',6),(15,NULL,NULL,NULL,'img/tiposLugares/cardTipoLugarLugaresDiversos.jpg','Imagen para la pantalla principal de la page','cardTipoLugarLugaresDiversos','CardHorizontal',7);
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastronomia`
--

DROP TABLE IF EXISTS `gastronomia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gastronomia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `municipio_id` int(11) DEFAULT NULL,
  `comidaTipica_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `municipio_id` (`municipio_id`),
  KEY `comidaTipica_id` (`comidaTipica_id`),
  CONSTRAINT `gastronomia_ibfk_1` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`),
  CONSTRAINT `gastronomia_ibfk_2` FOREIGN KEY (`comidaTipica_id`) REFERENCES `comidatipica` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastronomia`
--

LOCK TABLES `gastronomia` WRITE;
/*!40000 ALTER TABLE `gastronomia` DISABLE KEYS */;
INSERT INTO `gastronomia` VALUES (2,1,1),(3,1,2),(4,1,3),(5,1,4),(6,1,5);
/*!40000 ALTER TABLE `gastronomia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugar`
--

DROP TABLE IF EXISTS `lugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lugar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `municipio_id` int(11) DEFAULT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `municipio_id` (`municipio_id`),
  CONSTRAINT `lugar_ibfk_1` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugar`
--

LOCK TABLES `lugar` WRITE;
/*!40000 ALTER TABLE `lugar` DISABLE KEYS */;
INSERT INTO `lugar` VALUES (1,2,'Teleferico','¡El primer teleférico en Coahuila! Conecta el centro histórico de Torreón con el Cristo de las Noas. ¡El paseo turístico más visitado de Torreón! Es toda una aventura de vértigo y emoción recorrer los 425 metros de distancia, que van desde la estación sobre la calle Treviño hasta la cima del Cerro de las Noas, donde al llegar al mirador se podrá encontrar con un lindo paisaje de la ciudad y sus hermosos atardeceres.'),(2,2,'Cristo de las noas','El Cristo de las Noas es una escultura de Jesús de Nazaret ubicada en el Cerro de las Noas, en la ciudad de Torreón, Coahuila, México, al noreste de México. Es obra de la artista Vladimir Alvarado, quien quiso inmortalizar el gesto de un Cristo protector.'),(3,2,'Museo de la moneda','El Museo de la Moneda es el único espacio numismático en el norte de México, se sitúa en el sótano del edificio que fuera el Banco de México, construido en 1947.Exhibe varias colecciones de monedas mexicanas, las hay virreinales que tenían borde irregular, están las circulares y de diseño relativamente moderno acuñadas a partir de 1732.'),(4,2,'Museo del metal','El Museo de los Metales de Peñoles tiene por objeto dar a conocer y educar, de manera atractiva y divertida, acerca de la importancia de la industria metalúrgica y minera para la vida personal y la comunidad. Mediante actividades diversas, se propone inspirar al espectador para enfrentar grandes retos, despertar la curiosidad por los fenómenos naturales y fomentar el amor hacia la naturaleza.'),(5,2,'Museo Arocena','El Museo Arocena es un amplio y moderno museo de México inaugurado en 2006 con interesantes salas de arte contemporáneo, arte europeo, arte de la Nueva España e historia regional, establecido en la ciudad de Torreón, estado de Coahuila. El Museo Arocena fue construido a iniciativa de la Fundación E. Arocena, y tiene como base una colección de más de 300 obras de arte virreinal, europeo y mexicano que fueron adquiridas durante los últimos cien años por la familia Arocena y sus descendientes. '),(6,2,'Canal de la perla','El Canal de la Perla es un antiguo canal de riego subterráneo que hoy es usado como atractivo turístico y paseo cultural en la ciudad de Torreón. Formaba parte del Tajo de la Perla con una distancia total de 12.5 kilómetros creado hacia 1891 y entró en funcionamiento en 1893 para ser utilizado como canal de riego. Este canal formó parte de una red de irrigación que transportaba agua del río Nazas hacia el oriente de la ciudad.'),(7,2,'Plaza de armas','La plaza es el espacio público que proporciona a la ciudad y a sus habitantes un lugar donde converger, un lugar de esparcimiento y recreación. Brinda un espacio abierto que permite a sus visitantes realizar diversas actividades. La Ciudad de Torreón no es la excepción, ya que cuenta con la Plaza de Armas, uno de los espacios públicos más emblemáticos de la ciudad.'),(8,2,'Plaza mayor','La plaza Mayor Torreón es una plaza compuesta por el Edificio Municipal y una gran explanada ubicada en Torreón, Coahuila, México. Después de poco más de 2 años de construcción, fue abierta al público el día 15 de septiembre del 2012, durante el año del 105 aniversario de la ciudad. Siendo gobernador el Lic. Rubén Moreira Valdez y en la alcaldía Eduardo Olmos Castro.'),(9,2,'Parque fundadores','Está dedicada a las personas que fundaron la ciudad. Abriendo sus puertas en 1999 se ha convertido en un importante pulmón y un pequeño oasis en medio del desierto. Aunque su principal objetivo es que la familia disfrute un día agradable en su pequeño lago, jardines, juegos infantiles, teatro al aire libre y más…'),(10,2,'Bosque venustiano carranza','El Bosque Venustiano Carranza (BVC) fue concebido en sus orígenes como el principal espacio público de la ciudad. De acuerdo con el historiador Carlos Castañón, para su creación se contrataron 200 trabajadores que plantaron 18 mil árboles en terrenos de 21 hectáreas en el año 1941, por lo tanto el bosque siempre representó el principal pulmón de Torreón.'),(11,1,'Paseo Gomez Palacio','Fashion Mall ubicado en la region lagunera, con un concepto arquitectonico de vanguardia. Cuenta con áreas verdes y restaurantes con terrazas'),(12,1,'Museo acertijo','El museo cuenta con 75 exhibiciones interactivas, 5 áreas de talleres con contenido actual, una sala para exposiciones temporales. Tiene una sala para proyección en tercera dimensión, servicio de cafetería, tienda de souvenirs.'),(13,1,'Plaza de armas','Un espacio al aire libre que alberga el tercer kiosko mas hermoso de México y a su alredor multiples especies de flora y antiguas construcciones que datan la historia de la ciudad desde el siglo XIX'),(14,1,'Parque Morelos','El parque morelos es el principal lugar de áreas verdes de esparcimiento entre 145. Cuenta con diversas actividades deportivas, culturales y recreativas para todas las edades.'),(15,4,'El viejo oeste ',' Este es un parque temático que cuenta con un show tipo vaquero, restaurantes, paseos en caballo y una serie de actividades recreativas para toda la familia.'),(16,4,'La concha','La Concha es un balneario de aguas termales con cascada, presa y  áreas para acampar e impresionantes paisajes para pasar momentos inolvidables en compañía de familiares y amigos.'),(17,4,'La zona del silencio','Este lugar esta lleno de historias y mitos que lo califican desde base de extraterrestres hasta puerta dimensional.'),(18,3,'Museo avión de Sarabia','El museo que es símbolo de identidad entre los laguneros, cuenta con una sala de exhibición y exposición, se expone el avión y artículos y uniformes que fueron utilizados por el Capitán Piloto Aviador Francisco Sarabia Tinoco.'),(19,3,'Parque victoria','La gran variedad de áreas verdes, deportivas y comerciales hacen de este un ambiente familiar cómodo y recreativo.'),(20,3,'La casa de la cultura','La Casa de la Cultura Ernestina Gamboa, es un conjunto cultural formado por: el museo de arte moderno, la Biblioteca Pública regional, el Teatro Dolores del Río y el area Academica Cultural.'),(21,3,'El cañón de Fernández','Observatorio de aves y caminata. El cañón de Fernández es un auténtico oasis y paraíso de aves locales y migratorias.');
/*!40000 ALTER TABLE `lugar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `historia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'Gomez Palacio','Durango','Es la novena zona metropolitana más poblada de México con poco más de 1,400,000 habitantes.',''),(2,'Torreon','Coahuila','Es una de las ciudades más jóvenes de México, pues en 2007 celebró sus cien años.',''),(3,'Lerdo','Durango','Debe su nombre al ilustre liberal Miguel Lerdo de Tejada.',''),(4,'Otras Ciudades','Region Lagunera','Tlahualilo, Mapimí, Rodeo, Nazas, Simón Bolívar, San Juan de Guadalupe, San Luis del Cordero y San Pedro del Gallo, San Pedro, Matamoros, Francisco I. Madero y Viesca','');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipolugar`
--

DROP TABLE IF EXISTS `tipolugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipolugar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipolugar`
--

LOCK TABLES `tipolugar` WRITE;
/*!40000 ALTER TABLE `tipolugar` DISABLE KEYS */;
INSERT INTO `tipolugar` VALUES (1,'Museos','La Comarca Lagunera posee museos conocidos a nivel nacional por su basta historia referente a la Revoluucion Mexicana.'),(2,'Estadios','Hogar de los Guerreros del Santos Laguna, el afamado TSM, y otros tambien populares estadios deportivos se encuentran en esta region.'),(3,'Monumentos','El Cristo de la Noas, La estatua de Fransisco Villa, entre otros representativos monumentos de esta region puedes conocer.'),(4,'Revolucion Mexicana','Conocida como \"La Cuna De La Revolucion Mexicana\", la comarca lagunera posee lugares muy iconicos y con mucha historia Mexicana.'),(5,'Templos','Visita algunas de las Capillas, Iglesias, y otros lugares religiosos que estas ciudades ocultan entre sus calles principales.'),(6,'Plazas','Date la vuelta por alguna de las plazas mas transitadas de la region y disfruta de un rico elote o de alguna nieve caracteristica de La Comarca Lagunera.'),(7,'Lugares Diversos','Disfruta de los lugares mas emblematicos de estas ciudades, lugares que representan a un verdadero Lagunero.');
/*!40000 ALTER TABLE `tipolugar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `foto` text,
  `cuenta_id` int(11) DEFAULT NULL,
  `ocupacion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cuenta_id` (`cuenta_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cuenta_id`) REFERENCES `cuenta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'TakitoTime','Prueba','TestPaterno','TestMaterno','8713975674',23,'img/userPhoto/fotoPerfil.jpg',1,'Programador');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-28 11:48:58
