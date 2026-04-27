CREATE DATABASE  IF NOT EXISTS `vetpatinhas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `vetpatinhas`;
-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: vetpatinhas
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.24.04.1

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
-- Table structure for table `agendamentos`
--

DROP TABLE IF EXISTS `agendamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendamentos` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(100) NOT NULL,
  `tipo` enum('serviço','exames de imagem','exames laboratoriais') DEFAULT NULL,
  `especialidade` varchar(100) NOT NULL,
  `nome_animal` varchar(100) NOT NULL,
  `porte` enum('pequeno','medio','grande','gigante') NOT NULL,
  `nome_tutor` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int NOT NULL,
  `situacao` enum('sem risco','emergencial') DEFAULT NULL,
  `dia` date NOT NULL,
  `horario` time NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendamentos`
--

LOCK TABLES `agendamentos` WRITE;
/*!40000 ALTER TABLE `agendamentos` DISABLE KEYS */;
INSERT INTO `agendamentos` VALUES (1,'Nina Santos','exames de imagem','radioterapia veterinária','Molly','medio','Ana Clara Mendes','clara@example.com',900000000,'sem risco','2026-04-29','05:30:00'),(2,'Nina Santos','serviço','castração','Molly','medio','Ana Clara Mendes','clara@example.com',900000000,'sem risco','2026-06-11','17:30:00');
/*!40000 ALTER TABLE `agendamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documento` (
  `id_documento` int NOT NULL AUTO_INCREMENT,
  `data_exame` varchar(10) NOT NULL,
  `nome_exame` varchar(45) NOT NULL,
  `numero_acesso` varchar(8) NOT NULL,
  `senha_acesso` varchar(255) NOT NULL,
  `pdf_arquivo` mediumblob NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estoque`
--

DROP TABLE IF EXISTS `estoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estoque` (
  `id_medicamentos` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `categoria` enum('Hormônios','Anestésicos','Sedativos','Cardiológicos','Antiparasitários','Neurológicos','Oncológicos','Analgésicos','Antibióticos','Anti-inflamatorio') DEFAULT NULL,
  `quantidade` varchar(100) NOT NULL,
  `dosagem` varchar(100) NOT NULL,
  `forma` enum('comprimido','injetavel','capsula') DEFAULT NULL,
  `data_validade` varchar(100) NOT NULL,
  `fornecedor` enum('vetpharma','petmed','formavet','medicpet','biovet','agrofarm','petsaúde','pharmapets') DEFAULT NULL,
  `ultima_compra` varchar(100) NOT NULL,
  `observacoes` text NOT NULL,
  KEY `id_medicamentos` (`id_medicamentos`),
  CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`id_medicamentos`) REFERENCES `medicamentos` (`id_medicamentos`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque`
--

LOCK TABLES `estoque` WRITE;
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
INSERT INTO `estoque` VALUES (1,'Levotiroxinapina','Hormônios','30 comprimidos','5 mg','comprimido','12/2026','vetpharma','01/11/2024','Armazenar em local seco e fresco.'),(2,'Nifedipina','Hormônios','20 comprimidos','10 mg','comprimido','11/2025','petmed','15/10/2024','Evitar luz direta, manter em temperatura ambiente.'),(3,'Levotiroxina','Hormônios','50 cápsulas','25mcg','capsula','12/2026','formavet','10/10/2024','Evitar luz direta, manter em temperatura ambiente.'),(4,'Carbimazol','Hormônios','20 comprimidos','5 mg','comprimido','08/2025','medicpet','30/09/2024','Manter em local seco e protegido da luz.'),(5,'Desonidrocorticosterona','Hormônios','10 ml','2 mg/ml','injetavel','03/2026','biovet','22/09/2024','Armazenar em temperatura ambiente, longe de umidade.'),(6,'Ketamina','Hormônios','10 ml','50 mg/ml','injetavel','07/2026','agrofarm','20/08/2024','Armazenar em temperatura entre 2°C a 8°C.'),(7,'Levotiroxina','Anestésicos','50 cápsulas','50mcg','capsula','11/2025','vetpharma','01/10/2024','Manter em local refrigerado, protegido da luz.'),(8,'Propofol','Anestésicos','20 ml','10 mg/ml','injetavel','04/2026','petsaúde','12/09/2024','Armazenar em local seco e fresco.'),(9,'Isoflurano','Anestésicos','250 ml','-','injetavel','09/2025','pharmapets','15/08/2024','Manter refrigerado, protegido da luz.'),(10,'Diazepam','Sedativos','30 comprimidos','5 mg','comprimido','06/2025','vetpharma','10/10/2024','Armazenar em temperatura ambiente, evitar exposição a calor.'),(11,'Midazolam','Sedativos','20 ml','5 mg/ml','injetavel','12/2025','petmed','05/10/2024','Armazenar em local seco e arejado.'),(12,'Acepromazina','Sedativos','50 ml','10 mg/ml','injetavel','02/2026','formavet','22/09/2024','Manter refrigerado, evitar exposição a luz.'),(13,'Carbimazol','Sedativos','30 comprimidos','10 mg','comprimido','11/2025','medicpet','10/08/2024','Armazenar em temperatura entre 2°C e 8°C.'),(14,'Enalapril','Cardiológicos','30 cápsulas','10 mg','capsula','03/2026','biovet','20/09/2024','Manter em local seco e fresco.'),(15,'Espironolactona','Cardiológicos','30 comprimidos','25 mg','comprimido','10/2025','pharmapets','10/09/2024','Armazenar em local fresco e seco.'),(16,'Furosemida','Cardiológicos','20 cápsulas','40 mg','capsula','07/2025','petsaúde','25/09/2024','Evitar umidade, manter em temperatura ambiente.'),(17,'Espironolactona','Cardiológicos','40 comprimidos','50 mg','comprimido','06/2025','pharmapets','15/09/2024','Armazenar em local seco e protegido da luz.'),(18,'Prazicuantel','Antiparasitários','10 comprimidos','50 mg','comprimido','01/2026','vetpharma','10/09/2024','Evitar exposição a umidade.'),(19,'Pirantel','Antiparasitários','20 cápsulas','250 mg','capsula','08/2025','petmed','05/10/2024','Manter em local fresco e seco.'),(20,'Milbemicina','Antiparasitários','12.5 mg','-','comprimido','04/2026','formavet','20/08/2024','Armazenar em local seco e arejado.'),(21,'Fipronil','Antiparasitários','50 ml','0.25 mg/ml','injetavel','09/2025','medicpet','30/09/2024','Proteger da luz, manter em temperatura ambiente.'),(22,'Imidacloprid','Antiparasitários','30 ml','10 mg/ml','injetavel','12/2025','biovet','25/09/2024','Manter refrigerado, protegido da luz.'),(23,'Fenobarbital','Neurológicos','30 comprimidos','30 mg','comprimido','07/2026','agrofarm','22/09/2024','Manter em temperatura ambiente, longe de umidade.'),(24,'Levetiracetam','Neurológicos','20 cápsulas','500 mg','capsula','06/2025','petsaúde','20/08/2024','Armazenar em local fresco e seco.'),(25,'Carboplatina','Oncológicos','10 ml','10 mg/ml','injetavel','06/2026','pharmapets','10/09/2024','Manter em local seco, protegido da luz.'),(26,'Ciclofosfamida','Oncológicos','20 ml','50 mg/ml','injetavel','09/2025','vetpharma','12/08/2024','Armazenar em temperatura entre 2°C e 8°C.'),(27,'Paracetamol','Analgésicos','30 comprimidos','500 mg','comprimido','02/2026','petmed','10/09/2024','Manter em local refrigerado.'),(28,'Buprenorfina','Analgésicos','10 ml','0.3 mg/ml','injetavel','06/2025','formavet','22/08/2024','Armazenar em local seco, longe de umidade.'),(29,'Penicilinas','Antibióticos','10 frascos','500 mg','injetavel','10/2025','medicpet','12/10/2024','Manter refrigerado, longe de luz direta.'),(30,'Cefalosporinas','Antibióticos','20 frascos','250 mg','injetavel','09/2025','biovet','30/09/2024','Armazenar em local seco e fresco.'),(31,'Fluoroquinolonas','Antibióticos','30 cápsulas','200 mg','capsula','04/2026','agrofarm','05/10/2024','Manter refrigerado, protegido da luz.'),(32,'Aminoglicosídeos','Antibióticos','10 ml','10 mg/ml','injetavel','02/2026','petsaúde','20/08/2024','Manter refrigerado, protegido da luz.'),(33,'Meloxicam','Anti-inflamatorio','30 comprimidos','7.5 mg','comprimido','03/2026','pharmapets','12/10/2024','Armazenar em local seco e arejado.'),(34,'Cetoprofeno','Anti-inflamatorio','20 cápsulas','100 mg','capsula','07/2025','vetpharma','30/09/2024','Manter em temperatura ambiente, protegido da luz.');
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcoes`
--

DROP TABLE IF EXISTS `funcoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcoes` (
  `id_servicos` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `Id_responsavel` int NOT NULL,
  KEY `id_servicos` (`id_servicos`),
  KEY `Id_responsavel` (`Id_responsavel`),
  CONSTRAINT `funcoes_ibfk_1` FOREIGN KEY (`id_servicos`) REFERENCES `servicos` (`id_servicos`),
  CONSTRAINT `funcoes_ibfk_2` FOREIGN KEY (`Id_responsavel`) REFERENCES `medicos` (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcoes`
--

LOCK TABLES `funcoes` WRITE;
/*!40000 ALTER TABLE `funcoes` DISABLE KEYS */;
INSERT INTO `funcoes` VALUES (19,'Nina Santos',1),(30,'Nina Santos',1),(35,'Nina Santos',1),(32,'Nina Santos',1),(21,'Benicio Souza',2),(22,'Benicio Souza',2),(23,'Benicio Souza',2),(24,'Benicio Souza',2),(25,'Benicio Souza',2),(26,'Benicio Souza',2),(27,'Benicio Souza',2),(28,'Benicio Souza',2),(29,'Benicio Souza',2),(15,'Caio Oliveira',3),(10,'Caio Oliveira',3),(7,'Caio Oliveira',3),(16,'Caio Oliveira',3),(11,'Davi Costa',4),(38,'Davi Costa',4),(36,'Davi Costa',4),(37,'Davi Costa',4),(20,'Davi Costa',4),(25,'Maria Almeida',5),(8,'Maria Almeida',5),(9,'Maria Almeida',5),(31,'Maria Almeida',5),(14,'José silva',6),(2,'José silva',6),(33,'José silva',6),(17,'Amanda Alves',7),(18,'Amanda Alves',7),(12,'Amanda Alves',7),(39,'Amanda Alves',7),(40,'Amanda Alves',7),(1,'beatriz Pereira',8),(3,'beatriz Pereira',8),(4,'beatriz Pereira',8),(5,'beatriz Pereira',8),(6,'beatriz Pereira',8),(12,'beatriz Pereira',8),(13,'beatriz Pereira',8),(34,'beatriz Pereira',8),(37,'beatriz Pereira',8);
/*!40000 ALTER TABLE `funcoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicamentos` (
  `id_medicamentos` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `tipo` enum('Hormônios','Anestésicos','Sedativos','Cardiológicos','Antiparasitários','Neurológicos','Oncológicos','Analgésicos','Antibióticos','Anti-inflamatorio') DEFAULT NULL,
  PRIMARY KEY (`id_medicamentos`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicamentos`
--

LOCK TABLES `medicamentos` WRITE;
/*!40000 ALTER TABLE `medicamentos` DISABLE KEYS */;
INSERT INTO `medicamentos` VALUES (1,'Amlodipina','Hormônios'),(2,'Nifedipina','Hormônios'),(3,'Levotiroxina','Hormônios'),(4,'Carbimazol','Hormônios'),(5,'Desonidrocorticosterona','Hormônios'),(6,'Ketamina','Hormônios'),(7,'Levotiroxina','Anestésicos'),(8,'Propofol','Anestésicos'),(9,'Isoflurano','Anestésicos'),(10,'Diazepam','Sedativos'),(11,'Midazolam','Sedativos'),(12,'Acepromazina','Sedativos'),(13,'Carbimazol','Sedativos'),(14,'Enalapril','Cardiológicos'),(15,'espironolactona','Cardiológicos'),(16,'Furosemida','Cardiológicos'),(17,'espironolactona','Cardiológicos'),(18,'Prazicuantel','Antiparasitários'),(19,'pirantel','Antiparasitários'),(20,'milbemicina','Antiparasitários'),(21,'Fipronil','Antiparasitários'),(22,'imidacloprid','Antiparasitários'),(23,'Fenobarbital','Neurológicos'),(24,'levetiracetam','Neurológicos'),(25,'Carboplatina','Oncológicos'),(26,'ciclofosfamida','Oncológicos'),(27,'Paracetamol','Analgésicos'),(28,'Buprenorfina','Analgésicos'),(29,'Penicilinas','Antibióticos'),(30,'cefalosporinas','Antibióticos'),(31,'fluoroquinolonas','Antibióticos'),(32,'aminoglicosídeos','Antibióticos'),(33,'meloxicam','Anti-inflamatorio'),(34,'cetoprofeno','Anti-inflamatorio');
/*!40000 ALTER TABLE `medicamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicos`
--

DROP TABLE IF EXISTS `medicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicos` (
  `id_funcionario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `datanasc` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicos`
--

LOCK TABLES `medicos` WRITE;
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
INSERT INTO `medicos` VALUES (1,'Nina Santos','11987654321','01001000','15/03/1990','nina.santos@vetpatinhas.com','VetPatinh@s'),(2,'Benício Souza','21998876543','20010020','28/07/1985','benício.souza@vetpatinhas.com','VetPatinh@s'),(3,'Caio Oliveira','31912345678','30130030','10/12/1992','caio.oliveira@vetpatinhas.com','VetPatinh@s'),(4,'Davi Costa','41976543210','40040040','05/06/1988','davi.costa@vetpatinhas.com','VetPatinh@s'),(5,'Maria Almeida','51943216789','50050050','21/09/1995','maria.almeida@vetpatinhas.com','VetPatinh@s'),(6,'José Silva','61988771234','60060060','30/01/1993','josé.silva@vetpatinhas.com','VetPatinh@s'),(7,'Amanda alves','71934567890','70070070','18/11/1987','amanda.alves@vetpatinhas.com','VetPatinh@s'),(8,'Beatriz pereira','81967894321','80080080','25/04/1991','beatriz.pereira@vetpatinhas.com','VetPatinh@s');
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prontuarios`
--

DROP TABLE IF EXISTS `prontuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prontuarios` (
  `id_prontuario` int NOT NULL AUTO_INCREMENT,
  `id_consulta` int NOT NULL,
  `id_medico` int NOT NULL,
  `id_animal` int NOT NULL,
  `prontuario_pdf` varchar(255) DEFAULT NULL,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_prontuario`),
  KEY `id_consulta` (`id_consulta`),
  KEY `id_medico` (`id_medico`),
  KEY `id_animal` (`id_animal`),
  CONSTRAINT `prontuarios_ibfk_1` FOREIGN KEY (`id_consulta`) REFERENCES `agendamentos` (`id_consulta`),
  CONSTRAINT `prontuarios_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_funcionario`),
  CONSTRAINT `prontuarios_ibfk_3` FOREIGN KEY (`id_animal`) REFERENCES `usuarios` (`Id_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prontuarios`
--

LOCK TABLES `prontuarios` WRITE;
/*!40000 ALTER TABLE `prontuarios` DISABLE KEYS */;
INSERT INTO `prontuarios` VALUES (1,1,1,1,'../uploads/prontuarios/69ef69b175ea9.pdf','2026-04-27 13:50:41');
/*!40000 ALTER TABLE `prontuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `id_servicos` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `tipo` enum('serviços','exames laboratoriais','exames de imagem') DEFAULT NULL,
  PRIMARY KEY (`id_servicos`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (1,'castração','serviços'),(2,'terapia comportamental','serviços'),(3,'atendimentos veterinários','serviços'),(4,'internação','serviços'),(5,'UTI','serviços'),(6,'acupuntura veterinária','serviços'),(7,'dermatologia veterinária','serviços'),(8,'hematologia veterinária','serviços'),(9,' odontologia veterinária','serviços'),(10,'radioterapia veterinária','serviços'),(11,'oftalmologia veterinária','serviços'),(12,'fisioterapia veterinária','serviços'),(13,'nutrição veterinária','serviços'),(14,'neurologia veterinária','serviços'),(15,'oncologia veterinária','serviços'),(16,'cuidados paliativos veterinários','serviços'),(17,'ortopedia veterinária','serviços'),(18,'anestesia veterinária','serviços'),(19,'cardiologia veterinária','serviços'),(20,'infectologia veterinária','serviços'),(21,'Biologia molecular','exames laboratoriais'),(22,'fezes','exames laboratoriais'),(23,'citologia','exames laboratoriais'),(24,'urina','exames laboratoriais'),(25,'dermatologia','exames laboratoriais'),(26,' bioquímica','exames laboratoriais'),(27,'microbiologia','exames laboratoriais'),(28,'sorologias ','exames laboratoriais'),(29,'líquidos cavitários','exames laboratoriais'),(30,'Eletrocardiograma','exames de imagem'),(31,'holter','exames de imagem'),(32,'pressão arterial','exames de imagem'),(33,'ressonância magnética','exames de imagem'),(34,'ultrassom','exames de imagem'),(35,'ecocardiograma','exames de imagem'),(36,'endoscopia','exames de imagem'),(37,'broncoscopia','exames de imagem'),(38,'rinoscopia','exames de imagem'),(39,'raio-x','exames de imagem'),(40,'tomografia ','exames de imagem');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `nome_animal` varchar(100) NOT NULL,
  `nome_tutor` varchar(100) NOT NULL,
  `genero` enum('masculino','feminino') NOT NULL,
  `Id_animal` int NOT NULL AUTO_INCREMENT,
  `telefone` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rga` varchar(11) NOT NULL,
  `especie` enum('cachorro','gato','aves','roedores') NOT NULL,
  `porte` enum('pequeno','medio','grande','gigante') NOT NULL,
  `idade` int NOT NULL,
  PRIMARY KEY (`Id_animal`),
  UNIQUE KEY `rga` (`rga`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('Molly','Ana Clara Mendes','feminino',1,900000000,'clara@example.com','12345','00000000','3374','cachorro','medio',3);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-04-27 10:55:01
